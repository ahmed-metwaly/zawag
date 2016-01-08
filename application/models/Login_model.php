<?php
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 11/28/2015
 * Time: 10:54 AM
 */


class Login_model extends Dsw_model {

    private $tableName = 'users_register';

    public function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('cookie');
    }

    public function hashPassword($password) {
        $salt = md5(sha1(crc32($password. '+_)gNn87wd')));
        return md5(hash('SHA256', $salt . $password, true));
    }



    public function sessionExist($session){
        return $this->session->userdata($session);
    }

    public function createSession($data = array()) {
        return $this->session->set_userdata($data);
    }

    public function resetPassword($email) {

    }

    public function loginAdmin($loginData) {
        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('ur_email', $loginData['ur_email']);
        $this->db->where('ur_password', $this->hashPassword($loginData['ur_password']));
        $this->db->where('ur_level_id !=', '1');
        $query  = $this->db->get();
        $result = $query->row();

       
	

        if($query->num_rows() == 1) {
             $sessionData = array(
                'adminId'       => $result->ur_id,
                'adminName'     => $result->ur_name,
                'adminEmail'    => $result->ur_email,
                'adminPhoto'    => $result->ur_photo,
                'adminGender'   => $result->ur_gender,
                'adminLevel'    => $result->ur_level_id,
                'adminActive'   => $result->ur_is_active,
                'adminPassword' => $this->hashPassword($loginData['ur_password']),
                'isAdminLogin'  => 1
            );

//            if(isset($loginData['remember'])) {
 //               $this->rememberMe($sessionData);
//            }
             $this->createSession($sessionData);



            return true;

        } else {
            return false;   
        }



    }


    public function loginUser($loginData = array()) {

        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('ur_email', $loginData['ur_email']);
        $this->db->where('ur_password', $this->hashPassword($loginData['ur_password']));
        $query  = $this->db->get();
        $result = $query->row();



        if($query->num_rows() == 1) {
            $sessionData = array(
                'userId'     => $result->ur_id,
                'userName'   => $result->ur_name,
                'userGender' => $result->ur_gender,
                'userEmail'  => $result->ur_email,
                'userIsL0gin' => 1,
                'userOnline'  => date('Y-m-d H:m:s')
            );

            $this->createSession($sessionData);

             $this->db->where('ur_id', $result->ur_id);
             $this->db->update($this->tableName, array('ur_is_online' => '1', 'ur_last_login'=> date('Y-m-d H:m:s')));


            return true;
        } else {
            return false;
        }



    }


    public function rememberMe($rememberMeData) {
        $this->input->cookie('venue_details', TRUE);
        return $this->input->set_cookie($rememberMeData);
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->userdata = array();

        return TRUE;
    }



}