<?php
class Buyable extends MyController {
	public function __construct(){
		parent::__construct();
        $this->load->model("Mflight");       
	}
	public function index()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        $this->form_validation->set_rules('flightFrom', 'Đi từ', 'required');
        $this->form_validation->set_rules('flightTo', 'Đi đến', 'required');
        $this->form_validation->set_rules('flightDate', 'Ngày đi', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
                $this->_data['loadPage'] = "buyable/index_view";
        }
        else
        {
                $this->_data['loadPage'] = "buyable/success";
                $this->_data['flitghtFrom'] = $this->input->post("flitghtFrom");
                $this->_data['flightTo'] = $this->input->post("flightTo");
                $this->_data['flightDate'] = $this->input->post("flightDate");

                $flight = array(
                	'flightFrom' => $this->input->post("flightFrom"),
                	'flightTo' => $this->input->post("flightTo"),
                	'flightDate' => $this->input->post("flightDate"),
                );
                $this->Mflight->saveflightToDB($flight);
        }
		$this->load->view($this->_data['path'], $this->_data);
	}
}