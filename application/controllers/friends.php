<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of friends
 *
 * @author hb
 */
class Friends EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_friends');
    }

    public function index() {
        if(isset($_GET) && $_GET != NULL){
            $user = $_GET['user'];
        }
        else {
            $user = NULL;
        }
        $results = $this->model_friends->get_friends($user);
        $users = $this->model_friends->get_users();
        $this->load->view('pages/view_friends',array('friends'=>$results,'name'=>$user,'users' => $users));
    }
    public function mutual_friends(){
        
    }

}

?>
