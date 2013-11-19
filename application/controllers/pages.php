<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages
 *
 * @author hb
 */
class Pages EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $prefs = array (
               'start_day'    => 'monday',
               'month_type'   => 'long',
               'day_type'     => 'short',
              'show_next_prev'  => TRUE
             );
                $this->load->library('calendar',$prefs);

    }

    function index() {

//        print_r($data['news']);
//        $data['title'] = 'News archive';
        $name["ccc"] = array("name" => "Vamsi Snikky");
        $this->load->view('templates/header');
        $this->load->view('pages/home', $name);
        $this->load->view('templates/footer');
        

//        echo base_url();
    }

    function about() {
//        $this->load->model('new_model');
//loaded model in autoload.php  in models array
//        $this->benchmark->mark('code_start');
        $info = $this->new_model->get_news();
        $data['news'] = $info['news'];
        $data['count'] = $info['count'];
        
        $this->load->view('templates/header');
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer');
//        $this->benchmark->mark('code_start');
//        echo $this->benchmark->elapsed_time('code_start', 'code_end'); //uses for caluclating rendering time of particular code
        
    }

    function create() {

        $this->load->library('form_validation');


//
//        $this->form_validation->set_rules('title', 'Title', 'required');
//        $this->form_validation->set_rules('text', 'Description', 'required');

        if ($this->form_validation->run('share') === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/create');
            $this->load->view('templates/footer');
        } else {
//            $this->load->model('new_model');
            //loaded model in autoload.php  in models array
            $this->new_model->set_news();
            $this->load->view('templates/header');
            $this->load->view('pages/success');
            $this->load->view('templates/footer');
        }
    }

//    public function _remap($method){
//        if($method == 'about' || $method == 'pages' || $method == 'create'){
//            $this->$method();
//        }
//        else{
//            show_404();
//        }
//    }
}

?>
