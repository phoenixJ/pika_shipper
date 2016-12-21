<?php
class Landingpage extends MyController {
	public function index()
	{
		$this->load->view($this->_data['path'], $this->_data);
	}
	public function test(){
		$this->_data['ten'] = "Quoc anh";
		$this->load->view($this->_data['path'], $this->_data);	
	}
}