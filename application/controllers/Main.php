<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 12/1/2015
 * Time: 5:39 PM
 */

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

        $data['errorLogin'] = '';

        if(isset($_POST['user_login'])) {

            //print_r($_POST);

            $this->form_validation->set_rules('email', 'البريد الالكترونى', 'required' );
            $this->form_validation->set_rules('password', 'كلمة المرور', 'required');

            if($this->form_validation->run()) {
                $loginData['ur_email']    = $this->input->post('email');
                $loginData['ur_password'] = $this->input->post('password');

                if($this->Login_model->loginUser($loginData)) {
                    redirect( HOST_NAME . 'dashbord/');
                } else {
                   return $data['errorLogin'] =  'خطأ فى البريد الالكترونى او كلمة المرور ';
                }
            }
        }
    }


    public function index() {
    	
        if(isset($_POST['sendData'])) {
            $this->session->set_userdata($_POST);
            redirect(HOST_NAME . 'Register');
        }

        $data['users'] = $this->getUsers();
        $data['ads736'] = $this->Dsw_model->getByConLimit('ads', 'ads_size', 736, 1);
        $data['ads350'] = $this->Dsw_model->getByConLimit('ads', 'ads_size', 350, 1);
	$data['title'] = 'مسلم زواج';
        $data['errorLogin'] = $this->login();
        $data['siteFuture'] = $this->Dsw_model->getAll('site_features');
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri'] = $this->uri;
        $this->load->view('site/index', $data);
    }


    public function contact() {

        if(isset($_POST['hidden']) && $_POST['hidden'] != '') {
            die('هذه العمليه غير متاحة :P ');
        }
        $this->login();
        $sittings = $this->Dsw_model->getAll('sittings', 'row');

        $this->form_validation->set_rules('name', 'اسم الكريم', 'required');
        $this->form_validation->set_rules('title', 'عنوان الرسالة', 'required');
        $this->form_validation->set_rules('email', 'البريد الالكترونى', 'required|valid_email');
        $this->form_validation->set_rules('message', 'نص الرسالة', 'required');
        $data['messageSend'] = '';

        if(isset($_POST['sendMessage'])) {
            if ($this->form_validation->run()) {
                $mailData['am_name'] = $this->input->post('name');
                $mailData['am_title'] = $this->input->post('title');
                $mailData['am_email'] = $this->input->post('email');
                $mailData['am_message'] = $this->input->post('message');


                if ($this->Dsw_model->add('admin_message', $mailData)) {
                    if ($this->Dsw_model->sendMail($mailData['am_email'], $mailData['am_name'], $sittings->si_site_email, $mailData['am_title'], $mailData['am_message'])) {
                        $data['messageSend'] = 'تم الارسال بنجاح سوف يتم الرد عليك قريبا';
                        echo '<meta http-equiv="refresh" content="2">';
                    } else {
                        $data['messageSend'] = 'عفوا حدث خطأ ما لم يتم الارسال الى الاميل. حاول مرة اخرى';
                    }
                } else {
                    $data['messageSend'] = 'عفوا حدث خطأ ما لم يتم الارسال الى الاميل. حاول مرة اخرى';
                }

            }
        }
	$data['title'] = 'اتصل بنا';
        $data['errorLogin'] = $this->login();
        $data['siteInfo'] = $sittings;
        $data['uri'] = $this->uri;
        $data['session'] = $this->session;
        $this->load->view('site/contact', $data);
    }



    public function stories() {


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

	$data['title'] = 'قصص النجاح';
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
	$data['title'] = 'الاسئلة المكررة';
        $data['faqsData']   = $this->Dsw_model->getAll('faqs'); 
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $this->load->view('site/faqs', $data);
    }

    
    public function warning() {
    	$data['title'] = 'تحزيرات الامان';
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
    	$this->load->view('site/warning', $data);
    }
    
    public function privacy() {
    	$data['title'] = 'سياسة الخصوصية';
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
    	$this->load->view('site/privacy', $data);
    }
    
    public function pages() {
        $id = (int) $this->uri->segment(3);

	$page =  $this->Dsw_model->getByCond('p_id', $id, 'pages','row');
	
        $data['page'] = $page;
        $data['title'] = $page->p_name;
        $data['errorLogin'] = $this->login();
        $data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $this->load->view('site/pages', $data);

    }



    public function terms() {
    	$data['title'] = 'شروط الاستخدام';
    	$data['errorLogin'] = $this->login();
    	$data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
    	$data['uri']        = $this->uri;
    	$data['session']    = $this->session;
    	$this->load->view('site/terms', $data);
    }
    
    
    
    


}