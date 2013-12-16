<?php

class Register extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public  function test(){
        echo $this->testfunction();
    }
    public function captcha() {
        $this->load->helper('captcha');

        $vals = array(
            'img_path' => './captcha/',
            'img_url' => 'http://localhost/CodeIgniter/captcha/',
            'img_width' => '150',
            'img_height' => 50,
            'expiration' => 5
        );
        $captcha = create_captcha($vals);
        return $captcha;
    }

    public function show_captcha() {
        $captcha = $this->captcha();
        $arr = array('image' => $captcha['image'], 'word' => $captcha['word']);
        echo json_encode($arr);
    }

    public function ranPassword() {
       echo $this->randomPassword();
    }

    public function user_register() {
        $captcha = $this->captcha();
        if (isset($_POST) && $_POST != NULL && is_array($_POST)) {
             $data = $_POST;
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('vFirstName', 'Firstname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vLastName', 'Firstname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vUserName', 'Firstname', 'trim|required|xss_clean|callback_checkusername[username]');
        $this->form_validation->set_rules('vPassword', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vConfirmPassword', 'Confirm Password', 'trim|required|matches[vPassword]|xss_clean');
        $this->form_validation->set_rules('vEmail', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('vDob', 'DOB', 'trim|required|xss_clean');
         if ($this->form_validation->run() === FALSE) {
              $this->load->view('pages/view_register', array('captcha' => $captcha));
         }
         else{
              $this->load->view('welcome_message', array('user' => $data['vUserName']));
         }
         
       
    }

    //function used in form_validation of username
    public function checkusername($str) {
        if ($str == "admin") {
            $this->form_validation->set_message('checkusername', 'The %s feild cannot be word `admin`');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

?>
