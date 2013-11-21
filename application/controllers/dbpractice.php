<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbpractice
 *
 * @author hb
 */
class Dbpractice EXTENDS CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_dbpractice');
    }

    public function index() {

        $result_obj = $this->model_dbpractice->get_users_object();
        $result_arr = $this->model_dbpractice->get_users_array();
        $this->load->view('pages/view_dbpractice', array('data_obj' => $result_obj, 'data_arr' => $result_arr));
    }

    public function test_rows() {
        $result_rows = $this->model_dbpractice->get_test_users();
        $this->load->view('pages/view_dbpractice', array('data_rows' => $result_rows['results'], 'count' => $result_rows['count']));
    }

    public function get_single_row() {
        $result_single_row = $this->model_dbpractice->get_single_row();
        $this->load->view('pages/view_dbpractice', array('data_single_row' => $result_single_row));
    }

}

?>
