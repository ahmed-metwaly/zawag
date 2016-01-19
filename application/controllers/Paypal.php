<?php

// ------------------ paypal_go page ---------------------

class Paypal extends CI_Controller {

    public function __constract() {
        parent::__constract();
    }

    public function paypal_go() {

        $this->load->model('setting');
        $q = $this->setting->find_all_where('setting_id', '1');
        $d = $q->row();



        $config['business'] = $d->setting_paypal;
        $config['cpp_header_image'] = ''; //Image header url [750 pixels wide by 90 pixels high]
        $config['return'] = base_url() . "site/success";
        $config['cancel_return'] = base_url() . "site/cancel";
        $config['notify_url'] = base_url() . "site/paypal_done"; //IPN Post
        $config['production'] = TRUE; //Its false by default and will use sandbox
        $config["invoice"] = random_string('numeric', 8); //The invoice id
        $config["custom"] = $this->session->userdata('u_id');

        $this->load->library('paypal', $config);

        #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);

        $this->paypal->add('item1', $this->session->userdata('paid_value')); //First item

        $this->paypal->pay(); //Proccess the payment
    }

    // ------------------ paypal_done page ---------------------

    public function paypal_done() {

        $received_data = $this->input->post();


        // update into ads table
        $this->load->model('ads_m');
        $q = $this->ads_m->find_all_where('ads_by', $received_data['custom']);
        if ($q->num_rows() > 0) {
            $d = $q->row();



            // selec lse ads id of user
            $q1 = $this->ads_m->find_last_id_where(array('ads_by' => $received_data['custom']), 'ads_id');
            $d1 = $q1->row();
            //end

            $today = $d1->ads_stamp;
            $x = $received_data['mc_gross'];
            $twoMonthsLater = strtotime("+$x months", $today);

            $this->ads_m->update1(array('ads_by' => $received_data['custom'], 'ads_id' => $d1->ads_id), array('ads_paid' => $received_data['mc_gross'], 'ads_stamp' => $twoMonthsLater));
            $this->session->set_userdata('message', 'Add ad was successfully');
            redirect('site/add_ads');
        }
    }

    // ------------------ success page ---------------------

    public function success() {
        $received_data = $this->input->post();
        $this->session->set_userdata('message', 'Add ad was successfully');
        redirect('site/add_ads');
    }

    // ------------------ failed page ---------------------

    public function failed() {

        echo 'failed';
    }

}
