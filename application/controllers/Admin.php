<?php
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 11/17/2015
 * Time: 5:14 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



    public function __construct() {
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->model('Login_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
    }





    /**
     * all statistics
     */
    public function index() {



        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }


        $data['uri'] = $this->uri;

        // get users count
        $data['countUsers'] = $this->Dsw_model->countRows('users_register');
        $data['countAdminMessage'] = $this->Dsw_model->countRows('admin_message');
        $data['countUsersMessage'] = $this->Dsw_model->countRows('users_message');
        $data['countUsersFavorites'] = $this->Dsw_model->countRows('users_favorites');
        $data['countSuccessStories'] = $this->Dsw_model->countRows('success_stories');

        $data['likesMaleWomen'] = $this->Dsw_model->getCount('select uf_id from users_favorites as f left join users_register as u on f.uf_from_id = u.ur_id where u.ur_gender = "0"');
        $data['likesWomenMale'] = $this->Dsw_model->getCount('select uf_id from users_favorites as f left join users_register as u on f.uf_from_id = u.ur_id where u.ur_gender = "1"');

        $data['maleMessagesForWomen'] = $this->Dsw_model->getCount('select um_id from users_message as m left join users_register as u on m.um_from_id = u.ur_id where u.ur_gender = "0"');
        $data['womenMessagesForMale'] = $this->Dsw_model->getCount('select um_id from users_message as m left join users_register as u on m.um_from_id = u.ur_id where u.ur_gender = "1"');

        $data['countUsersMale'] = $this->Dsw_model->getCount('select ur_id from users_register where ur_gender = "0"');
        $data['countUsersWomen'] = $this->Dsw_model->getCount('select ur_id from users_register where ur_gender = "1"');
        $data['countUsersActive'] = $this->Dsw_model->getCount('select ur_id from users_register where ur_acount_done = "1"');

        $data['Admin'] = 'الرئيسة';
        $data['pageTitle'] = 'أحصائيات الموقع ';

        $this->load->view('admin/home', $data);
    } // end index


    /**
     * update main Sittings
     */

    public function mainSittings() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('mainSittings', $this->session->userdata('adminLevel'));


        $data['message'] = '';

        $tableName = 'sittings';
        $prefix = 'si_';
        $id = 'si_id';

        // update data
        if(isset($_POST['save'])) {

            $this->form_validation->set_rules('site_name', 'اسم الموقع مطلوب عربى', 'required|trim');
            $this->form_validation->set_rules('site_name_en', 'اسم الموقع مطلوب انجليزى', 'required|trim');
            $this->form_validation->set_rules('site_email', 'اميل الموقع مطلوب', 'required|trim|valid_email');
            $this->form_validation->set_rules('site_url', 'رابط الموقع مطلوب', 'required|trim');
            $this->form_validation->set_rules('site_blog_url', 'رابط المدونة مطلوب', 'required|trim');
            $this->form_validation->set_rules('facebook_url', 'رابط الفيس بوك مطلوب', 'required|trim');
            $this->form_validation->set_rules('twitter_url', 'رابط تويتر مطلوب', 'required|trim');
            $this->form_validation->set_rules('google_plus_url', 'رابط جوجل بلس مطلوب', 'required|trim');
            $this->form_validation->set_rules('rss_url', 'رابط rss مطلوب', 'required|trim');
            $this->form_validation->set_rules('inst_url', 'رابط انستجرام مطلوب', 'required|trim');
            $this->form_validation->set_rules('yot_url', 'رابط اليوتيوب مطلوب', 'required|trim');
            $this->form_validation->set_rules('welcome_messag', 'رسالة الترحيب مطلوبة عريى', 'required');
            $this->form_validation->set_rules('welcome_messag_en', 'رسالة الترحيب مطلوبة انجليزى', 'required');
            $this->form_validation->set_rules('about_the_site', 'نبذه عن الموقع مطلوبه عربى', 'required');
            $this->form_validation->set_rules('about_the_site_en', 'نبذه عن الموقع مطلوبه انجليزى', 'required');
            $this->form_validation->set_rules('terms_service', 'شروط الاستخدام مطلوبه عربى', 'required');
            $this->form_validation->set_rules('terms_service_en', 'شروط الاستخدام مطلوبه عربى', 'required');
            $this->form_validation->set_rules('tips_and_suggestions', 'نصائح واقتراحات مطلوبةعربى', 'required');
            $this->form_validation->set_rules('tips_and_suggestions_en', 'نصائح واقتراحات مطلوبة انجليزى', 'required');
            $this->form_validation->set_rules('privacy_policy', 'سياسه الخصوصية مطلوبة عربى', 'required');
            $this->form_validation->set_rules('privacy_policy_en', 'سياسه الخصوصية مطلوبةانجليزى', 'required');

            if($this->form_validation->run()){

                $keys = array_keys($_POST);

                foreach($keys as $key) {
                   $dataUp[$prefix . $key] = $_POST[$key];
                }

                // delete the input submit post name
                array_pop($dataUp);
                array_pop($dataUp);

               // print_r($dataUp);

                $dataUp['si_last_update_by'] = $this->session->userdata('adminId');
                $dataUp['si_last_update_date'] = date('Y-m-d H:m:s');

                if($this->Dsw_model->edit($id, 1, $dataUp, $tableName)){
                  $data['success'] = 'تم تعديل البيانات بنجاح';
                } else {
                    $data['error'] = 'عفوا : حدث خطأ ما , يرجى المحاوله مره اخرى';
                }

            }



        }

       // $data['test'] = $dataUp;

        $data['uri'] = $this->uri;

        // get all data
        $data['sittingsData'] = $this->Dsw_model->getAll($tableName,'first_row');

        $data['mainSittings'] = 'اعدادات الموقع';
        $data['pageTitle'] = 'اعدادات الموقع';

        $this->load->view('admin/mainSittings', $data);

    } // end mainSittings
    
    
    public function addFaqs() {
    	
    	
    	if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
    		redirect('admin/adminLogin', 'refresh');
    	}
    	
    	$this->Dsw_model->promotion('addFaqs', $this->session->userdata('adminLevel'));
    	 
    	
    	$this->form_validation->set_rules('question', 'السؤال', 'required');
    	$this->form_validation->set_rules('answer', 'الاجابة', 'required');
    	
        $this->form_validation->set_rules('question_en', 'السؤال انجليزى', 'required');
    	$this->form_validation->set_rules('answer_en', 'الاجابة انجليزى', 'required');
        
    	if($this->form_validation->run()) {
    		$dataFaq['f_ur_id']    = $this->session->userdata('adminId');
    		$dataFaq['f_question'] = $this->input->post('question');
    		$dataFaq['f_answer']   = $this->input->post('answer');
                $dataFaq['f_question_en'] = $this->input->post('question_en');
    		$dataFaq['f_answer_en']   = $this->input->post('answer_en');
    		
    		if($this->Dsw_model->add('faqs', $dataFaq)) {
    			$data['success'] = 'تم الاضافة بنجاح';
    		} else {
    			$data['error'] = 'حدث خطأ ما. حاول مره اخرى';
    		}
    	}
    	
    	$data['uri']       = $this->uri;
    	$data['addFaqs']   = ' اضف سؤال جديد';
    	$data['pageTitle'] = 'اضف سؤال جديد';
    	$this->load->view('admin/addFaqs', $data);
    	
    } // end addFaqs
    
    
    public function faqs() {
    	
    	if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
    		redirect('admin/adminLogin', 'refresh');
    	}
    	 
    	$this->Dsw_model->promotion('faqs', $this->session->userdata('adminLevel'));
    	
    	
    	// set pagination
    	$this->load->library('pagination');
    	
    	$config['base_url'] = HOST_NAME . 'Admin/faqs/';
    	$config['total_rows'] = $this->Dsw_model->countRows('faqs');
    	$config['per_page'] = 10;
    	$config["uri_segment"] = 3;
    	$start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
    	$this->pagination->initialize($config);
    	
    	// get admin messages
    	$this->db->select('*');
    	$this->db->from('faqs');
    	$this->db->join('users_register' , 'faqs.f_ur_id = users_register.ur_id', 'left');
    	$this->db->limit($config['per_page'], $start);
    	$faqsData = $this->db->get()->result_array();
    	
    	// delete by id
    	$id = (int) $this->uri->segment(3);
    	if(isset($id) && is_int($id) && isset($_GET['action']) && $_GET['action'] == 'delete') {
    		if($this->Dsw_model->remove('faqs', $id, 'f_id')) {
    			$data['success'] =  "تم الحذف بنجاح";
    		} else {
    			$data['error']   = "عفوا, لم يتم الخذف حاول مره اخرى";
    		}
    	}
    	
    	$data['faqsData']   = $faqsData;
    	$data['pagination'] = $this->pagination->create_links();
    	$data['uri']       = $this->uri;
    	$data['faqs']      = 'الاسئلة المتداولة';
    	$data['pageTitle'] = 'الاسئلة المتداولة';
    	$this->load->view('admin/faqs', $data);
    } // end faqs
    
    public function editFaqs() {
    	
    	if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
    		redirect('admin/adminLogin', 'refresh');
    	}
    	
    	$this->Dsw_model->promotion('editFaqs', $this->session->userdata('adminLevel'));
    	 
    	
    	$id = (int) $this->uri->segment(3);
    	if(!isset($id) || $id == null) {
    		$data['error'] = 'عفوأ هذه الصفحه غير متاحة';
    		$this->load->view('admin/template/404', $data);
    	}
    	
    	if(isset($_POST['editPage'])) {
    		// delete submit
    		array_pop($_POST);
    	
    		// edit data
    		if($this->Dsw_model->edit('f_id', $id, $_POST, 'faqs')){
    			$data['success'] = 'تم تعديل البيانات بنجاح';
    		} else {
    			$data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
    		}
    	}
    	
    	// get data
    	$data['faqsData'] = $this->Dsw_model->getByCond('f_id', $id, 'faqs', 'row_array');
    	
    	
    	$data['editPage'] = 'تعديل السؤال';
    	$data['pageTitle'] = 'تعديل السؤال';
    	$data['uri'] = $this->uri;
    	$this->load->view('admin/editFaqs', $data);
    }
    

    /**
     *  users message page
     */

    public function usersMessage() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('usersMessage', $this->session->userdata('adminLevel'));

        // set pagination
        $this->load->library('pagination');

        $config['base_url'] = HOST_NAME . 'Admin/usersMessage/';
        $config['total_rows'] = $this->Dsw_model->countRows('users_message');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        // get messages with users send
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->db->select('*');
        $this->db->from('users_message');
        $this->db->join('users_register', 'users_message.um_from_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $messages = $this->db->get()->result_array();

        // get user receive
        $this->db->select('ur_name');
        $this->db->from('users_register');
        $this->db->join('users_message', 'users_message.um_to_id = users_register.ur_id', 'left');
        $receiveUser = $this->db->get()->result_array();

        // get all messages of users
        $data['messagesData'] =  $messages;
        $data['receiveUser']  = $receiveUser;
        $data['pagination'] = $this->pagination->create_links();

        // page info
        $data['usersMessage'] = 'رسائل الاعضاء';
        $data['uri'] = $this->uri;
        $data['pageTitle'] = 'رسائل الاعضاء';
        $this->load->view('admin/usersMessage', $data);

    } // end usersMessage

    /**
     *  admin message page
     */

    public function adminMessage() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('adminMessage', $this->session->userdata('adminLevel'));

        // set pagination
        $this->load->library('pagination');

        $config['base_url'] = HOST_NAME . 'Admin/adminMessage/';
        $config['total_rows'] = $this->Dsw_model->countRows('admin_message');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get admin messages
        $this->db->select('*');
        $this->db->from('admin_message');
        $this->db->limit($config['per_page'], $start);

        $data['messagesData'] = $this->db->get()->result_array();
        $data['pagination'] = $this->pagination->create_links();


        $data['adminMessage'] = 'رسائل الادارة';
        $data['uri'] = $this->uri;
        $data['pageTitle'] = 'رسائل الادارة';
        $this->load->view('admin/adminMessage', $data);

    } // end adminMessage

    // count users is used
    public function countUserIsUsed($levelId) {
       return $this->Dsw_model->getByCond('ur_level_id', $levelId , 'users_register', 'num_rows');
    }


    /**
     * all users levels
     */

    public function usersLevels() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('usersLevels', $this->session->userdata('adminLevel'));

        // get all levels
        $data['allLevels'] = $this->Dsw_model->getAll('users_levels');

        // count users is used
        $data['countUsersUsed'] = $this; // assign usersLevels

        // page info
        $data['usersLevels'] = 'مستويات الاعضاء';
        $data['pageTitle'] = 'مستويات الاعضاء';
        $data['uri'] = $this->uri;
        $this->load->view('admin/usersLevels',$data);
    }

    /**
     * add users levels page
     */

    public function addUsersLevels() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addUsersLevels', $this->session->userdata('adminLevel'));

        $levelAdd = array();
        $sql = '';
        if(isset($_POST['addLevel'])) {
            $this->form_validation->set_rules('ul_name', 'اسم المستوى مطلوب', 'required|trim');
            if($this->form_validation->run()){
                foreach(array_keys($_POST) as $key) {
                        if(isset($_POST[$key])){
                            $levelAdd[$key] = 1;
                        }else {
                            $levelAdd[$key] = $_POST[$key];

                        }

                }
               // delete submit
               array_pop($levelAdd);
                $levelAdd['ul_name'] = $_POST['ul_name'];

                $sql = "INSERT INTO users_levels SET ";
                $i = count($levelAdd);
                foreach($levelAdd as $key => $val) {
                    if($i == 1) {
                        $sql .= "`$key` = '$val' ";
                    } else {
                        $sql .= "`$key` = '$val' , ";
                    }
                    $i--;
                }


                if($this->db->query($sql)) {
                    $data['success'] = 'تم اضافة المستوى بنجاح' ;
                } else {
                    $data['error'] = 'عفوأ, حدث خطا ما يرجى اعادة المحاولة';
                }


            }
        }


        $data['message'] = $sql;
        $data['addUsersLevels'] = 'اضافة مستوى';
        $data['pageTitle'] = 'مستوى جديد';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addUsersLevels', $data);
    } // end addUsersLevels

    /**
     * edit level
     */


    public function editLevel() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('editLevel', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);

        if(isset($_POST['editLevel'])) {

//            $this->form_validation->set_rules('ul_name', 'اسم المستوى مطلوب', 'required|trim');
//            if ($this->form_validation->run()) {
//
//                }

//                $data['post'] =  $_POST;

                $levelUpdate['ul_name']          = isset($_POST['ul_name'])          ? $_POST['ul_name'] : 0;
                $levelUpdate['mainSittings']     = isset($_POST['mainSittings'])     ? 1 : 0;
                $levelUpdate['usersMessage']     = isset($_POST['usersMessage'])     ? 1 : 0;
                $levelUpdate['adminMessage']     = isset($_POST['adminMessage'])     ? 1 : 0;
                $levelUpdate['usersLevels']      = isset($_POST['usersLevels'])      ? 1 : 0;
                $levelUpdate['addUsersLevels']   = isset($_POST['addUsersLevels'])   ? 1 : 0;
                $levelUpdate['usersUpdate']      = isset($_POST['usersUpdate'])      ? 1 : 0;
                $levelUpdate['allUsers']         = isset($_POST['allUsers'])         ? 1 : 0;
                $levelUpdate['addUsers']         = isset($_POST['addUsers'])         ? 1 : 0;
                $levelUpdate['allPages']         = isset($_POST['allPages'])         ? 1 : 0;
                $levelUpdate['addPage']          = isset($_POST['addPage'])          ? 1 : 0;
                $levelUpdate['editPage']         = isset($_POST['editPage'])         ? 1 : 0;
                $levelUpdate['allSections']      = isset($_POST['allSections'])      ? 1 : 0;
                $levelUpdate['addSection']       = isset($_POST['addSection'])       ? 1 : 0;
                $levelUpdate['editSection']      = isset($_POST['editSection'])      ? 1 : 0;
                $levelUpdate['allStories']       = isset($_POST['allStories'])       ? 1 : 0;
                $levelUpdate['viewStories']      = isset($_POST['viewStories'])      ? 1 : 0;
                $levelUpdate['unPublishStories'] = isset($_POST['unPublishStories']) ? 1 : 0;
                $levelUpdate['allAds']           = isset($_POST['allAds'])           ? 1 : 0;
                $levelUpdate['addAds']           = isset($_POST['addAds'])           ? 1 : 0;
                $levelUpdate['editAds']          = isset($_POST['editAds'])          ? 1 : 0;
                $levelUpdate['editLevel']        = isset($_POST['editLevel'])        ? '1' : '0';
                $levelUpdate['siteFeatures']     = isset($_POST['siteFeatures'])     ? 1 : 0;
                $levelUpdate['addSiteFeatures']  = isset($_POST['addSiteFeatures'])  ? 1 : 0;
                $levelUpdate['editSiteFeatures'] = isset($_POST['editSiteFeatures']) ? 1 : 0;
                $levelUpdate['faqs']             = isset($_POST['faqs']) ? 1 : 0;
                $levelUpdate['addFaqs']          = isset($_POST['addFaqs']) ? 1 : 0;
                $levelUpdate['editFaqs']         = isset($_POST['editFaqs']) ? 1 : 0;

                $sql = "UPDATE users_levels SET ";

                $i = count($levelUpdate);

                foreach($levelUpdate as $key => $val) {
                    if($i == 1) {
                        $sql .= "`$key` = '$val' ";
                    } else {
                        $sql .= "`$key` = '$val' , ";
                    }
                    $i--;
                }

                  $data['sql'] = $sql .= " WHERE `ul_id` = $id ";

                if ($this->db->query($sql)) {
                    $data['success'] = 'تم تعديل المستوى بنجاح';
                } else {
                    $data['error'] = 'عفوا. حدث خطأ ما يرجى المحاولة مره اخرى ';
                }

           // $data['test'] = $levelUpdate;
            }


        // get data
        $data['levelData'] = $this->Dsw_model->getByCond('ul_id', $id, 'users_levels', 'row_array');
        $data['editLevel'] = 'تعديل المستوى';
        $data['pageTitle'] = 'تعديل المستوى';

        $data['uri'] = $this->uri;
        $this->load->view('admin/editLevel', $data);

    }


    /**
     * edit users
     */

    public function usersUpdate(){

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('usersUpdate', $this->session->userdata('adminLevel'));

        // get All Users Data
        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        // get data
        $this->db->select('*');
        $this->db->from('users_register');
        $this->db->where('ur_id', $id);
        $this->db->join('users_social_position', 'users_social_position.us_ur_id = users_register.ur_id', 'left');
        $this->db->join('users_about', 'users_about.uab_ur_id = users_register.ur_id', 'left');
        $usersData = $this->db->get()->row_array();


        // update



        // if(isset($_POST['save'])) {
        //     array_pop($_POST);
        //     $sql = 'UPDATE users_register, users_social_position, users_about SET ';

        //     foreach($dataUp as $key => $value) {
        //         for($i = 0; $i <count($value); $i++) {
        //             if(isset($_POST[$value[$i]['Field']])){
        //                 if(substr($value[$i]['Field'], 0,2) == 'ur') {
        //                     $dataUpdate['users_register.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 } elseif(substr($value[$i]['Field'], 0,3) == 'usp') {
        //                     $dataUpdate['users_social_position.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 } elseif(substr($value[$i]['Field'], 0,2) == 'ua'){
        //                     $dataUpdate['users_appearance.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 } elseif(substr($value[$i]['Field'], 0,2) == 'ui'){
        //                     $dataUpdate['users_interests.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 } elseif(substr($value[$i]['Field'], 0,2) == 'ul'){
        //                     $dataUpdate['users_lifestyle.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 } elseif(substr($value[$i]['Field'], 0,2) == 'us'){
        //                     $dataUpdate['users_style.' . $value[$i]['Field']] = (is_array($_POST[$value[$i]['Field']])) ? json_encode($_POST[$value[$i]['Field']]) : $_POST[$value[$i]['Field']];
        //                 }
        //             }
        //         }
        //     }




        //     $c = count($dataUpdate);
        //     foreach($dataUpdate as $key => $value) {
        //         if($c == 1){
        //             $sql .= "$key = '$value' ";
        //         } else {
        //             $sql .= "$key = '$value', ";
        //         }
        //         $c--;
        //     }


        //     $sql .= "WHERE users_register.ur_id  = $id AND users_social_position.us_ur_id = $id AND users_appearance.ua_ur_id = $id AND users_interests.ui_ur_id = $id AND users_lifestyle.ul_ur_id = $id AND users_style.us_ur_id = $id ";

        //     if($this->db->query($sql)){
        //         $data['success'] = 'تم التعديل بنجاح';
        //     } else {
        //         $data['error'] = 'خطا لم يتم التعديل برجأ الماولة نره اخرى';
        //     }

        // }



        if(isset($_POST['editUser'])) {

            $this->form_validation->set_rules('name','الاسم','trim|required|min_length[3]');
            $this->form_validation->set_rules('gender','النوع','required');
            if($_POST['email'] != $usersData['ur_email']) {
                $this->form_validation->set_rules('email','البريد الاكترونى','trim|required|min_length[5]valid_email|is_unique[users_register.ur_email]');
            }
            if(isset($_POST['password']) && $_POST['password'] != '') {
                $this->form_validation->set_rules('password','كلمة المرور','trim|required|min_length[6]');
                $this->form_validation->set_rules('repassword','تأكيد كلمة المرور','trim|required|matches[password]');
            }

            // $this->form_validation->set_rules('age','العمر','required');
            // $this->form_validation->set_rules('target','الهدف من التسجيل','required');
            // $this->form_validation->set_rules('country','دولة الاصل','required');
            // $this->form_validation->set_rules('country_stay','دولة الاقامة','required');
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
            // $this->form_validation->set_rules('about_search', 'اللذين تبحث عنهم', 'min_length[15]|required');
            // $this->form_validation->set_rules('myself', 'تحدث عن نفسك', 'min_length[15]|required');
            $dataAbout = '';
            $dataRegister = '';
            //print_r($_POST);
            if($this->form_validation->run()) {



                if($this->input->post('name') != $usersData['ur_name']) {
                    $dataRegister['ur_name']   = $this->input->post('name');    
                }
                
                if($this->input->post('gender') != $usersData['ur_gender']) {
                    $dataRegister['ur_gender'] = $this->input->post('gender');
                }

                if($this->input->post('email') != $usersData['ur_email']) {
                    $dataRegister['ur_email'] = $this->input->post('email');
                }
                
                if(isset($_POST['password']) && $_POST['password'] != '') {
                    $dataRegister['ur_password'] = $this->Login_model->hashPassword($this->input->post('password'));
                }

                if($this->input->post('age') != $usersData['ur_age']) {
                    $dataRegister['ur_age'] = $this->input->post('age');    
                }
                
                if($this->input->post('target') != $usersData['ur_target']) {
                    $dataRegister['ur_target'] = $this->input->post('target');    
                }

                if($this->input->post('country') != $usersData['ur_country']) {
                    $dataRegister['ur_country'] = $this->input->post('country');    
                }
                
                if($this->input->post('country_stay') != $usersData['ur_country_stay']) {
                    $dataRegister['ur_country_stay'] = $this->input->post('country_stay');    
                } 
                if($this->input->post('level_id') != $usersData['ur_level_id']) {
                    $dataRegister['ur_level_id'] = $this->input->post('level_id');    
                }

                if(isset($_POST['is_active']) && $_POST['is_active'] != '') {
                    $dataRegister['ur_is_active'] = '1';    
                } else {
                    $dataRegister['ur_is_active'] = '0';
                }

                if(isset($_FILES)) {
                     $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
                    
                    if(isset($photo) && $photo != '' && !is_array($photo)) {
                        $dataRegister['ur_photo'] = $photo;
                    }
                }

                if(is_array($dataRegister) && !empty($dataRegister)) {
                    if($this->Dsw_model->edit('ur_id', $id, $dataRegister, 'users_register')){
                        $data['success'] = 'تم التعيل بنجاح';
                    } else {
                        $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                    }
                } 


               if($this->input->post('learn') != $usersData['usp_learn']) {
                    $ataSituation['usp_learn'] = $this->input->post('learn');
               }

               if($this->input->post('work') != $usersData['usp_work']){
                    $ataSituation['usp_work'] = $this->input->post('work');
               }

               if($this->input->post('work_field') != $usersData['usp_work_field']) {
                    $ataSituation['usp_work_field'] = $this->input->post('work_field');
               }

               if($this->input->post('family_status') != $usersData['usp_family_status']) {
                    $ataSituation['usp_family_status'] = $this->input->post('family_status');
               }

               if($this->input->post('want_children') != $usersData['usp_want_children']) {
                $ataSituation['usp_want_children'] = $this->input->post('want_children');
               }

               if($this->input->post('housing_case') != $usersData['usp_housing_case']) {
                $ataSituation['usp_housing_case'] = $this->input->post('housing_case');
               }

               if($this->input->post('ready_move') != $usersData['usp_ready_move']) {
                    $ataSituation['usp_ready_move'] = $this->input->post('ready_move');
               }

               if($this->input->post('weight') != $usersData['usp_weight']) {
                    $ataSituation['usp_weight'] = $this->input->post('weight');
               }

               if($this->input->post('height') != $usersData['usp_height']) {
                    $ataSituation['usp_height'] = $this->input->post('height');
               }

               if($this->input->post('skin_color') != $usersData['usp_skin_color']) {
                $ataSituation['usp_skin_color'] = $this->input->post('skin_color');
               }

               if($this->input->post('physique') != $usersData['usp_physique']) {
                    $ataSituation['usp_physique'] = $this->input->post('physique');
               }

               if($this->input->post('physical_condition') != $usersData['usp_physical_condition']) {
                    $ataSituation['usp_physical_condition'] = $this->input->post('physical_condition');
               }
            
                if($this->input->post('monthly_income') != $usersData['usp_monthly_income']) {
                    $ataSituation['usp_monthly_income'] = $this->input->post('monthly_income');    
                }     

                if($this->input->post('health_status') != $usersData['usp_health_status']) {
                    $ataSituation['usp_health_status'] = $this->input->post('health_status');
                }

                if($this->input->post('religious_commitmen') != $usersData['usp_religious_commitment']) {
                    $ataSituation['usp_religious_commitment'] = $this->input->post('religious_commitmen');    
                }
                
                if(is_array($ataSituation) && !empty($ataSituation)) {
                     if($this->Dsw_model->getByCond('us_ur_id', $id, 'users_social_position', 'num_rows') != false) {
                         if($this->Dsw_model->edit('us_ur_id', $id, $ataSituation, 'users_social_position')){
                            $data['success'] = 'تم التعيل بنجاح';
                        } else {
                            $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                        }
                    } else {

                        $ataSituation['us_ur_id'] = $id;

                        if($this->Dsw_model->add('users_social_position', $ataSituation)){
                            $data['success'] = 'تم التعيل بنجاح';
                        } else {
                            $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                        }
                    }    
                }

                if($this->input->post('myself') != $usersData['uab_myself']) {
                    $dataAbout['uab_myself'] = $this->input->post('myself');   
                }

                if($this->input->post('about_search') != $usersData['uab_about_search']) {
                    $dataAbout['uab_about_search'] = $this->input->post('about_search');
                }

                if(is_array($dataAbout) && !empty($dataAbout)) {
                     
                     if($this->Dsw_model->getByCond('uab_ur_id', $id, 'users_about', 'num_rows') !=  false) {
                        if($this->Dsw_model->edit('uab_ur_id', $id, $dataAbout, 'users_about')){
                            $data['success'] = 'تم التعيل بنجاح';
                        } else {
                            $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                        }
                     } else {
                        $dataAbout['uab_ur_id'] = $id;
                        if($this->Dsw_model->add('users_about', $dataAbout)){
                            $data['success'] = 'تم التعيل بنجاح';
                        } else {
                            $data['error'] = 'حدث خطأ ما يرجى اعاده المحاولة';
                        }
                     }
                }
            }
        }


         if(isset($_POST['deletePhotos'])) {
            foreach ($_POST as $key => $value) {
                if(is_int($key)) {
                    if($this->Dsw_model->remove('users_photos', $key, 'up_id')){
                        $data['success'] = 'تم الحذف بنجاح';
                    } else {
                        $data['error'] = 'لم يتم الحذف';
                    }
                }
            }
          }






                // get users photos
        $data['userPhtos'] = $this->Dsw_model->getByCond('up_ur_id', $id, 'users_photos');
        $data['usersLevel'] = $this->Dsw_model->getAll('users_levels');
        $data['usersData'] = $usersData;
        $data['usersUpdate'] = 'تعديل المستخدم';
        $data['pageTitle'] = 'تعديدل المستخدم';
        $data['uri'] = $this->uri;
        $this->load->view('admin/usersUpdate', $data);
    }



    /**
     * get all users
     */

    public function allUsers() {


        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('allUsers', $this->session->userdata('adminLevel'));

        // delete user by id
        $id = (int) $this->uri->segment(3);
        if(isset($id) && is_int($id) && isset($_GET['action']) && $_GET['action'] == 'delete') {
            if($this->Dsw_model->remove('users_register', $id, 'ur_id')) {
                $data['success'] =  "تم الحذف بنجاح";
            } else {
                $data['error']   = "عفوا, لم يتم الخذف حاول مره اخرى";
            }
        }


        $this->load->library('pagination');

        $config['base_url'] = HOST_NAME . 'Admin/allUsers/';
        $config['total_rows'] = $this->Dsw_model->countRows('users_register');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        // get messages with users send
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->db->select('*');
        $this->db->from('users_register');
        $this->db->limit($config['per_page'], $start);
        $users = $this->db->get()->result_array();
        $data['usersData'] = $users;
        $data['pagination'] = $this->pagination->create_links();

        $data['allUsers'] = 'كافة الاعضاء';
        $data['pageTitle'] = 'الاعضاء';
        $data['uri'] = $this->uri;
        $this->load->view('admin/allUsers', $data);
    }

    /**
     * add users
     */

    public function addUsers() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addUsers', $this->session->userdata('adminLevel'));

        if(isset($_POST['addUser'])) {

            $this->form_validation->set_rules('ur_name', 'الاسم', 'required');
            $this->form_validation->set_rules('ur_gender', 'النوع ', 'required');
            $this->form_validation->set_rules('ur_email','البريد الاكترونى','trim|required|min_length[5]valid_email|is_unique[users_register.ur_email]');
            $this->form_validation->set_rules('ur_password', 'كلمة المرور', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('ur_age', 'العمر', 'required');
            $this->form_validation->set_rules('ur_target', 'العف', 'required');
            $this->form_validation->set_rules('ur_country', 'دولة الاصل', 'required');
            $this->form_validation->set_rules('ur_country_stay', 'ولة الاقامة', 'required');
            $this->form_validation->set_rules('ur_level_id', 'مستوى العضوية', 'required');
            
            if($this->form_validation->run()) {
                $addUserData['ur_name']         = $this->input->post('ur_name');
                $addUserData['ur_gender']       = $this->input->post('ur_gender');
                $addUserData['ur_email']        = $this->input->post('ur_email');
                $addUserData['ur_password']     = $this->Login_model->hashPassword($this->input->post('ur_password'));
                $addUserData['ur_age']          = $this->input->post('ur_age');
                $addUserData['ur_target']       = $this->input->post('ur_target');
                $addUserData['ur_country']      = $this->input->post('ur_country');
                $addUserData['ur_country_stay'] = $this->input->post('ur_country_stay');
                $addUserData['ur_is_active']    = $this->input->post('ur_is_active') ? $this->input->post('ur_is_active') : '0';
                
                if($this->Dsw_model->add('users_register', $addUserData)) {
                    $data['success'] = 'تم اضافة المستخدم بنجاح';
                } else {
                    $data['error'] = 'عفوا . حدث خطا ما يرجى اعادة المحاولة مره اخرى';
                }    
            }

            
        }

        $data['usersLevel'] = $this->Dsw_model->getAll('users_levels');
        $data['addUsers'] = 'اضافة عضو';
        $data['pageTitle'] = 'عضو جديد';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addUsers', $data);

    }


    /**
     * all pages
     */

    public function allPages() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('allPages', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/allPages/';
        $config['total_rows'] = $this->Dsw_model->countRows('pages');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->join('users_register' , 'pages.p_created_by = users_register.ur_id', 'left');
        $this->db->join('sections' , 'sections.se_id = pages.p_section_id', ' left');
        $this->db->limit($config['per_page'], $start);
        $pageData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('pages', $id, 'p_id')) {
                $data['success'] = 'تم حذف الصفحة بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['pageData'] = $pageData;
        $data['pagination'] = $this->pagination->create_links();

        $data['allPages'] = 'كافة الصفحات';
        $data['pageTitle'] = 'الصفحات';
        $data['uri'] = $this->uri;
        $this->load->view('admin/allPages', $data);
    }
    


    public function addPage() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addPage', $this->session->userdata('adminLevel'));

        if(isset($_POST['addPage'])) {

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);

            $this->form_validation->set_rules('p_name', 'اسم الصفه مطلوب عريى', 'required|trim|xss_clean');
            $this->form_validation->set_rules('p_title', 'عنوان الصفه مطلوب عريى', 'required|trim|xss_clean');
            $this->form_validation->set_rules('p_content', 'محتوى الصفة مطلوب عريى', 'required');
            
            $this->form_validation->set_rules('p_name_en', 'اسم الصفه مطلوب انجليزى', 'required|trim|xss_clean');
            $this->form_validation->set_rules('p_title_en', 'عنوان الصفه مطلوب انجليزى', 'required|trim|xss_clean');
            $this->form_validation->set_rules('p_content_en', 'محتوى الصفة مطلوب انجليزى', 'required');
            
            $this->form_validation->set_rules('p_section_id', 'القسم مطلوب', 'required');

            $dataAdd['p_name']       =  $this->input->post('p_name');
            $dataAdd['p_title']      =  $this->input->post('p_title');
            $dataAdd['p_content']    = $this->input->post('p_content');
            
            $dataAdd['p_name_en']       =  $this->input->post('p_name_en');
            $dataAdd['p_title_en']      =  $this->input->post('p_title_en');
            $dataAdd['p_content_en']    = $this->input->post('p_content_en');
            $dataAdd['p_photo']      = '';
            $dataAdd['p_section_id'] = $this->input->post('p_section_id');
            $dataAdd['p_created_by'] = $this->session->userdata('adminId');;

            if($this->Dsw_model->add('pages', $dataAdd)) {
                $data['success'] = 'تم اضافة الصفحة بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الاضافة حاول مرة اخرى ';
            }

        }
        
        $data['sections'] = $this->Dsw_model->getAll('sections');
        $data['addPage'] = 'اضافة صفحه جديدة';
        $data['pageTitle'] = 'صفحة جديدة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addPage', $data);
    }


    public function editPage() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('editPage', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        if(isset($_POST['editPage'])) {
            // delete submit
            array_pop($_POST);

                //$photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
              // upload done
//            if(!is_array($photo)) {
//                  $_POST['p_photo'] = $photo;
//              }

            // edit data
            if($this->Dsw_model->edit('p_id', $id, $_POST, 'pages')){
                $data['success'] = 'تم تعديل البيانات بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
            }
        }

        // get data
        $data['pageData'] = $this->Dsw_model->getByCond('p_id', $id, 'pages', 'row_array');

        //get sections
        $data['sections'] = $this->Dsw_model->getAll('sections');

        $data['editPage'] = 'تعديل الصفخة';
        $data['pageTitle'] = 'تعديل الصفحة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/editPage', $data);

    }

    public function allSections() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('allSections', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/allSections/';
        $config['total_rows'] = $this->Dsw_model->countRows('sections');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('sections');
        $this->db->join('users_register' , 'sections.se_created_by = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $sectionData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('sections', $id, 'se_id')) {
                $data['success'] = 'تم حذف القسم  بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['pagination'] = $this->pagination->create_links();
        $data['sectionsData'] = $sectionData;

        $data['allSections'] = 'كافة الاقسام';
        $data['pageTitle'] = 'الاقسام';
        $data['uri'] = $this->uri;
        $this->load->view('admin/allSections', $data);
    }

    public function addSection() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addSection', $this->session->userdata('adminLevel'));

        if(isset($_POST['addSection'])) {

            $this->form_validation->set_rules('se_name', 'اسم  القسم مطلوب', 'required|trim');
            $this->form_validation->set_rules('se_description', 'وصف القسم مطلوب', 'required|trim');

           if($this->form_validation->run()){
               $dataAdd['se_name']        =  $this->input->post('se_name');
               $dataAdd['se_description'] =  $this->input->post('se_description');

               $dataAdd['se_created_by']  = $this->session->userdata('adminId');

               if($this->Dsw_model->add('sections', $dataAdd)) {
                   $data['success'] = 'تم اضافة القسم بنجاح';
               } else {
                   $data['error'] = 'خطا. لم يتم الاضافة حاول مرة اخرى ';
               }
           }

        }

        $data['addSection'] = 'اضافة قسم جديد';
        $data['pageTitle'] = 'قسم جديد';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addSection', $data);
    }


    public function editSection() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('editSection', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        if(isset($_POST['editSection'])) {
            // delete submit
            array_pop($_POST);

            // edit data
            if($this->Dsw_model->edit('se_id', $id, $_POST, 'sections')){
                $data['success'] = 'تم تعديل البيانات بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
            }
        }

        // get data
        $data['sectionData'] = $this->Dsw_model->getByCond('se_id', $id, 'sections', 'row_array');
        $data['editSection'] = 'تعديل القسم';
        $data['pageTitle'] = 'تعديل القسم';
        $data['uri'] = $this->uri;
        $this->load->view('admin/editSection', $data);
    }


    public function allStories() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('allStories', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/allStories/';
        $config['total_rows'] = $this->Dsw_model->countRows('success_stories');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '1');
        $this->db->join('users_register' , 'success_stories.ss_ur_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $storiesData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('success_stories', $id, 'ss_id')) {
                $data['success'] = 'تم حذف القسم  بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['storiesData'] = $storiesData;
        $data['pagination'] = $this->pagination->create_links();

        $data['allStories'] = 'كافة القصص';
        $data['pageTitle'] = 'قصص الاعضاء';
        $data['uri'] = $this->uri;
        $this->load->view('admin/allStories', $data);
    }

    public function viewStories() {

        $id = (int) $this->uri->segment(3);

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('viewStories', $this->session->userdata('adminLevel'));

        if(isset($_POST['active'])) {

            $dataUP1['ss_publish'] = isset($_POST['ss_publish']) ? '1' : '0' ;

            if($this->Dsw_model->edit('ss_id', $id, $dataUP1, 'success_stories')){
               $data['success'] = 'تم التعديل بنجاح';
            } else {
                $data['error'] = 'حدث خطأ ما اعد المحاوله مره اخرى';
            }
        }

        if(isset($_POST['delete'])){
            if($this->Dsw_model->remove('success_stories', $id, 'ss_id')) {
                $data['success'] = '<script> alert("تم الحذف بنجاح"); window.location = "Admin/unPublishStories/"; </script>';
            } else {
                $data['error'] = 'حدث خطأ ما يرجى اعادة المحاولة مره اخرى';
            }
        }

        // get data
        $this->db->select('*');
        $this->db->from('success_stories');
        $this->db->where('ss_id', $id);
        $this->db->join('users_register' , 'success_stories.ss_ur_id = users_register.ur_id', 'left');
        $storiesData = $this->db->get()->row_array();


        $data['viewStory'] = $storiesData;

        $data['viewStories'] = 'عرض القصة';
        $data['pageTitle'] = 'تفاصيل القصة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/viewStories', $data);

    }


    public function unPublishStories() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('unPublishStories', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/allStories/';
        $config['total_rows'] = $this->Dsw_model->countRows('success_stories');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('success_stories');
        $this->db->where('ss_publish', '0');
        $this->db->join('users_register' , 'success_stories.ss_ur_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $storiesData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('success_stories', $id, 'ss_id')) {
                $data['success'] = 'تم حذف القصة  بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['storiesData'] = $storiesData;
        $data['pagination'] = $this->pagination->create_links();
        $data['unPublishStories'] = 'قصص فى انطظار الموافقة';
        $data['pageTitle'] = 'القصص غير مفعلة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/unPublishStories', $data);
    }


    public function allAds() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('allAds', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/allAds/';
        $config['total_rows'] = $this->Dsw_model->countRows('ads');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('ads');
        $this->db->join('users_register' , 'ads.ads_ceated_by = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $adsData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('ads', $id, 'ads_id')) {
                $data['success'] = 'تم حذف الاعلان  بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['adsData'] = $adsData;
        $data['pagination'] = $this->pagination->create_links();

        $data['allAds'] = 'كافة الاعلانات';
        $data['pageTitle'] = 'الاعلانات';
        $data['uri'] = $this->uri;
        $this->load->view('admin/allAds', $data);
    }


    public function addAds() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addAds', $this->session->userdata('adminLevel'));

        if(isset($_POST['addAds'])) {

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);

            $this->form_validation->set_rules('ads_url', 'رابط الاعلان مطلوب', 'required|trim|xss_clean');

           // if($this->form_validation->run()){

                $dataAdd['ads_url']        = $this->input->post('ads_url');
                $dataAdd['ads_size']       = $this->input->post('ads_size');
                $dataAdd['ads_photo']      = $photo;
                $dataAdd['ads_ceated_by']  = $this->session->userdata('adminId');;

                if($this->Dsw_model->add('ads', $dataAdd)) {
                    $data['success'] = 'تم اضافة الاعلان  بنجاح';
                } else {
                    $data['error'] = 'خطا. لم يتم الاضافة حاول مرة اخرى ';
                }
  //          }


        }

        $data['addAds'] = 'اضافة اعلان';
        $data['pageTitle'] = 'اضافة اعلان';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addAds', $data);
    }


    public function editAds() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('editAds', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        if(isset($_POST['editAds'])) {
            // delete submit
            array_pop($_POST);

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
            // upload done
            if(!is_array($photo)) {
                $_POST['ads_photo'] = $photo;
            }

            // edit data
            if($this->Dsw_model->edit('ads_id', $id, $_POST, 'ads')){
                $data['success'] = 'تم تعديل البيانات بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
            }
        }

        // get data
        $data['adsData'] = $this->Dsw_model->getByCond('ads_id', $id, 'ads', 'row_array');

        $data['editAds'] = 'تعديل الاعلان';
        $data['pageTitle'] = 'تعديدل الاعلان';
        $data['uri'] = $this->uri;
        $this->load->view('admin/editAds', $data);

    }


    public function siteFeatures() {

        //site_features



        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('siteFeatures', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/siteFeatures/';
        $config['total_rows'] = $this->Dsw_model->countRows('site_features');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('site_features');
        $this->db->join('users_register' , 'site_features.sf_ceated_by = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $siteFeatures = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('site_features', $id, 'sf_id')) {
                $data['success'] = 'تم حذف الخدمة بنجاح';
            } else {
                $data['error']   = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }


        $data['siteFeatures'] = $siteFeatures;
        $data['pagination'] = $this->pagination->create_links();
        $data['editSiteFeatures'] = 'خدمات ومميزات الموقع';
        $data['pageTitle'] = 'خدمات ومميزات الموقع';
        $data['uri'] = $this->uri;
        $this->load->view('admin/siteFeatures', $data);
    }


    public function addSiteFeatures() {
        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('addSiteFeatures', $this->session->userdata('adminLevel'));

        if(isset($_POST['addSiteFeatures'])) {

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);

            $this->form_validation->set_rules('sf_title', 'رابط الاعلان مطلوب', 'required|trim|xss_clean');

            // if($this->form_validation->run()){

            $dataAdd['sf_title']        = $this->input->post('sf_title');
            $dataAdd['sf_text']        = $this->input->post('sf_text');
            $dataAdd['sf_title_en']        = $this->input->post('sf_title_en');
            $dataAdd['sf_text_en']        = $this->input->post('sf_text_en');
            $dataAdd['sf_photo']      = $photo;
            $dataAdd['sf_ceated_by']   = $this->session->userdata('adminId');;

            if($this->Dsw_model->add('site_features', $dataAdd)) {
                $data['success'] = 'تم اضافةالخدمة   بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الاضافة حاول مرة اخرى ';
            }
            //          }


        }

        $data['addSiteFeatures'] = 'اضافة خدمة';
        $data['pageTitle'] = 'اضافة خدمةجديدة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addSiteFeatures', $data);
    }

    public function editSiteFeatures() {

        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        $this->Dsw_model->promotion('editSiteFeatures', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        if(isset($_POST['editSiteFeatures'])) {
            // delete submit
            array_pop($_POST);

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
            // upload done
            if(!is_array($photo)) {
                $_POST['sf_photo'] = $photo;
            }

            // edit data
            if($this->Dsw_model->edit('sf_id', $id, $_POST, 'site_features')){
                $data['success'] = 'تم تعديل البيانات بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
            }
        }

        // get data
        $data['adsData'] = $this->Dsw_model->getByCond('sf_id', $id, 'site_features', 'row_array');

        $data['editAds'] = 'تعديل الاعلان';
        $data['pageTitle'] = 'تعديدل الاعلان';
        $data['uri'] = $this->uri;
        $this->load->view('admin/editSiteFeatures', $data);
    }


    public function paypalPlan() {


        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        // $this->Dsw_model->promotion('paypalPlan', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        // set pagination
        $this->load->library('pagination');
        $config['base_url'] = HOST_NAME . 'Admin/paypalPlan/';
        $config['total_rows'] = $this->Dsw_model->countRows('paypal_plan');
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;
        $this->pagination->initialize($config);

        // get data
        $this->db->select('*');
        $this->db->from('paypal_plan');
        $this->db->join('users_register' , 'paypal_plan.pp_ur_id = users_register.ur_id', 'left');
        $this->db->limit($config['per_page'], $start);
        $planData = $this->db->get()->result_array();

        // delete
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('paypal_plan', $id, 'pp_id')) {
                $data['success'] = 'تم حذف بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $data['planData']   = $planData;
        $data['pagination'] = $this->pagination->create_links();
        $data['paypalPlan'] = 'كافة الخطط';
        $data['pageTitle']  = 'كافة الخطط';
        $data['uri'] = $this->uri;
        $this->load->view('admin/paypalPlan', $data);        
    }


    public function addPaypalPlan() {

        
        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

       // $this->Dsw_model->promotion('addPaypalPlan', $this->session->userdata('adminLevel'));

        if(isset($_POST['addPaypalPlan'])) {

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);

            $this->form_validation->set_rules('name', 'اسم الخطة عربى', 'required|trim');
            $this->form_validation->set_rules('name_en', 'اسم الخطة انجليزى', 'required|trim');
            $this->form_validation->set_rules('duration', 'زمن الخطة', 'required');
            $this->form_validation->set_rules('price', 'سعر الخطة', 'required|trim');

            if($this->form_validation->run()){

                $dataAdd['pp_ur_id']     = $this->session->userdata('adminId');;
                $dataAdd['pp_name']      = $this->input->post('name');
                $dataAdd['pp_name_en']   = $this->input->post('name_en');
                $dataAdd['pp_duration']  = $this->input->post('duration');
                $dataAdd['pp_price']     = $this->input->post('price');
                
                if(!is_array($photo)) {
                    $dataAdd['pp_photo'] = $photo;    
                }

                if($this->Dsw_model->add('paypal_plan', $dataAdd)) {
                    $data['success'] = 'تم اضافة الخطة  بنجاح';
                } else {
                    $data['error'] = 'خطا. لم يتم الاضافة حاول مرة اخرى ';
                }
            }

        }
        
        $data['addPaypalPlan'] = 'اضافة خطة  جديدة';
        $data['pageTitle'] = 'اضافة خطة جديدة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/addPaypalPlan', $data);        
    }


    public function editPaypalPlan() {

        
        if($this->session->userdata('isAdminLogin') != 1 && $this->session->userdata('adminId') == null) {
            redirect('admin/adminLogin', 'refresh');
        }

        //$this->Dsw_model->promotion('editAds', $this->session->userdata('adminLevel'));

        $id = (int) $this->uri->segment(3);
        if(!isset($id) || $id == null) {
            $data['error'] = 'عفوأ هذه الصفحه غير متاحة';
            $this->load->view('admin/template/404', $data);
        }

        if(isset($_POST['editPaypalPlan'])) {
            // delete submit
            array_pop($_POST);

            $photo = $this->Dsw_model->uploadFile(UPLOAD_FILE, 'png|jpg|gif|jpeg', 1024*10);
            // upload done
            if(!is_array($photo)) {
                $_POST['pp_photo'] = $photo;
            }

            // edit data
            if($this->Dsw_model->edit('pp_id', $id, $_POST, 'paypal_plan')){
                $data['success'] = 'تم تعديل الخطة بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم التعديل حاول مرة اخرى';
            }
        }

        // get data
        $data['planData'] = $this->Dsw_model->getByCond('pp_id', $id, 'paypal_plan', 'row');
        $data['editPaypalPlan'] = 'تعديل الخطة';
        $data['pageTitle'] = 'تعديل الخطة';
        $data['uri'] = $this->uri;
        $this->load->view('admin/editPaypalPlan', $data);        
    }


    public function adminLogin(){

        //$this->load->helper('cookie');
        
    	

        if($this->session->userdata('isAdminLogin') == 1 && $this->session->userdata('adminId') != null) {
          redirect('Admin');
        }

        if(isset($_POST['loginAdmin'])) {

            $this->form_validation->set_rules('username', 'البريد الالكترونى مطلوب', 'required|min_length[8]|max_length[150]|trim|valid_email');
            $this->form_validation->set_rules('password', 'كلمة المرور مطلوبة', 'required|trim');
           // $this->form_validation->set_rules('remember', 'عفوا هذه العملية غير متوفرة  :P :P', 'xss_clean');
            
            //if($this->form_validation->run()) {
	            $loginData['ur_email']    = $this->input->post('username');
	            $loginData['ur_password'] = $this->input->post('password');

	            if (isset($_POST['remember'])) {
	                $loginData['remember'] = $this->input->post('remember');
	            }

	            if($this->Login_model->loginAdmin($loginData)){
	            	redirect(HOST_NAME . 'Admin/', 'refresh');
	            } else {
	            	$data['error'] = 'خطأ فى البريد الالكترونى او كلمة المرور';
	            }
           // }

        }

        $data['uri'] = $this->uri;

        $this->load->view('admin/adminLogin', $data);

    }


    public function usersIsAcountDone() {
        $id = (int) $this->uri->segment(3);
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($id)) {
            if($this->Dsw_model->remove('cart', $id, 'c_id')) {
                $data['success'] = 'تم حذف بنجاح';
            } else {
                $data['error'] = 'خطا. لم يتم الحذف يرجى المحاوله مره اخرى';
            }
        }

        $this->db->select('*');
        $this->db->from('cart');
        $this->db->join('users_register', 'users_register.ur_id = cart.c_ur_id', 'left');
        $this->db->join('paypal_plan', 'paypal_plan.pp_ur_id = users_register.ur_id', 'left');
        $data['paypalData']     = $this->db->get()->result_array();
        $data['editPaypalPlan'] = 'احصائيات الدفع';
        $data['pageTitle'] = 'احصائيات الدفع';
        $data['uri'] = $this->uri;
        $this->load->view('admin/usersIsAcountDone', $data);
    }

    public function logout(){
        
        $this->Login_model->logout() ;


            redirect('admin/adminLogin','refresh');
        //}

    }



}