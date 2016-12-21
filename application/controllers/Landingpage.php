<?php
class Landingpage extends MyController {
	public function index()
	{
		$this->load->view($this->_data['path'], $this->_data);
	}
}