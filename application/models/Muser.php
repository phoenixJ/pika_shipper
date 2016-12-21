<?php
class Muser extends CI_Model{
	private $_tab='user';
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function saveFlightToDB($flight){
		$this->db->insert($this->_tab, $flight);
	}
	public function checkLogin($u, $p){
		$this->db->where('userName', $u);
		$this->db->where('userPass', $p);
		$q = $this->db->get($this->_tab);
		if ($q->num_rows() > 0){
			return TRUE;
		}else return FALSE;
	}
}
?>
