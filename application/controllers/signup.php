<?php

class Signup EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
    }

    public function index() {
        $data = $_POST;
        if (isset($_POST) && $_POST != NULL && is_array($_POST)) {
            $technologies = implode(", ", $data['tech']);
            $data['tech'] = $technologies;
            $data['image_mydatabase'] = file_get_contents($_FILES['userfile']['tmp_name']);
        }
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload();
        $upload = $this->upload->data();
        $error = $this->upload->display_errors();
        $data['image_my_db'] = $upload['file_name'];
//               print_r(var_dump(is_dir($config['upload_path'])));
//                print_r($upload);print_r($error);exit();
        $this->load->library('form_validation');
//        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->lang->load('mylang');
//        $this->form_validation->set_message('required', 'please enter username');
        $this->form_validation->set_message('valid_email', 'please enter valid email address');
        $this->form_validation->set_rules('username', 'lang:Username', 'trim|required|xss_clean|callback_checkusername[username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required|matches[password]|md5');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tech[]', 'Technology', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/signup');
            $this->load->view('templates/footer');
        } else {
            $this->load->model('model_dbpractice');
            $this->load->library('email');
            $this->email->set_newline("\r\n");
//            $this->email->initialize($config);//no need to initialize $config coz we written it in config/email.php
            $this->email->from('admin@newsusers.com', "Admin");
            $this->email->to($data['email']);
            $this->email->subject('Your Registration Completed');
            $this->email->message('You have registerd your account Succesful');
            $this->email->send();
            $status = $this->model_dbpractice->insert($data);
            $status_active_insert = $this->model_dbpractice->active_insert($data);
            if ($status == 1 && $status_active_insert) {
                $this->load->view('templates/header');
                $this->load->view('pages/signupsucces', array('username' => $data['username']));
                $this->load->view('templates/footer');
            }
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
