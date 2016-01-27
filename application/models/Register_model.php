<?php

/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 11/28/2015
 * Time: 9:41 AM
 */
class Register_model extends Dsw_model {

    private $tableName = 'users_register';

    public function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function hashPassword($password) {
        $salt = md5(sha1(crc32($password . '+_)gNn87wd')));
        return md5(hash('SHA256', $salt . $password, true));
    }

    public function sessionExist($session) {
        return $this->session->userdata($session);
    }

    private function htmlEmailSend($url, $name) {
        $html = '
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <!-- For development, pass document through inliner -->


    <style type="text/css">

    * {
  margin: 0;
  padding: 0;
  font-size: 100%;
  font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  line-height: 1.65;
  font-family: Droid Arabic Kufi;
  font-style: normal; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color: #71bc37;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #D51C7A;
  border: solid #D51C7A;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px;
  float: right;
  width: 100%;
  margin-bottom: 20px;
  margin-right:-15px;
  font-family: Droid Arabic Kufi; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px;
  font-family: Droid Arabic Kufi; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px;
  font-family: Droid Arabic Kufi; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 580px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 30px 35px; }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        margin-right: 5px;
        color: #888;
        text-decoration: none;
        font-weight: bold; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <img class="img-resposive" src="images/placeholder.jpg">

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>مرحبا بك :  ' . $name . '</h2>
                        <h4>رسالة تفعيل العضوية</h4>
                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="http://www.azq1.com/1-zawag/register/validateActive/' . $url . '" class="button"> فعل الان</a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <p><em>ادارة الموقع</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>تصميم شركة<a href="http://www.elryad.com">الرياض</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>';

        return $html;
    }

    public function sendActivation($mailFrom, $mailTo, $name) {

//        $config = Array(
//            'protocol' => 'smtp',
//            'smtp_port' => 465,
//            'mailtype' => 'html',
//            'charset' => 'utf-8',
//            'wordwrap' => TRUE
//        );

            $this->load->library('email');

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'localhost';
            $config['smtp_port']    = '25';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'welcome@muslimsmarry.com';
            $config['smtp_pass']    = 'dnN}WNK#AsyZ';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; 
            $config['mailtype'] = 'html';
            $config['wordwrap'] = true;
            $this->email->initialize($config);



            $active = md5(uniqid($mailTo));
            $this->createSession(array('emailActive' => $active));
            $this->email->from($mailFrom, 'Stansera');
            $this->email->to($mailTo);
            $this->email->subject('تفعيل الحساب | مسلم زواج');
            $this->email->message($this->htmlEmailSend($active, $name));

            return $this->email->send() ? TRUE : FALSE;



       
//        $this->load->library('email', $config);
//        $this->email->from($mailFrom);
//        $this->email->to($mailTo);
//        $this->email->subject('تفعيل الحساب');
//        $this->email->message($this->htmlEmailSend($active, $name));
//        $this->email->set_alt_message('خطا فى الارسال اعد المحاولة مره اخرى');
//
//        //$this->email->set_newline("\r\n"); // require this, otherwise sending via gmail times out

        
    }

    public function createSession($data = array()) {
        return $this->session->set_userdata($data);
    }

    public function activationTrue() {
        return $this->uri->segment(3) === $this->session->userdata('emailActive') ? true : false;
    }

    public function addUser($userData = array(), $sessionData = array()) {
        if ($this->add($this->tableName, $userData)) {
            $this->createSession($sessionData) ? TRUE : FALSE;
        }
        return FALSE;
    }

}
