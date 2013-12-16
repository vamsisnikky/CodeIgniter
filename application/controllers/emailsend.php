<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of emailsend
 *
 * @author hb
 */
class Emailsend extends CI_Controller {

    //put your code here
    public function index() {
        
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => MY_EMAIL,
                'smtp_pass' => MY_PASSWORD,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        $this->email->initialize($config);//no need to initialize $config coz we written it in config/email.php
        $this->email->from(FROM_EMAIL,from_name);
        $this->email->to('vamsisnikky@mailinator.com');
        $this->email->subject('Welcome To Custom Libraries');
        $this->email->message(nl2br('Good Morning..!!!
           
                        --------------------------------
                          Tommorrow is tuesday!!!
                        -------------------------------- 
                                                                   
                                                                        '));
        if($this->email->send()){
            echo '<h3>'.$this->email->delivary_report().'</h3><br>';
            echo $this->email->print_debugger();
        }else{
            echo '<h3>'.$this->email->failed_report().'</h3><br>';
            echo $this->email->print_debugger();
        }
          
    }
}

?>
