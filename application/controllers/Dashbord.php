<?php
/**
 * Created by PhpStorm.
 * User: masterDev
 * Date: 12/10/2015
 * Time: 8:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class DashBord extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
       
        if($this->session->userdata('userIsL0gin') != '1') {
            redirect('/register/');
       }

    }

    private function getHeaderUsers($type) {

        $this->db->select('ur_id');
        $this->db->select('ur_photo');
        $this->db->from('users_register');
        $this->db->where('ur_gender !=', "$type");
        $this->db->where('ur_photo !=', '');
        $this->db->where('ur_id !=', '3');
        $this->db->join('users_online', 'users_online.uo_ur_id = users_register.ur_id AND users_online.uo_online_date > users_online.uo_leave_date');
        $this->db->limit('6');
        $this->db->order_by('ur_id','DESC');

        return $this->db->get()->result_array();

    }

    private function uaerAcountDone() {
        $this->db->select('ur_id');
        $this->db->from('users_register');
        $this->db->where('ur_id', $this->session->userdata('userId'));
        $this->db->where('ur_acount_done', '1');

        return ($this->db->get()->num_rows() === 1) ? true : false;


    }

    private function getCountMyLikes() {
        $id = $this->session->userdata('userId');
        // my likes
        $this->db->select('*');
        $this->db->from('users_favorites');
        $this->db->where('uf_from_id', $id );
        $this->db->join('users_register', 'users_register.ur_id = users_favorites.uf_to_id');
        return $this->db->get()->num_rows();
    }



    private function getCountOutherLikes() {
        $id = $this->session->userdata('userId');
        // my likes
        $this->db->select('*');
        $this->db->from('users_favorites');
        $this->db->where('uf_to_id', $id );
        $this->db->join('users_register', 'users_register.ur_id = users_favorites.uf_from_id');
        return $this->db->get()->num_rows();
    }


    public function index() {

        // the plan time is finshed
        $acountInfo = $this->Dsw_model->getByCond('c_ur_id', $this->session->userdata('userid'), 'cart', 'row');
              
        if(isset($acountInfo->c_end) && $acountInfo->c_end != '') {
            if($acountInfo->c_end > date('Y-m-d')) {
                if($this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), array('ur_acount_done' => '0'), 'users_register')){
                    if($this->Dsw_model->remove('cart', $this->session->userdata('userId'), 'c_ur_id')){
                        redirect(HOST_NAME . 'dashbord/');                    
                    }
                }
            }
        }

        $type = $this->session->userdata('userGender');
        $data['myLikes']     = $this->getCountMyLikes();
        $data['outherLikes'] = $this->getCountOutherLikes();
        $data['userHeader']  = $this->getHeaderUsers($type);
        $data['acountDone']  = $this->uaerAcountDone();
        $data['title'] = 'الرئيسيه';
        $data['timeLine']    = $this->Dsw_model->timeLine();
        $data['siteInfo']    = $this->Dsw_model->getAll('sittings', 'row');
        $data['session']     = $this->session;
        $data['uri']         = $this->uri;
        $this->load->view('site/dashBord', $data);

    }




    public function liks() {

        $id = $this->session->userdata('userId');
        // my likes
        $this->db->select('*');
        $this->db->from('users_favorites');
        $this->db->where('uf_from_id', $id );
        $this->db->join('users_register', 'users_register.ur_id = users_favorites.uf_to_id');
        $myLikes = $this->db->get()->result_array();


        //our likes

        $this->db->select('*');
        $this->db->from('users_favorites');
        $this->db->where('uf_to_id', $id );
        $this->db->join('users_register', 'users_register.ur_id = users_favorites.uf_from_id');
        $ourLikes = $this->db->get()->result_array();



        $data['myLikes']  = $myLikes;
        $data['ourLikes'] = $ourLikes;
        $data['title'] = 'الاعجابات';
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session'] = $this->session;
        $data['uri'] = $this->uri;
        $this->load->view('site/liks',$data);
    }


    public function photos() {
        $data['messageData'] = '';
        if(isset($_POST['upload']))
        {
            if($ret = $this->Dsw_model->uploadFile(UPLOAD_FILE,'png|jpg|jpeg|PNG', 10*1024)){
                if($this->Dsw_model->add('users_photos', array('up_ur_id' => $this->session->userdata('userId'), 'up_photo' => $ret))){
                     $data['messageData'] = 'تم اضافة الصوره بنجاح';
                } else {
                    $data['messageData'] = 'خطأ فى الرفع حاول مره اخرى';
                }
            }
        }

        // get photos
        $data['photos'] = $this->Dsw_model->getByCond('up_ur_id', $this->session->userdata('userId'), 'users_photos');
        $data['timeLine']   = $this->Dsw_model->timeLine();
        $data['title'] = 'البوم الصور';
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session'] = $this->session;
        $data['uri'] = $this->uri;
        $this->load->view('site/photos',$data);
    }




    public function addStories() {
    	
    	
    	
        if(isset($_POST['hidden']) && $_POST['hidden'] != '') {
            die('هذة العمليه غير متوفره :P');
        }
        $this->form_validation->set_rules('title', 'عنوان القصة', 'required');
        $this->form_validation->set_rules('text','نص القصة', 'required');
        $this->form_validation->set_rules('to','مع من قصتك', 'required');
        //$this->form_validation->set_rules('userfile',' صورة القصة ', 'required');
        $data['messageDone'] = '';
        $data['messageError'] = '';
        if($this->form_validation->run()){

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE,'png|jpg|jpeg', 10*1024);



            $dataStories['ss_title'] = $this->input->post('title');
            $dataStories['ss_ur_id'] = $this->session->userdata('userId');
            $dataStories['ss_text']  = $this->input->post('text');
            $dataStories['ss_to_ur_id']  = $this->input->post('to');
            $dataStories['ss_photo'] = $photo;

            if(!is_array($photo)){
                if($this->Dsw_model->add('success_stories', $dataStories)){
                    $data['messageDone'] = 'تم الاضافة بنجاح';
                } else {
                    $data['messageError'] = 'غفوا حدث خطأ ما . يرجى اعاده المحاولة مره اخرى';
                }
            } else {
                $data['messageError'] = 'غفوا حدث خطأ ما . يرجى اعاده المحاولة مره اخرى';
            }
        }


        // get users matching

        $this->db->select('*');
        $this->db->from('users_message');
        $this->db->where('um_from_id', $this->session->userdata('userId'));
        $this->db->join('users_register', 'users_register.ur_id = users_message.um_to_id');
        $this->db->group_by('ur_id');
        $toInfo = $this->db->get()->result_array();
        $data['title'] = 'اضافة قصة';
        $data['toInfo'] = $toInfo;
        $data['timeLine']   = $this->Dsw_model->timeLine();
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session'] = $this->session;
        $data['uri'] = $this->uri;
        $this->load->view('site/addStory',$data);
    }
    
    
    public function updateInfo() {
       
        // get user data form 2 tables
        $this->db->select('*');
        $this->db->from('users_register');
        $this->db->where('ur_id', $this->session->userdata('userId'));
        $this->db->join('users_social_position', 'users_register.ur_id = users_social_position.us_ur_id', 'left');
        $this->db->join('users_about', 'users_register.ur_id = users_about.uab_ur_id', 'left');
        $userData = $this->db->get()->row();
        $dataRegister = '';

        if(isset($_POST['registerData'])) {
            $this->form_validation->set_rules('name','الاسم','trim|required|min_length[3]');
            $this->form_validation->set_rules('gender','النوع','required');
            if($_POST['email'] != $userData->ur_email) {
                $this->form_validation->set_rules('email','البريد الاكترونى','trim|required|min_length[5]valid_email|is_unique[users_register.ur_email]');
            }
            if(isset($_POST['password']) && $_POST['password'] != '') {
                $this->form_validation->set_rules('password','كلمة المرور','trim|required|min_length[6]');
                $this->form_validation->set_rules('repassword','تأكيد كلمة المرور','trim|required|matches[password]');
            }

            $this->form_validation->set_rules('age','العمر','required');
            $this->form_validation->set_rules('target','الهدف من التسجيل','required');
            $this->form_validation->set_rules('country','دولة الاصل','required');
            $this->form_validation->set_rules('country_stay','دولة الاقامة','required');
            //print_r($_POST);
            if($this->form_validation->run()) {
                if($this->input->post('name') != $userData->ur_name) {
                    $dataRegister['ur_name']   = $this->input->post('name');    
                }
                
                if($this->input->post('gender') != $userData->ur_gender) {
                    $dataRegister['ur_gender'] = $this->input->post('gender');
                }

                if($this->input->post('email') != $userData->ur_email) {
                    $dataRegister['ur_email'] = $this->input->post('email');
                }
                
                if(isset($_POST['password']) && $_POST['password'] != '') {
                    $dataRegister['ur_password'] = $this->Login_model->hashPassword($this->input->post('password'));
                }

                if($this->input->post('age') != $userData->ur_age) {
                    $dataRegister['ur_age'] = $this->input->post('age');    
                }
                
                if($this->input->post('target') != $userData->ur_target) {
                    $dataRegister['ur_target'] = $this->input->post('target');    
                }

                if($this->input->post('country') != $userData->ur_country) {
                    $dataRegister['ur_country'] = $this->input->post('country');    
                }
                
                if($this->input->post('country_stay') != $userData->ur_country_stay) {
                    $dataRegister['ur_country_stay'] = $this->input->post('country_stay');    
                } 
                
                if(is_array($dataRegister) && !empty($dataRegister)) {
                    if($this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), $dataRegister, 'users_register')){
                        $data['success'] = 'تم التعيل بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                } 
            }
        } // end register

        if(isset($_POST['socialSituation'])) {
            // $this->form_validation->set_rules('learn', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('work', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('work_field', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('monthly_income', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('physique', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('ready_move', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('skin_color', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('weight', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('height', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('family_status', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('want_children', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('physical_condition', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('health_status', 'هذه العمليه غير مسموح بها', 'required');
            // $this->form_validation->set_rules('religious_commitmen', 'هذه العمليه غير مسموح بها', 'required');
            $ataSituation = '';
            if($this->form_validation->run()){
               
               if($this->input->post('learn') != $userData->usp_learn) {
                    $ataSituation['usp_learn'] = $this->input->post('learn');
               }

               if($this->input->post('work') != $userData->usp_work){
                    $ataSituation['usp_work'] = $this->input->post('work');
               }

               if($this->input->post('work_field') != $userData->usp_work_field) {
                    $ataSituation['usp_work_field'] = $this->input->post('work_field');
               }

               if($this->input->post('family_status') != $userData->usp_family_status) {
                    $ataSituation['usp_family_status'] = $this->input->post('family_status');
               }

               if($this->input->post('want_children') != $userData->usp_want_children) {
                $ataSituation['usp_want_children'] = $this->input->post('want_children');
               }

               if($this->input->post('housing_case') != $userData->usp_housing_case) {
                $ataSituation['usp_housing_case'] = $this->input->post('housing_case');
               }

               if($this->input->post('ready_move') != $userData->usp_ready_move) {
                    $ataSituation['usp_ready_move'] = $this->input->post('ready_move');
               }

               if($this->input->post('weight') != $userData->usp_weight) {
                    $ataSituation['usp_weight'] = $this->input->post('weight');
               }

               if($this->input->post('height') != $userData->usp_height) {
                    $ataSituation['usp_height'] = $this->input->post('height');
               }

               if($this->input->post('skin_color') != $userData->usp_skin_color) {
                $ataSituation['usp_skin_color'] = $this->input->post('skin_color');
               }

               if($this->input->post('physique') != $userData->usp_physique) {
                    $ataSituation['usp_physique'] = $this->input->post('physique');
               }

               if($this->input->post('physical_condition') != $userData->usp_physical_condition) {
                    $ataSituation['usp_physical_condition'] = $this->input->post('physical_condition');
               }
            
                if($this->input->post('monthly_income') != $userData->usp_monthly_income) {
                    $ataSituation['usp_monthly_income'] = $this->input->post('monthly_income');    
                }     

                if($this->input->post('health_status') != $userData->usp_health_status) {
                    $ataSituation['usp_health_status'] = $this->input->post('health_status');
                }

                if($this->input->post('religious_commitmen') != $userData->usp_religious_commitment) {
                    $ataSituation['usp_religious_commitment'] = $this->input->post('religious_commitmen');    
                }
                
                if(is_array($ataSituation) && !empty($ataSituation)) {
                     if($this->Dsw_model->edit('us_ur_id', $this->session->userdata('userId'), $ataSituation, 'users_social_position')){
                        $data['success'] = 'تم التعيل بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                }
            }
        } // end socialSituation

        if(isset($_POST['upload'])) {
            //$this->form_validation->set_rules('userfile', 'اختار صوره', 'required');

            //if($this->form_validation->run()) {
                $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
              
                if(isset($photo) && $photo != '' && !is_array($photo)) {
                    if($this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), array('ur_photo' => $photo), 'users_register')) {
                        $data['success'] = 'تم التعيل بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                }
            //}
        } // end upload


        if(isset($_POST['abut'])) {
            // $this->form_validation->set_rules('about_search', 'اللذين تبحث عنهم', 'min_length[15]|required');
            // $this->form_validation->set_rules('myself', 'تحدث عن نفسك', 'min_length[15]|required');
            $dataAbout = '';
            if($this->form_validation->run()) {

                if($this->input->post('myself') != $userData->uab_myself) {
                    $dataAbout['uab_myself'] = $this->input->post('myself');   
                }

                if($this->input->post('about_search') != $userData->uab_about_search) {
                    $dataAbout['uab_about_search'] = $this->input->post('about_search');
                }

                if(is_array($dataAbout) && !empty($dataAbout)) {
                     if($this->Dsw_model->edit('uab_ur_id', $this->session->userdata('userId'), $dataAbout, 'users_about')){
                        $data['success'] = 'تم التعيل بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                }
            }
        } // end abut


        // add new photo

        if(isset($_POST['addNew'])) {
            // $this->form_validation->set_rules('userfile', 'اختار صوره', 'required');
            // if($this->form_validation->run()) {
                $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
              
                if(isset($photo) && $photo != '') {
                    if($this->Dsw_model->add('users_photos', array('up_ur_id' => $this->session->userdata('userId'), 'up_photo' => $photo))) {
                        $data['success'] = 'تم الاضافة بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                }
            // }
        } // end addNew

        if(isset($_POST['deletePhoto'])) {
            foreach ($_POST as $key => $value) {
                if(is_int($key)) {
                    if($this->Dsw_model->remove('users_photos', $key, 'up_id')){
                        $data['success'] = 'تم الحذف بنجاح';
                    } else {
                        $data['error'] = 'لم يتم الحذف';
                    }
                }
            }
        } // end deletePhoto
 


    	// get user photos
        $data['title'] = 'تعديل الملف البيانات';
        $data['userPhotos'] = $this->Dsw_model->getByCond('up_ur_id', $this->session->userdata('userId'), 'users_photos');
    	$data['userData'] = $userData; 
        $data['timeLine'] = $this->Dsw_model->timeLine();
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session']  = $this->session;
        $data['uri']      = $this->uri;
        $this->load->view('site/updateInfo',$data);
    }

    public function cancel() {

        $data['title'] = 'الغاء الطلب';
        $data['timeLine'] = $this->Dsw_model->timeLine();
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session']  = $this->session;
        $data['uri']      = $this->uri;
        $this->load->view('site/cancel',$data);
    }

    private function paypal_go($price, $id){
       
        $config['business']             = 'ahmedphp15@gmail.com';
        $config['cpp_header_image']     = ''; //'Image header url [750 pixels wide by 90 pixels high]';
        $config['return']               = base_url()."dashbord/addDone/$id";
        $config['cancel_return']        = base_url()."dashbord/cancel";
        $config['notify_url']           = base_url()."dashbord/paypal"; //IPN Post
        $config['production']           = TRUE; //Its false by default and will use sandbox
        //$config["invoice"]              = random_string('numeric',8); //The invoice id
        $config["custom"]               = $this->session->userdata('userId');


        //$this->session->userdata('u_id');
        
        $this->load->library('paypal',$config);
        
        #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
                                    /// 
        $this->paypal->add('item1',$price); //First item

        $this->paypal->pay(); //Proccess the payment

        return var_dump($this->input->post());
    }


    public function addDone() {
        

        var_dump($this->input->post());

        $planId = (int) $this->uri->segment(3);
        
        if($planId != null) {
            $planData = $this->Dsw_model->getByCond('pp_id', $planId, 'paypal_plan', 'row');

            $date = date("Y-m-d");
            $date = strtotime(date("Y-m-d", strtotime($date)) . " +$planData->pp_duration month");
            $date = date("Y-m-d",$date);
            
            $dataCart['c_ur_id'] = $this->session->userdata('userId');
            $dataCart['c_pp_id'] = $planData->c_pp_id; 
            $dataCart['c_start'] = date('Y-m-d'); 
            $dataCart['c_end']   = $date; 

            if($this->Dsw_model->add('cart', $dataCart)) {
                if($this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), array('ur_acount_done' => '1'), 'users_register')){
                    $data['success'] = 'تم الاشتراك بنجاح';
                }
            } else {
                $data['error'] = 'لم يتم التسجيل بشكل صحيح . يرجى مراسلة الادارة فورا';
            }
        }
        $data['title'] = 'نجاح الاشتراك';
        $data['timeLine'] = $this->Dsw_model->timeLine();
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session']  = $this->session;
        $data['uri']      = $this->uri;
        $this->load->view('site/addDone',$data);
    }


    
    public function paypal() {
    	
        $userData = $this->Dsw_model->getByCond('ur_id', $this->session->userdata('userId'), 'users_register', 'row');        
        
        if($userData->ur_acount_done == '1') {
            $data['title'] = 'تفعيل الحساب';
            $data['planStatus'] = $this->Dsw_model->getByCond('c_ur_id', $this->session->userdata('userid'), 'cart', 'row');
            $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
            $data['session']  = $this->session;
            $data['uri']      = $this->uri;
            $this->load->view('site/paypal_data',$data);

        } else {
            

        $planId = (int) $this->uri->segment(3);
        
        if($planId != null) {
            
            $planData = $this->Dsw_model->getByCond('pp_id', $planId, 'paypal_plan', 'row');
    
            $this->paypal_go($planData->pp_price, $planId);        

        }
        
        $data['title'] = 'تفعيل الحساب';
        $data['plans']    = $this->Dsw_model->getAll('paypal_plan');
        $data['timeLine'] = $this->Dsw_model->timeLine();
        $data['siteInfo'] = $this->Dsw_model->getAll('sittings', 'row');
        $data['session']  = $this->session;
        $data['uri']      = $this->uri;
        $this->load->view('site/paypal',$data);

        }
    }



    public function logOut() {
        $this->load->model('Login_model');
        $this->Dsw_model->edit('ur_id', $this->session->userdata('userId'), array('ur_is_online' => '0'), 'users_register');
        if($this->Login_model->logout()) {
            redirect(HOST_NAME);
        }

    }

}