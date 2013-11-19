<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of new_model
 *
 * @author hb
 */
class New_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database('mydatabase');
        //loaded dadabase in autoload.php in libraries array
    }

    public function get_news() {

////        $this->db->select('*');
////        $this->db->from('news');
//        $query = $this->db->get();
        $sql_select = "SELECT * FROM news WHERE id=? AND title=?";
        $query1 = $this->db->query($sql_select,array(2,"Microprocessors"))->result();
        $query2 = $this->db->query($sql_select,array(2,"Microprocessors"))->num_rows();
       

//        return $query->result();
        return array(
            'news' => $query1,
            'count' => $query2
        );
    }

    public function set_news() {
      
        $this->load->helper('date');
//        $data = array(
//            'title' => $this->input->post('title'),
//            'text' => $this->input->post('text')
//        );
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['text'];

        return $this->db->insert('news', $data);
    }

}

?>
