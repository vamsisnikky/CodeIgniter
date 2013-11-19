<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog
 *
 * @author hb
 */
class Blog EXTENDS CI_Controller {
    //put your code here
    public function index(){
        $data['todolist'] = array("Clean House","Call Mom","Run Errands");
        $data['title'] = "My Real Title";
        $data['heading'] = "My real heading";
        $this->load->view('pages/blogview',$data);
        
    }
}

?>
