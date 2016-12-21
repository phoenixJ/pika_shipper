<?php
class Morder extends CI_Model{
	private $_tab='Order';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
  public function saveOrderToDB($order){
	$this->db->insert($this->_tab, $order);
  }
}
?>
