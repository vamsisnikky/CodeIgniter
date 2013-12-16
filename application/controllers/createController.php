<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cusController
 *
 * @author hb
 */
class createController  EXTENDS MY_CusController{
    //put your code here
    
    public function test(){
       echo $this->testfunction();
    }
    public function ranPassword(){
        echo $this->randomPassword();
    }
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/signup');
        $this->load->view('templates/footer');
    }
    
}

?>
