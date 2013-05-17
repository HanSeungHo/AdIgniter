<?php
class accounts extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Accounts - NAME AdIgniter VERSION';
		$this->load->view('templates/header', $data);
		$this->load->view('accounts/index', $data);
		$this->load->view('templates/footer');
	}

}