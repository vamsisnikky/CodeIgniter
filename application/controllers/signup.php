<?php

class Signup EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        
    }

    public function index() {
      $data = $_POST;
      if(isset($_POST) && $_POST != NULL && is_array($_POST)){
      $technologies = implode(", ",$data['tech']);
      $data['tech'] = $technologies;
      }
        $this->load->library('form_validation');
//        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->lang->load('mylang');
//        $this->form_validation->set_message('required', 'please enter username');
        $this->form_validation->set_message('valid_email', 'please enter valid email address');
        $this->form_validation->set_rules('username','lang:Username','trim|required|xss_clean|callback_checkusername[username]');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('passconf','Confirm Password','trim|required|matches[password]|md5');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('gender','Gender','trim|required');
        $this->form_validation->set_rules('tech[]','Technology','trim|required');
        $this->form_validation->set_rules('city','City','trim|required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/signup');
            $this->load->view('templates/footer');
        } else {
            $this->load->model('model_dbpractice');
            $status = $this->model_dbpractice->insert($data);
            if($status == 1){
            $this->load->view('templates/header');
            $this->load->view('pages/signupsucces',array('username'=>$data['username']));
            $this->load->view('templates/footer');
            }
        }
    }
    //function used in form_validation of username
    public function checkusername($str){
        if($str == "admin"){
            $this->form_validation->set_message('checkusername','The %s feild cannot be word `admin`');
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

}

?>
