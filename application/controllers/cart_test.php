<?php
class Cart_test extends CI_Controller {
    public function __construct() {
        parent::__construct();
       
    }
	
	function add() {
		
		$data = array(
			'id' => '42',
			'name' => 'Pants',
			'qty' => 1,
			'price' => 19.99,
			'options' => array('Size' => 'medium')
		);
		
		$this->cart->insert($data);
		echo "add() called";
                
	}
	
	function show() {
		
		
                echo '<pre>';
		print_r($this->session->all_userdata());
                echo '</pre>';
                $this->load->view('pages/viewcart',$this->cart->contents());
		
	}
	
	function add2() {
		
		$data = array(
			'id' => '12',
			'name' => 'T-shirt',
			'qty' => 2,
			'price' => 7.99,
			'options' => array('Size' => 'large')
		);
		
		$this->cart->insert($data);
		echo "add2() called";
		
	}
	
	function update() {
		
		$data = array(
			'rowid' => '456efa2d671ecce94aff804002e2047f',
			'qty' => '12'
		);
		
		$this->cart->update($data);
		echo "update() called";
	}
	
	function total() {
		
		echo $this->cart->total();
		
	}
	
	function remove() {
		
		$data = array(
			'rowid' => 'vamsi',
			'qty' => '0'
		);
		
		$this->cart->update($data);
		echo "remove() called";
	}
	
	function destroy() {
		
		$this->cart->destroy();
		echo "destroy() called";
	}
	
}




