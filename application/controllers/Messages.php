<?php

/**
 * Created by PhpStorm.
 * User: masterDev
 * Date: 12/7/2015
 * Time: 10:17 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


$pase = $_SERVER['SCRIPT_FILENAME'];

$dirName = dirname($pase);

require_once $dirName . '/application/language/lang.php';

class Messages extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Dsw_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');

        if ($this->session->userdata('userIsL0gin') != 1) {
            redirect('/register/');
        }
    }

    public function sendMessage() {
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        if (isset($_GET['action']) && $_GET['action'] == 'add_message') {

            $messageData['um_from_id'] = $this->session->userdata('userId');
            $messageData['um_to_id'] = $_POST['to_id'];
            $messageData['um_text'] = $_POST['text'];

            if (!$this->Dsw_model->add('users_message', $messageData)) {
                echo $validation['chatFalse'];
            }
            die();
        }
    }

    public function getSideMessage() {

        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        if (isset($_GET['action']) && $_GET['action'] == 'get_new') {

            $id = $this->session->userdata('userId');
            $this->db->select('um_from_id');
            $this->db->select('um_to_id');
            $this->db->distinct();
            $this->db->from('users_message');
            $this->db->where('um_from_id', $id);
            $this->db->or_where('um_to_id', $id);
            $this->db->order_by('um_id', 'DESC');
            $sideData = $this->db->get()->result_array();

            $asideChat = array();
            $notId = array();
            foreach ($sideData as $ids) {
                $notId[] = $ids['um_to_id'];
                $notId[] = $ids['um_from_id'];
            }

            $unqIds = array_unique($notId, SORT_REGULAR);

            foreach ($unqIds as $key => $value) {
                if ($value != $id) {
                    $this->db->select('ur_id');
                    $this->db->select('um_id');
                    $this->db->select('ur_name');
                    $this->db->select('ur_gender');
                    $this->db->select('ur_photo');
                    $this->db->select('um_text');
                    $this->db->select('um_date');
                    $this->db->from('users_register');
                    $this->db->where('ur_id', $value);
                    $this->db->join('users_message', "users_message.um_from_id = '$value' OR users_message.um_to_id = '$value'");

                    $this->db->order_by('um_id', 'DESC');
                    $this->db->group_by('um_id', 'DESC');
                    $asideChat[] = $this->db->get()->row_array();
                }
            }

            foreach ($asideChat as $asideUser) {
                echo '<li class="single-list">';
                echo '<a href="' . HOST_NAME . 'messages/?m=' . $asideUser['ur_id'] . '">';
                echo '<div class="user-photo">';
                if($asideUser['ur_photo'] != '') {
                    echo '<img src="' . HOST_NAME . 'upload/' . $asideUser['ur_photo'] . '" alt=""/>';    
                } else {
                    if($asideUser['ur_gender'] == '0') {
                        echo '<img src="' . HOST_NAME . 'upload/mail-defulee.png'. '" alt=""/>';    
                    } else {
                        echo '<img src="' . HOST_NAME . 'upload/female-defulte.png'. '" alt=""/>';    
                    }
                }
                
                echo '</div>';
                echo '<div class="user-com">';
                echo '<h3>' . $asideUser['ur_name'] . '</h3>';
                echo '<span>' . strtoupper(date('g:i a', strtotime($asideUser['um_date']))) . '</span>';
                echo '<p>' . strlen($asideUser['um_text']) > 30 ? substr($asideUser['um_text'], 0, 30) . ' ....' : substr($asideUser['um_text'], 0, 30) . '</p>';
                echo '<input type="hidden" value="' . $asideUser['um_id'] . '" class="last_aside_id">';
                echo '</div>';
                echo '</a>';
                echo '</li>';
            }
        }
    }

    public function getMessageContent() {

//        if (isset($_GET['m']) && $_GET['m'] != null) {
//            $id = (int) $_GET['m'];
//        } else {
//            $id = 0;
//        }
            
        
        
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        
        if (isset($_GET['action']) && $_GET['action'] == 'get_new') {

            $myId = $this->session->userdata('userId');
            $this->db->select('um_id');
            $this->db->select('um_from_id');
            $this->db->select('um_to_id');
            $this->db->select('um_date');
            $this->db->select('um_text');
            $this->db->select('ur_name');
            $this->db->select('ur_gender');
            $this->db->select('ur_id');
            $this->db->select('ur_photo');
            $this->db->from('users_message');
            $this->db->where('um_from_id', $id);
            $this->db->where('um_to_id', $myId);
            $this->db->or_where('um_from_id', $myId);
            $this->db->where('um_to_id', $id);
            $this->db->join('users_register', 'users_register.ur_id = users_message.um_from_id ');
            // $this->db->group_by('um_id');
            $this->db->order_by('um_id');

            $result = $this->db->get()->result_array();

            foreach ($result as $message) {

                echo '<li class="single-chat-room">';
                echo '<div class="UserPhoto">';

                 if($message['ur_photo'] != '') {
                    echo '<img src="' . HOST_NAME . 'upload/' . $message['ur_photo'] . '" alt=""/>';
                } else {
                    if($message['ur_gender'] == '0') {
                        echo '<img src="' . HOST_NAME . 'upload/mail-defulee.png'. '" alt=""/>';    
                    } else {
                        echo '<img src="' . HOST_NAME . 'upload/female-defulte.png'. '" alt=""/>';    
                    }
                }

                
                echo '</div>';
                echo '<h3>' . $message['ur_name'] . '</h3>';
                echo '<span>' . strtoupper(date('g:i a', strtotime($message['um_date']))) . '</span>';
                echo '<p>' . $message['um_text'] . '</p>';
                echo '</li>';
            }
        }
    }

    public function chatAjax() {
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $data['audio'] = $this->sendMessage();
        $data['messageContent'] = $this->getMessageContent();
        $data['asideUsers'] = $this->getSideMessage();

        $this->load->view('site/contentChat', $data);
    }

    public function index() {

        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;

        $this->db->select('ur_acount_done');
        $this->db->from('users_register');
        $this->db->where('ur_id', $this->session->userdata('userId'));
        $user = $this->db->get()->row();

        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session'] = $this->session;
        $data['uri'] = $this->uri;
        $data['title'] = $pagesTitle['MessagesIndex'];
        if($user->ur_acount_done == '1') {
            $this->load->view('site/template/pagesHeader', $data);
            $this->chatAjax();
            $data['error'] = $this->load->view('site/chat', $data);
            $this->load->view('site/template/footer', $data);    
        } else {

            $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
            $data['session'] = $this->session;
            $data['uri'] = $this->uri;
            $this->load->view('site/404', $data);
        }
        
    }

}
