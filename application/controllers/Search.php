<?php
/**
 * Created by PhpStorm.
 * User: masterDev
 * Date: 12/10/2015
 * Time: 11:04 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dsw_model');
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library("pagination");
    }



    private function pagination() {

    }

    public function index() {

        if($this->session->userdata('userIsL0gin') != 1) {
            redirect('/register/');
        }


        $this->load->library('pagination');
        $config['base_url']   = HOST_NAME . 'Search/index/';

        $config['per_page']   = 15;
        $config["uri_segment"]= 3;


        $start = ($this->uri->segment(3) == null) ? 0 : $this->uri->segment(3) ;




        $this->db->select('*');
        $this->db->from('users_register');

        if(isset($_POST['is_online']) && $_POST['is_online'] != '') {
            $this->db->join('users_online', 'users_online.uo_ur_id = users_register.ur_id AND users_online.uo_online_date > users_online.uo_leave_date');
        }

        if(isset($_POST['photo']) && $_POST['photo'] != '') {
            $this->db->where('ur_photo !=', '');
        }

        if(isset($_POST['min_age']) && $_POST['min_age'] != '') {
            $min = (int) $_POST['min_age'];
            $this->db->where('ur_age >=', $min);
        }

        if(isset($_POST['max_age']) && $_POST['max_age'] != '') {
            $max = (int) $_POST['max_age'];
            $this->db->where('ur_age <=', $max);
        }

        if(isset($_POST['target']) && $_POST['target'] != '')  {
            $target = htmlentities($_POST['target']);
            $this->db->where('ur_target ', $target);
        }

        if(isset($_POST['country']) && $_POST['country'] != '') {
            $country = htmlentities($_POST['country']);
            $this->db->where('ur_country ', $country);
        }

        if(isset($_POST['country_stay']) && $_POST['country_stay'] != '') {
            $country_stay = htmlentities($_POST['country_stay']);
            $this->db->where('ur_country_stay ', $country_stay);
        }

        $this->db->where('ur_gender !=', $this->session->userdata('userGender'));

        $this->db->limit($config['per_page'], $start);

        $query = $this->db->get();

        $result = $query->result_array();



        // الحته دى غيه بجد انا عارف

        $this->db->select('*');
        $this->db->from('users_register');

        if(isset($_POST['is_online']) && $_POST['is_online'] != '') {
            $this->db->join('users_online', 'users_online.uo_ur_id = users_register.ur_id AND users_online.uo_online_date > users_online.uo_leave_date');
        }

        if(isset($_POST['photo']) && $_POST['photo'] != '') {
            $this->db->where('ur_photo !=', '');
        }

        if(isset($_POST['min_age']) && $_POST['min_age'] != '') {
            $min = (int) $_POST['min_age'];
            $this->db->where('ur_age >=', $min);
        }

        if(isset($_POST['max_age']) && $_POST['max_age'] != '') {
            $max = (int) $_POST['max_age'];
            $this->db->where('ur_age <=', $max);
        }

        if(isset($_POST['target']) && $_POST['target'] != '')  {
            $target = htmlentities($_POST['target']);
            $this->db->where('ur_target ', $target);
        }

        if(isset($_POST['country']) && $_POST['country'] != '') {
            $country = htmlentities($_POST['country']);
            $this->db->where('ur_country ', $country);
        }

        if(isset($_POST['country_stay']) && $_POST['country_stay'] != '') {
            $country_stay = htmlentities($_POST['country_stay']);
            $this->db->where('ur_country_stay ', $country_stay);
        }

        $this->db->where('ur_gender !=', $this->session->userdata('userGender'));

        $NUM = $this->db->get()->num_rows();


        $config['total_rows'] = $NUM;
        $config['num_links'] = $NUM;
        $config['next_link'] = '<i class="fa fa-arrow-circle-o-right"></i>';
        $config['prev_link'] = '<i class="fa fa-arrow-circle-o-left"></i>';
        $config['last_link'] = false;
        $config['first_link'] = false;

        $this->pagination->initialize($config);




       // print_r($result);
        $data['pageNumber'] = $this->uri->segment(3) / 15 + 1;
        $data['contPages'] = ceil($NUM / 15);
        $data['contResult'] = $NUM;
        $data['pagination'] = $this->pagination->create_links();
        $data['dataSearch'] = $result;
        $data['siteInfo']   = $this->Dsw_model->getAll('sittings', 'row');
        $data['uri']        = $this->uri;
        $data['session']    = $this->session;
        $data['title'] = 'بحث';
        $this->load->view('site/search', $data);
    }





}