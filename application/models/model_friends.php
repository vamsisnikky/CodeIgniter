<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_friends
 *
 * @author hb
 */
class Model_friends EXTENDS CI_Model {

    //put your code here
    public function get_users(){
         return $this->db->query("SELECT user_name FROM users")->result_array();
    }
    public function get_friends($user) {
       
        if (isset($user) && $user != NULL) {
            $query = $this->db->query("SELECT f.friend_name,f.friend_email,f.friend_mobile,f.friend_city from friends f JOIN users u  ON f.friend_user_id = u.user_id WHERE f.friend_user_id = (SELECT user_id FROM users WHERE user_name = '" . $user . "')");
        } else {
            $query = $this->db->query("SELECT friend_name,friend_email,friend_mobile,friend_city FROM friends");
        }
       return $query->result_array();
    }

}

?>
