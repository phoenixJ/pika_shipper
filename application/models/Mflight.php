<?php
class Mflight extends CI_Model{
	private $_tab='flight';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
  public function saveflightToDB($flight){
	$this->db->insert($this->_tab, $flight);
  }
}
?>
