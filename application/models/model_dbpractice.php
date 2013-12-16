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
class Model_dbpractice EXTENDS CI_Model {

    //put your code here
    public function get_users_object() {
        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
        return $query->result();
    }

    public function get_users_array() {

        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
        return $query->result_array();
    }

    public function get_test_users() {
        $query = $this->db->query("SELECT Customer_id,Customer_name,Mobile,Address,City,Postalcode,Country FROM customers");
        if ($query->num_rows() > 0)
            ; {
            $res = $query->result_array();
            $count = $query->num_rows();
            return array('results' => $res, 'count' => $count);
        }
    }

    public function get_single_row() {
        $query = $this->db->query("SELECT p.employee_id,p.employee_name,p.designation,p.salary, CONCAT(e.employee_name, ' (',e.designation, ')') as reporting_person FROM `employees` e inner join employees p on e.employee_id = p.reportTo WHERE p.salary = (SELECT MAX(salary) FROM employees);");
        //    $query2 = $this->db->query("SELECT p.employee_id,p.employee_name,p.designation,p.salary, CONCAT(e.employee_name, ' (',e.designation, ')') as reporting_person FROM `employees` e inner join employees p on e.employee_id = p.reportTo WHERE p.salary = (SELECT MAX(salary) FROM employees WHERE salary < (SELECT MAX(salary) FROM employees));");
        //query for second highest max salary
        return $query->row();
    }

    //similarly $this->db->row_array(); returns array format

    public function insert($data) {
        $sql_insert = "INSERT INTO news_users VALUES ('','" . $data['username'] . "','" . md5($data['passconf']) . "','" . $data['email'] . "','" . $data['gender'] . "','" . $data['tech'] . "','" . $data['city'] . "','" . $data['image_my_db'] . "')";
        $this->db->query($sql_insert);
        return $this->db->affected_rows();
    }

    public function get_users() {
        $query = $this->db->get('news_users');
        return $query->result_array();
    }

    public function active_insert($data) {
        $DB2 = $this->load->database('mydatabase', TRUE);
        $info = array(
            'username' => $data['username'],
            'password' => md5($data['passconf']),
            'email' => $data['email'],
            'gender' => $data['gender'],
            'technology' => $data['tech'],
            'city' => $data['city'],
            'image' => $data['image_mydatabase']
        );
        $DB2->insert('news_users_duplicate', $info);
        return $DB2->affected_rows();
    }

    public function get_records_blob() {
        $DB2 = $this->load->database('mydatabase', TRUE);
        return $DB2->get('news_users_duplicate')->result_array();
    }

    public function insert_country($country) {
        $db3 = $this->load->database('php', TRUE);
        foreach ($country as $name) {
            $info = array('iCountryId' => "", 'vCountryName' => $name);
            $db3->insert('country_master', $info);
        }
        echo $db3->affected_rows();
    }

    public function insert_state($state) {
        $db3 = $this->load->database('php', TRUE);
        foreach ($state as $name) {
            $info = array('iStateId' => "", 'vStateName' => $name, 'iCountryId' => 82);
            $db3->insert('state_master', $info);
        }
        echo $db3->affected_rows();
    }

    public function insert_city($city_array) {
        $db3 = $this->load->database('php', TRUE);
        foreach ($city_array as $name) {
            $info = array('iCityId' => "", 'vCityName' => $name, 'iStateId' => 12);
            $db3->insert('city_master', $info);
        }
        echo $db3->affected_rows();
    }

    public function login_attempt_count() {
        $this->load->helper('date');
        $this->load->helper('string');
        $seconds = 30;
        // First we delete old attempts from the table 
        $oldest1 = strtotime(date('Y-m-d H:i:s') . ' - ' . $seconds . ' seconds');
        $oldest2 = date('Y-m-d H:i:s', $oldest1);
        $del_data = $oldest2;
        $this->db->where('time <', $del_data);
        $this->db->delete('Login_Attempts');
        // Next we insert this attempt into the table
        $data = array(
            'ipaddress' => $_SERVER['REMOTE_ADDR'],
            'time' => date("Y-m-d H:i:s"));
        $this->db->insert('Login_Attempts', $data);

        // Finally we count the number of recent attempts from this ip address 
        $count = 'SELECT count(*) as number FROM Login_Attempts WHERE ipaddress = ?';
        $num = $this->db->query($count, $_SERVER['REMOTE_ADDR']);
        if ($num->num_rows() > 0) {
            foreach ($num->result() as $attempt) {
                $attempts = $attempt->number;
                return $attempts;
            }
        }
    }

    public function login($data) {

        $query = "SELECT username,password from user1 WHERE username='" . $data['username'] . "' AND password = '" . $data['password'] . "' ";
        $count = $this->db->query($query)->num_rows();
//        echo $this->db->last_query();
        return $count;
    }

    public function get_data_host() {
        $db4 = $this->load->database('training', TRUE);
//        $query_select = "SELECT emp_mst_id,emp_name,dept_id FROM emp_mst";
        //        $result_select  = $db4->query($query_select)->result_array();
        $db4->select('emp_mst_id,emp_name,dept_id');
        $query_select = $db4->get('emp_mst');
        $result_select = $query_select->result_array();
        return $result_select;
    }

}

?>
