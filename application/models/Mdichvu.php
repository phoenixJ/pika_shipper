<?php
class Mdichvu extends CI_Model{
	private $_tab='dichvu';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
  public function LietKeDV(){
    return $this->db->get($this->_tab)->result_array();
  }
}
?>
