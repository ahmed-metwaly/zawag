<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 12/1/2015
 * Time: 5:39 PM
 */

$pase = $_SERVER['SCRIPT_FILENAME'];

$dirName = dirname($pase);

require_once $dirName . '/application/language/lang.php';




class Main extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->model('Login_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
        
        

    }


   private function getUsers() {
       $this->db->select('ur_id');
       $this->db->select('ur_photo');
       $this->db->from('users_register');
       $this->db->where('ur_photo !=', '');
       $this->db->where('ur_acount_done', '1');

       return $this->db->get()->result_array();

   }

    private function login() {
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;

        $data['errorLogin'] = '';

        if(isset($_POST['user_login'])) {

            //print_r($_POST);

            $this->form_validation->set_rules('email', $validation['filedsEmail'], 'required' );
            $this->form_validation->set_rules('password', $validation['filedsPass'], 'required');

            if($this->form_validation->run()) {
                $loginData['ur_email']    = $this->input->post('email');
                $loginData['ur_password'] = $this->input->post('password');

                if($this->Login_model->loginUser($loginData)) {
                    redirect( HOST_NAME . 'dashbord/');
                } else {
                   return $data['errorLogin'] =  $validation['loginError'];
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




        if(isset($_POST['sendData'])) {
            $this->session->set_userdata($_POST);
            redirect(HOST_NAME . 'Register');
        }

        $data['users'] = $this->getUsers();
        $data['ads736'] = $this->Dsw_model->getByConLimit('ads', 'ads_size', 736, 1);
        $data['ads350'] = $this->Dsw_model->getByConLimit('ads', 'ads_size', 350, 1);
	$data['title'] = $pagesTitle['mainIndex'];
        $data['errorLogin'] = $this->login();
        $data['siteFuture'] = $this->Dsw_model->getAll('site_features');
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri'] = $this->uri;
        $this->load->view('site/index', $data);
    }


    public function contact() {
        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        if(isset($_POST['hidden']) && $_POST['hidden'] != '') {
            die($validation['403']);
        }
        $this->login();
        $sittings = $this->Dsw_model->getAll('sittings', 'row');

        $this->form_validation->set_rules('name', $validation['filedsName'], 'required');
        $this->form_validation->set_rules('title', $validation['filedsTilte'], 'required');
        $this->form_validation->set_rules('email', $validation['filedsEmail'], 'required|valid_email');
        $this->form_validation->set_rules('message', $validation['filedsMsg'], 'required');
        $data['messageSend'] = '';

        if(isset($_POST['sendMessage'])) {
            if ($this->form_validation->run()) {
                $mailData['am_name'] = $this->input->post('name');
                $mailData['am_title'] = $this->input->post('title');
                $mailData['am_email'] = $this->input->post('email');
                $mailData['am_message'] = $this->input->post('message');


                if ($this->Dsw_model->add('admin_message', $mailData)) {
                    if ($this->Dsw_model->sendMail($mailData['am_email'], $mailData['am_name'], $sittings->si_site_email, $mailData['am_title'], $mailData['am_message'])) {
                        $data['messageSend'] = $validation['sendMessageTrue'];
                        echo '<meta http-equiv="refresh" content="2">';
                    } else {
                        $data['messageSend'] = $validation['sendMessageFalse'];
                    }
                } else {
                    $data['messageSend'] = $validation['sendMessageFalse'];
                }

            }
        }
	$data['title'] = $pagesTitle['mainContact'];
        $data['errorLogin'] = $this->login();
        $data['siteInfo'] = $sittings;
        $data['uri'] = $this->uri;
        $data['session'] = $this->session;
        $this->load->view('site/contact', $data);
    }



    public function stories() {

                global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;

        $this->load->library('pagination');
        $config['base_url']      = HOST_NAME . 'main/stories/';
        $config['total_rows']    = $this->Dsw_model->countRows('success_stories');
        $config['per_page']      = 10;
        $config["uri_segment"]   = 3;
        $config['num_links']     = 10;
        $config['next_link'] = '<i class="fa fa-arrow-circle-o-right"></i>';
        $config['prev_link'] = '<i class="fa fa-arrow-circle-o-left"></i>';
        $config['last_link'] = false;
        $config['first_link'] = false;
        $config['cur_tag_open'] = '<a>';
        $config['cur_tag_close'] = '</a>';

        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        $sittings = $this->Dsw_model->getAll('sittings', 'row');

        // get form data
        $this->db->select('*');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '1');
        $this->db->join('users_register' , 'success_stories.ss_ur_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
       $from = $this->db->get()->result_array();

        // get to data
        $this->db->select('ur_name');
        $this->db->select('ur_gender');
        $this->db->select('ur_age');
        $this->db->select('ur_country');
        $this->db->select('ur_country_stay');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '1');
        $this->db->join('users_register' , 'success_stories.ss_to_ur_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $to = $this->db->get()->result_array();

	$data['title'] = $pagesTitle['mainStories'];
        $data['pagination'] = $this->pagination->create_links();
        $data['allStories'] = $from;
        $data['to']         = $to;
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $sittings;
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $this->load->view('site/stories', $data);
    }


    public function viewStory() {

        global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;

        $id = (int) $this->uri->segment(3);

        // get form data
        $this->db->select('*');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '1');
        $this->db->where('ss_id', $id);
        $this->db->join('users_register' , 'success_stories.ss_ur_id = users_register.ur_id', 'left');
        $from = $this->db->get()->row();

        // get to data
        $this->db->select('ur_name');
        $this->db->select('ur_gender');
        $this->db->select('ur_age');
        $this->db->select('ur_country');
        $this->db->select('ur_country_stay');
        $this->db->select('ur_target');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '1');
        $this->db->where('ss_id', $id);
        $this->db->join('users_register' , 'success_stories.ss_to_ur_id = users_register.ur_id', 'left');
        $to = $this->db->get()->row();
	@$data['title'] = $to->ss_name;
        $data['viewStory'] = $from;
        $data['to'] = $to;
        $sittings = $this->Dsw_model->getAll('sittings', 'row');
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $sittings;
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $this->load->view('site/viewStory', $data);
    }


    public function faqs() {
	global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $data['title'] = $pagesTitle['mainFaqs'];
        $data['faqsData']   = $this->Dsw_model->getAll('faqs'); 
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $data['sideAds']    = $this->Dsw_model->getPagesAds();
        $this->load->view('site/faqs', $data);
    }

    
    public function warning() {
    	global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $data['title'] = $pagesTitle['mainWarning'];
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
        $data['sideAds']    = $this->Dsw_model->getPagesAds();
    	$this->load->view('site/warning', $data);
    }
    
    public function privacy() {
    	global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $data['title'] = $pagesTitle['mainPrivacy'];
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
        $data['sideAds']    = $this->Dsw_model->getPagesAds();
    	$this->load->view('site/privacy', $data);
    }
    
    public function pages() {

            	global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        $id = (int) $this->uri->segment(3);

	$page =  $this->Dsw_model->getByCond('p_id', $id, 'pages','row');
	
        $data['page'] = $page;
        $data['title'] = $page->p_name;
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $data['sideAds']    = $this->Dsw_model->getPagesAds();
        $this->load->view('site/pages', $data);

    }



    public function terms() {
    	global $sittings;
        global $validation;
        global $pagesTitle;
        global $contry;
        global $target;
        global $exSession;
        
        
        $data['title'] = $pagesTitle['mainTerms'];
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
        $data['sideAds']    = $this->Dsw_model->getPagesAds();
    	$this->load->view('site/terms', $data);
    }
    
    
    
    


}