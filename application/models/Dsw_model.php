<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 7/18/2015
 * Time: 3:09 PM
 */

class Dsw_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('form');
        // $this->load->library('form_validation');
        $this->load->library('session');
//        $this->load->libraby('url');

    }


    // start CRUD
    public function add($tableName, $data = array()) {

        $result = $this->db->insert($tableName, $data);


        return $result ? true : false;
    }

    public  function remove($tableName, $val, $where = 'id') {
        $this->db->where($where, $val);
        return $this->db->delete($tableName) ? true : false;
    }

    public function countRows($tableName) {
        $query = $this->db->query('SELECT * FROM ' . $tableName);
        return $query->num_rows();

    }

    public function getCount($sql) {
        $query = $this->db->query($sql);
            return $query->num_rows();
    }

    public function getAll($tableName, $mode = 'result_array') {
        $result = $this->db->get($tableName);

            return (count($result->result()) > 0) ? $result->$mode() : false;

    }

    public function getByCond($idCol, $idVal, $tableName, $mode = 'result_array') {
        $this->db->where($idCol, $idVal);
        $result = $this->db->get($tableName);
        return (count($result->result()) > 0) ? $result->$mode() : false;
    }

    public function edit($idCol, $idVal, $data = array(), $tableName) {
        $this->db->where($idCol, $idVal);
        return $this->db->update($tableName, $data)     ? true : false;
    }


    public function getByLimit($tableName, $start = 0, $end) {
        $query = $this-> db-> get($tableName, $start, $end);
        return $query->result_array();
    }
    public function getByConLimit($tableName, $colId, $colVal, $end) {
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->where($colId, $colVal);
        $this->db->limit(0, $end);
        return $this->db->get()->row_array();

    }

    public function getLastInsertId($table, $id) {
        $this->db->select_max($id);
        $Q = $this->db->get($table);
        $row = $Q->row_array();
        return $row[$id];
    }

    public function getColmun($col, $table, $fetch = 'row') {
    	
    	$this->db->select($col);
    	$this->db->from($table);
    	return $this->db->get()->$fetch();
    	
    }


    // public function getFooterLinks() {
    //     $this->db->select('*');
    //     $this->db->from('pages');
    //     $this->db->limit(0, $end);
        
    //     return $this->db->get()->row_array();
    // }

    // end CRUD



   public function setPagination() {
       //
   }


        public function uploadFile($path,$types, $maxSize) {
        $this->load->helper(array('form', 'url'));
        $config['upload_path']          = $path;
        $config['allowed_types']        = $types;
        $config['max_size']             = $maxSize;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            return $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            return  $data['upload_data']['file_name'];

        }
    }

    // users promotion
    public function promotion($sectionName, $id) {

        $accessPromotion = $this->getByCond('ul_id',$id, 'users_levels', 'row');

        if($accessPromotion->$sectionName == 0) {
            $data['uri'] = $this->uri;
            $data['pageTitle'] = 'ليس لديك صلاحية';
            $this->load->view('admin/noAccess',$data);
        }
    }


    public function sendMail($from, $Name, $to, $subject, $message ) {

        $this->load->library('email');

        $this->email->from($from, $Name);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send() ? true : false;
    }



    // time line status acount

    public function timeLine () {

        $userRegister = $this->Dsw_model->getByCond('ur_id', $this->session->userdata('userId'), 'users_register');
        $registerNum = array();
        foreach($userRegister[0] as $key => $value) {
            if($value == null) {
                $registerNum[$key] = $key;
            }
        }

        $userAbout = $this->Dsw_model->getByCond('uab_ur_id', $this->session->userdata('userId'), 'users_about', 'num_rows');
        $userSocialPosition = $this->Dsw_model->getByCond('us_ur_id', $this->session->userdata('userId'), 'users_social_position', 'num_rows');
        $userPhoto = $this->Dsw_model->getByCond('up_ur_id', $this->session->userdata('userId'), 'users_photos', 'num_rows');
       
        $active = 10;
        if($userRegister[0]['ur_is_active'] == '0' || $userRegister[0]['ur_is_active'] == '') {
            $active = 0;
        }
        
        $acountDone = 20;
        if($userRegister[0]['ur_acount_done'] == '0' || $userRegister[0]['ur_acount_done'] == '') {
            $acountDone = 0;
        }

        $photo = 10;
        if($userRegister[0]['ur_photo'] == '') {
            $photo = 0;
        }

        $about = 20;
        if($userAbout === false) {
            $about = 0;
        }

        $SocialPosition = 20;
        if($userSocialPosition === false) {
            $SocialPosition = 0;
        }

        $alomPhotos = 20;
        if($userPhoto === false) {
            $alomPhotos = 0;
        }

        return $active + $acountDone + $photo + $about + $SocialPosition + $alomPhotos;
    } 


    public function isOnline() {
        
    }




}
