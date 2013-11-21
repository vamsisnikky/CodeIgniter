<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userlisting
 *
 * @author hb
 */
class Userlisting EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('pagination');
    }

    public function index() {


        $config['base_url'] = 'http://192.168.42.10/CodeIgniter/userlisting/pagination';
        $config['total_rows'] = $this->model_userlisting->record_count();
        $config['per_page'] = 3;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $links = $this->pagination->create_links();
        
        if ((isset($_GET['uname']) && $_GET['uname'] != "")) {
            $feilds['uname'] = $_GET['uname'];
        } else {
            $feilds['uname'] = NULL;
        }
        if ((isset($_GET['gender']) && $_GET['gender'] != "")) {
            $feilds['gender'] = $_GET['gender'];
        } else {
            $feilds['gender'] = NULL;
        }
        if ((isset($_GET['dob']) && $_GET['dob'] != "")) {
            $feilds['dob'] = $_GET['dob'];
        } else {
            $feilds['dob'] = NULL;
        }
        if ((isset($_GET['email']) && $_GET['email'] != "")) {
            $feilds['email'] = $_GET['email'];
        } else {
            $feilds['email'] = NULL;
        }
        if ((isset($_GET['mobile']) && $_GET['mobile'] != "")) {
            $feilds['mobile'] = $_GET['mobile'];
        } else {
            $feilds['mobile'] = NULL;
        }
        if ((isset($_GET['city']) && $_GET['city'] != "")) {
            $feilds['city'] = $_GET['city'];
        } else {
            $feilds['city'] = NULL;
        }
        $data = $this->model_userlisting->getusers($feilds);
        $this->load->view('pages/view_userlisting', array('users' => $data, 'link' => $links));
    }

    public function pagination() {

        $config = array();
        $config['base_url'] = 'http://192.168.42.10/CodeIgniter/userlisting/pagination';
        $config['total_rows'] = $this->model_userlisting->record_count();
        $config['per_page'] = 3;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data = $this->model_userlisting->fetch_users($config['per_page'], $page);
        $links = $this->pagination->create_links();
        $this->load->view("pages/view_userlisting", array('users' => $data, 'link' => $links));
    }

}

?>
