<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_dbpractice
 *
 * @author hb
 */
class Model_dbpractice  EXTENDS CI_Model{
    //put your code here
    public function get_users_object(){
       
        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
        return $query->result();
      
    }
    public function get_users_array(){
       
        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
        return $query->result_array();
      
    }
    public function get_test_users(){
        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
       if($query->num_rows() > 0);
       {
           $res = $query->result_array();
           $count = $query->num_rows();
           return array('results'=>$res,'count'=>$count);
       }
    }
    public function get_single_row(){
        $query = $this->db->query("SELECT p.employee_id,p.employee_name,p.designation,p.salary, CONCAT(e.employee_name, ' (',e.designation, ')') as reporting_person FROM `employees` e inner join employees p on e.employee_id = p.reportTo WHERE p.salary = (SELECT MAX(salary) FROM employees);");
    //    $query2 = $this->db->query("SELECT p.employee_id,p.employee_name,p.designation,p.salary, CONCAT(e.employee_name, ' (',e.designation, ')') as reporting_person FROM `employees` e inner join employees p on e.employee_id = p.reportTo WHERE p.salary = (SELECT MAX(salary) FROM employees WHERE salary < (SELECT MAX(salary) FROM employees));");
        //query for second highest max salary
        return $query->row();
    }
    //similarly $this->db->row_array(); returns array format
        
    public function insert($data){
        $sql_insert = "INSERT INTO news_users VALUES ('','".$data['username']."','".$data['passconf']."','".$data['email']."','".$data['gender']."','".$data['tech']."','".$data['city']."')";
        $this->db->query($sql_insert);
        return $this->db->affected_rows(); 
    }
}

?>
