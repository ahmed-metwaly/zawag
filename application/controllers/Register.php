<?php
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 11/28/2015
 * Time: 1:15 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {


    private $tableName = 'users_register';

    public function __construct() {
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->model('Login_model');
        $this->load->model( 'Register_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
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
                    redirect( HOST_NAME . '/dashbord/');
                } else {
                    return $data['errorLogin'] =  'خطأ فى البريد الالكترونى او كلمة المرور ';
                }

            }



        }
    }


    public function index() {

        if($this->session->userdata('userLogin') == '1') {
            redirect('dashboard');
        }

        $data['errorLogin'] = $this->login();


        // register

        if(isset($_GET['action']) && $_GET['action'] == 'add'){

            $this->form_validation->set_rules('name','الاسم','trim|required|min_length[3]');
            $this->form_validation->set_rules('gender','النوع','required');
            $this->form_validation->set_rules('email','البريد الاكترونى','trim|required|min_length[5]valid_email|is_unique[users_register.ur_email]');
            $this->form_validation->set_rules('remail','تاكيد البريد الاكترونى','trim|required|min_length[5]|valid_email|matches[email]');
            $this->form_validation->set_rules('password','كلمة المرور','trim|required|min_length[6]');
            $this->form_validation->set_rules('repassword','تأكيد كلمة المرور','trim|required|matches[password]');
            $this->form_validation->set_rules('age','العمر','required');
            $this->form_validation->set_rules('target','الهدف من التسجيل','required');
            $this->form_validation->set_rules('country','دولة الاصل','required');
            $this->form_validation->set_rules('country_stay','دولة الاقامة','required');
            $this->form_validation->set_rules('radio4e','الموافقه على الشروط','required');


            if($this->form_validation->run()){

                $dataReg['ur_name']         = $this->input->post('name');
                $dataReg['ur_gender']       = $this->input->post('gender');
                $dataReg['ur_email']        = $this->input->post('email');
                $dataReg['ur_password']     = $this->Register_model->hashPassword($this->input->post('password'));
                $dataReg['ur_age']          = $this->input->post('age');
                $dataReg['ur_target']       = $this->input->post('target');
                $dataReg['ur_country']      = $this->input->post('country');
                $dataReg['ur_country_stay'] = $this->input->post('country_stay');
                $dataReg['ur_ip']           = $_SERVER['REMOTE_ADDR'];;
                $dataReg['ur_last_login']   = date('Y-m-d H:m:s');
                $dataReg['ur_is_online']    = 1;
                $dataReg['ur_is_active']    = 0;
                $dataReg['ur_acount_done']  = 0;
                $dataReg['ur_photo']        = '';
                $dataReg['ur_level_id']     = 1;
                $dataReg['ur_date']         = date('Y-m-d H:m:s');

                $sessionData = array(
                    'userId'     => $this->Dsw_model->getLastInsertId('users_register', 'ur_id') + 1,
                    'userName'   => $this->input->post('name'),
                    'userGender' => $this->input->post('gender'),
                    'userEmail'  => $this->input->post('email'),
                    'userIsRegister' => 1,
                    'userOnline'  => date('Y-m-d H:m:s')
                );



                if($this->Register_model->addUser($dataReg, $sessionData)){
                    $this->ssession->set_userdata(array('userIsRegister' => '1'));
                    redirect(HOST_NAME . 'Register/', 'refresh');
                    die();
                }
                    

            }

            echo '<div id="errors">';
            echo '<input type="text" class="errorName" value="'. form_error('name') .'"> ';

            echo '<input type="text" class="errorGender" value="'. form_error('gender') .'">';
            echo '<input type="text" class="errorEmail" value="'. form_error('email') .'" > ';
            echo '<input type="text" class="errorRemail" value="'. form_error('remail') .'"> ';
            echo '<input type="text" class="errorPassword" value="'. form_error('password') .'">';
            echo '<input type="text" class="errorRepassword" value="'. form_error('repassword') .'">';
            echo '<input type="text" class="errorAge" value="'. form_error('age') .'">';
            echo '<input type="text" class="errorTarget" value="'. form_error('target') .'">';
            echo '<input type="text" class="errorCountry" value="'. form_error('country') .'">';
            echo '<input type="text" class="errorCountry_stay" value="'. form_error('country_stay') .'">';
            echo '<input type="text" class="radio4" value="'. form_error('radio4e') .'">';
            echo '</div>';
        }



        //dataSituation

        if(isset($_GET['action']) && $_GET['action'] == 'dataSituation') {

            $this->form_validation->set_rules('learn', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('work', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('work_field', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('monthly_income', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('physique', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('ready_move', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('skin_color', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('weight', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('height', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('family_status', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('want_children', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('physical_condition', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('health_status', 'هذه العمليه غير مسموح بها');
            $this->form_validation->set_rules('religious_commitmen', 'هذه العمليه غير مسموح بها');

            //if($this->form_validation->run()) {

            $ataSituation['us_ur_id']                 = ($this->session->userdata('userId') != null) ? $this->session->userdata('userId') : '';
            $ataSituation['usp_learn']                = ($this->input->post('learn') != null) ? $this->input->post('learn') : '';
            $ataSituation['usp_work']                 = ($this->input->post('work') != null) ? $this->input->post('work') : '';
            $ataSituation['usp_work_field']           = ($this->input->post('work_field') != null) ? $this->input->post('work_field') : '';
            $ataSituation['usp_family_status']        = ($this->input->post('family_status') != null) ? $this->input->post('family_status') : '';
            $ataSituation['usp_want_children']        = ($this->input->post('want_children') != null) ? $this->input->post('want_children') : '';
            $ataSituation['usp_housing_case']         = ($this->input->post('housing_case') != null) ? $this->input->post('housing_case') : '';
            $ataSituation['usp_ready_move']           = ($this->input->post('ready_move') != null) ? $this->input->post('ready_move') : '';
            $ataSituation['usp_weight']               = ($this->input->post('weight') != null) ? $this->input->post('weight') : '';
            $ataSituation['usp_height']               = ($this->input->post('height') != null) ? $this->input->post('height') : '';
            $ataSituation['usp_skin_color']           = ($this->input->post('skin_color') != null) ? $this->input->post('skin_color') : '';
            $ataSituation['usp_physique']             = ($this->input->post('physique') != null) ? $this->input->post('physique') : '' ;
            $ataSituation['usp_physical_condition']   = ($this->input->post('physical_condition') != null) ? $this->input->post('physical_condition') : '';
            $ataSituation['usp_monthly_income']       = ($this->input->post('monthly_income')  != null) ? $this->input->post('monthly_income') : '';
            $ataSituation['usp_health_status']        = ($this->input->post('health_status') != null) ? $this->input->post('health_status') : '';
            $ataSituation['usp_religious_commitment'] = ($this->input->post('religious_commitmen') != null) ? $this->input->post('religious_commitmen') : '';
            // $this->session->sess_destroy();
            $this->session->set_userdata(array('dataSituation' => '1'));

            $this->Dsw_model->add('users_social_position', $ataSituation);
            redirect(HOST_NAME . 'Register/','refresh');

            // }
        }


        if(isset($_POST['upload'])) {
           $img = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
           if(isset($img) && $img != '') {
                if($this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), array('ur_photo' => $img), 'users_register' )){
                  // $this->session->sess_destroy();
                   $this->session->set_userdata(array('upload' => '1'));
                   redirect(HOST_NAME . 'Register/','refresh');
                }
           }
        }



        if(isset($_POST['abut'])) {
            $this->form_validation->set_rules('about_search', 'اللذين تبحث عنهم', 'min_length[15]');
            $this->form_validation->set_rules('myself', 'تحدث عن نفسك', 'min_length[15]');
            if($this->form_validation->run()) {
                $dataAbout['uab_ur_id'] = $this->session->userdata('userId');
                $dataAbout['uab_myself'] = $this->input->post('myself');
                $dataAbout['uab_about_search'] = $this->input->post('about_search');

                if ($this->Dsw_model->add('users_about', $dataAbout)) {
                    // $this->session->sess_destroy();
                    $this->session->set_userdata(array('userAbut' => '1'));
                    redirect(HOST_NAME . 'Register/', 'refresh');
                }
            }
        }


         if(isset($_POST['done'])) {

         }

	$data['title'] = 'الاشتراك';
        $data['session']  = $this->session;
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']      = $this->uri;
        $this->load->view('site/singUp', $data);
    }



    public function activeEmail() {

        $this->db->select('si_site_email');
        $this->db->from('sittings');
        $this->db->where('si_id', '1');
        $emil = $this->db->get()->row();
        
        if($this->session->userdata('userEmail') != null) {
            if($this->Register_model->sendActivation($emil->si_site_email, $this->session->userdata('userEmail'), $this->session->userdata('userName'))){
                $data['message'] = 'تفقد بريدك الالكترونى';
            }
            
        } else {
            $data['message'] = 'تم انتهاء الجلسه. يرجى المحاولة مره اخرى';
        }

        
       
        $this->session->set_userdata(array('userIsL0gin' => '1'));
        $data['title'] = 'تفعيل الاميل';
        $data['session']  = $this->session;
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']      = $this->uri;
        $this->load->view('site/activeEmail', $data);

    }


    public function validateActive() {

        if($this->session->userdata('emailActive') != null) {
           
            $data['session']  = $this->session;
            $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
            $data['uri']      = $this->uri;
            

            if($this->Register_model->activationTrue()) {
                $this->session->set_userdata(array('userIsL0gin' => '1'));  
                $data['message'] = 'تم التفعيل بنجاح';
                $data['title'] = 'تم التفعيل بنجاح';
                if(!$this->Dsw_model->edit('users_register', array('ur_is_active' => '1'))) {
                    echo '<script>alert("لم يتم التفعيل. يرجى مراسلة الادارة");</script>';
                }
               
                $this->load->view('site/validateActiveTrue', $data);
            } else {
            $data['title'] = 'لم يتم التفعيل';
                $data['message'] = 'خطأ لم يتم التفعيل. برجاى المحاولة مره اخرى';
                $this->load->view('site/validateActiveFalse', $data);
            }
        } else {
         $data['title'] =  'انتهت الجلسه';
              $data['message'] = 'لقد انتهت الجلسه الخاصه بك';
            $this->load->view('site/validateActiveFalse', $data);
        }

       

    }


    public function exitEmail(){
        // $this->session->sess_destroy();
        $this->session->set_userdata(array('userIsL0gin' => '1'));
        redirect(HOST_NAME . 'dashbord/', 'refresh');
    }

}