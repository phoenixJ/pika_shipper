<?php
class Buyer extends MyController {
	public function __construct(){
		parent::__construct();
        $this->load->model("Morder");       
	}
	public function index()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        $this->form_validation->set_rules('productName', 'Tên sản phẩm', 'required');
        $this->form_validation->set_rules('productLink', 'Link mặt hàng', 'required|valid_url');
        $this->form_validation->set_rules('quantity', 'Số lượng', 'required|numeric');
        $this->form_validation->set_rules('buyerName', 'Họ và tên', 'required');
        $this->form_validation->set_rules('buyerEmail', 'Email', 'required');
        $this->form_validation->set_rules('buyerPhoneNumber', 'Số điện thoại', 'required');


        if ($this->form_validation->run() == FALSE)
        {
                $this->_data['loadPage'] = "buyer/index_view";
        }
        else
        {
                $this->_data['loadPage'] = "buyer/success";
                $this->_data['buyerName'] = $this->input->post("buyerName");
                $this->_data['buyerEmail'] = $this->input->post("buyerEmail");


                if ($this->input->post("buyerScocial") != "") {
                	$buyerScocial = $this->input->post("buyerScocial");
                }else $buyerScocial = "";

                 if ($this->input->post("buyerMessage") != "") {
                	$buyerMessage = $this->input->post("buyerMessage");
                }else $buyerMessage = "";
                
                $order = array(
                	'productName' => $this->input->post("productName"),
                	'productLink' => $this->input->post("productLink"),
                	'productNation' => $this->input->post("productNation"),
                	'quantity' => $this->input->post("quantity"),
                	'currencyUnit' => $this->input->post("currencyUnit"),
                	'buyerName' => $this->input->post("buyerName"),
                	'buyerEmail' => $this->input->post("buyerEmail"),
                	'buyerPhoneNumber' => $this->input->post("buyerPhoneNumber"),
                	'buyerScocial' => $buyerScocial,
                	'buyerMessage' => $buyerMessage

                );
                $this->Morder->saveOrderToDB($order);
        }
		$this->load->view($this->_data['path'], $this->_data);
	}
}