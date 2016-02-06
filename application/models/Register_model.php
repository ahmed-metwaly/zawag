<?php
/**
 * Created by PhpStorm.
 * User: develop software
 * Date: 11/28/2015
 * Time: 9:41 AM
 */


class Register_model extends Dsw_model {

    private $tableName = 'users_register';

    public function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->library('session');
        $this->load->helper('cookie');
    }


    public function hashPassword($password) {
        $salt = md5(sha1(crc32($password. '+_)gNn87wd')));
        return md5(hash('SHA256', $salt . $password, true));
    }


    public function sessionExist($session){
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
  margin: 0 !important;
  padding: 0 !important;
  font-size: 100% !important;
  font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif !important;
  line-height: 1.65 !important;
  font-family: Droid Arabic Kufi !important;
  font-style: normal !important; }

img {
  max-width: 100% !important;
  margin: 0 auto !important;
  display: block !important; }

body,
.body-wrap {
  width: 100% !important ;
  height: 100% !important;
  background: #efefef !important ;
  -webkit-font-smoothing: antialiased !important;
  -webkit-text-size-adjust: none !important; }

a {
  color: #71bc37 !important;
  text-decoration: none !important; }

.text-center {
  text-align: center !important; }

.text-right {
  text-align: right !important; }

.text-left {
  text-align: left !important; }

.button {
  display: inline-block !important;
  color: white !important;
  background: #D51C7A !important;
  border: solid #D51C7A !important;
  border-width: 10px 20px 8px !important;
  font-weight: bold !important;
  border-radius: 4px !important;
  float: right !important;
  width: 100% !important;
  margin-bottom: 20px !important;
  margin-right:-15px !important;
  font-family: Droid Arabic Kufi !important; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px !important;
  line-height: 1.25 !important; }

h1 {
  font-size: 32px !important; }

h2 {
  font-size: 28px !important;
  font-family: Droid Arabic Kufi !important; }

h3 {
  font-size: 24px !important; }

h4 {
  font-size: 20px !important; }

h5 {
  font-size: 16px !important; }

p, ul, ol {
  font-size: 16px !important;
  font-weight: normal !important;
  margin-bottom: 20px !important;
  font-family: Droid Arabic Kufi !important; }

.container {
  display: block !important ;
  clear: both !important ;
  margin: 0 auto !important ;
  max-width: 580px !important ; }
  .container table {
    width: 100% !important ;
    border-collapse: collapse !important; }
  .container .masthead {
    color: white !important; }
    .container .masthead h1 {
      margin: 0 auto !important ;
      max-width: 90% !important;
      text-transform: uppercase !important; }
  .container .content {
    background: white !important;
    padding: 30px 35px !important; }
    .container .content.footer {
      background: none !important; }
      .container .content.footer p {
        margin-bottom: 0 !important;
        color: #888 !important;
        text-align: center !important;
        font-size: 14px !important; }
      .container .content.footer a {
        margin-right: 5px !important;
        color: #888 !important;
        text-decoration: none !important;
        font-weight: bold !important; }


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

                        <img class="img-resposive" src="http://www.muslimsmarry.com/siteAssets/images/placeholder.jpg">

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        
                        <h2> ' . $name . ' : مرحبا بك </h2>
                        

                        <p>رسالة تفعيل العضوية موقع زواج</p>
                        <p>اضغط على الرابط التالى</p>
                        
                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        
                                        <a href="'. HOST_NAME .'register/validateActive/' . $url .'" class="button"> فعل الان</a>
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
                        <p>تصميم شركة<a href="#">الرياض</a></p>
                    
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



$this->load->library('email');
        
        $active = md5(uniqid($mailTo));
        $this->createSession(array('emailActive' => $active));
        $this->email->from($mailFrom, 'muslimsmarry.com');
        $this->email->to($mailTo);
        $this->email->subject('تفعيل الحساب | مسلم زواج');
        $this->email->message($this->htmlEmailSend($active, $name));
        
               // echo $this->email->print_debugger();

        
        return $this->email->send() ? TRUE : FALSE;








    }

    public function createSession($data = array()) {
        return $this->session->set_userdata($data);
    }

    public function activationTrue() {
       return $this->uri->segment(3) === $this->session->userdata('emailActive') ? true : false;
    }

    public function addUser($userData = array(), $sessionData = array()) {
        if($this->add($this->tableName, $userData)) {
            $this->createSession($sessionData) ? TRUE : FALSE;
        }
        return FALSE;
    }










}