<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of custom_controller
 *
 * @author hb
 */
class Custom_controller  EXTENDS MY_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function call(){
       
       echo $this->testfunction();
    }
    public function home(){
            $this->load->view('templates/header');
            $this->load->view('pages/signup');
            $this->load->view('templates/footer');
    }
}

?>
