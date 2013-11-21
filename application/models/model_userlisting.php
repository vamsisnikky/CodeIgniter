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
class Model_userlisting EXTENDS CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database('my_db');
    }

    public function record_count() {
       return $this->db->count_all('hb_users'); 
    }

    public function getusers($feilds) {

//         $sql_select = "SELECT * FROM hb_users";
        $this->db->SELECT('*');
        $this->db->FROM('hb_users');
        if (is_array($feilds) && $feilds != NULL) {
            $this->db->LIKE('uname', $feilds['uname'], 'after');
            $this->db->LIKE('gender', $feilds['gender'], 'after');
            $this->db->LIKE('dob', $feilds['dob']);
            $this->db->LIKE('email', $feilds['email'], 'after');
            $this->db->LIKE('mobile', $feilds['mobile'], 'after');
            $this->db->LIKE('city', $feilds['city'], 'after');
        }
        return $this->db->get()->result_array();
    }

//         return $this->db->query($sql_select)->result_array();

    public function fetch_users($limit, $start) {
        $this->db->limit($limit, $start);
        $data = $this->db->get("hb_users")->result_array();
            return $data;
    }

}

?>
