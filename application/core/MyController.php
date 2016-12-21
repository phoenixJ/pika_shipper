<?php
class MyController extends MY_Controller{
	protected $_data;
	public function __construct(){
		parent::__construct();
		$con=$this->uri->segment(1);
		$act=$this->uri->segment(2);
		$this->_data['con']=$con;
		$this->_data['data'] = "";
		$this->_data['path']="template";
		if ($con == ""){
			$con = "landingpage";
		}
		if ($act=="")
			$this->_data['loadPage']="$con/index_view";
		else $this->_data['loadPage']="$con/$act"."_view";
	}
}
?>