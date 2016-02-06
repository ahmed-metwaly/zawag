<?php
/**
 * Created by PhpStorm.
 * User: masterDev
 * Date: 12/7/2015
 * Time: 4:49 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$pase = $_SERVER['SCRIPT_FILENAME'];

$dirName = dirname($pase);

require_once $dirName . '/application/language/lang.php';

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->model('Login_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
    }


    private function getLike(){
        $this->db->where('uf_from_id', $this->session->userdata('userId'));
        $this->db->where('uf_to_id', $this->uri->segment(3));
        return ($this->db->get('users_favorites')->num_rows() === 1) ? 'likeIn' : '';

    }


    private function sendMessage() {
        
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $id = (int) $this->uri->segment(3);
        if(isset($_POST['sendMessage'])) {
            $this->form_validation->set_rules('text', $validation['filedsProfileText'], 'required|trim');

            if($this->form_validation->run()) {
                if(isset($id) && $id != '') {
                    $mData['um_from_id'] = $this->session->userdata('userId');
                    $mData['um_to_id']    = $id;
                    $mData['um_text']     = $this->input->post('text');

                    $this->Dsw_model->add('users_message', $mData);
                }
                
            }



        }
    }

    public function index() {
        
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        if($this->session->userdata('userIsL0gin') != 1) {
            redirect('/register/');
        }

        $id = (int) $this->uri->segment(3);

        if($id == null) {
            die('Directory access is forbidden.');
        }


        // add like
        if(isset($_GET['action']) && $_GET['action'] == 'addLike') {
            $this->Dsw_model->add('users_favorites', array('uf_from_id' => $this->session->userdata('userId'), 'uf_to_id' => $this->uri->segment(3)));
        }


        // remove like
        if(isset($_GET['action']) && $_GET['action'] == 'removeLike') {
            $this->db->where('uf_from_id', $this->session->userdata('userId'));
            $this->db->where('uf_to_id', $this->uri->segment(3));
            $this->db->delete('users_favorites');
        }




        $this->sendMessage();
        // get like
        $data['like'] = $this->getLike();
        // get user data register
        $userR =  $this->Dsw_model->getByCond('ur_id', $id, 'users_register', 'row_array');
        $data['usersRegister']        = $userR;
        $data['usersSocialPosition']  = $this->Dsw_model->getByCond('us_ur_id', $id, 'users_social_position', 'row_array');
        $data['usersAbout']           = $this->Dsw_model->getByCond('uab_ur_id', $id, 'users_about', 'row_array');
	$data['title'] = $userR['ur_name'];
        $data['photos'] = $this->Dsw_model->getByCond('up_ur_id', $this->uri->segment(3), 'users_photos');
        $data['session'] = $this->session;
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri'] = $this->uri;

        $this->load->view('site/profile', $data);

    }





}