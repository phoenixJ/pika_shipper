<?php
class NhanvienController extends MY_Controller{
	protected $_data;
	public function __construct(){
		parent::__construct();
		$mod=$this->uri->segment(1);
		$con=$this->uri->segment(2);
		$act=$this->uri->segment(3);
		$this->_data['module']=$mod;
		$this->_data['con']=$con;
		$this->_data['path']="template";
		$this->_data['nav'] = "quanli/nav-bar.php";
		if ($act=="")
			$this->_data['loadPage']="$mod/$con/index_view";
		else $this->_data['loadPage']="$mod/$con/$act"."_view";
		if ($this->session->userdata('level') != 4 && $con != "verify"){
			redirect(base_url().'verify/authenticate/logout','refresh');
		}
	}
}
?>