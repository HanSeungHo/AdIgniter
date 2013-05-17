<?php
class archive extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = 'Archived Tickets - NAME AdIgniter VERSION';
		$this->load->view('templates/header', $data);
		$this->load->view('archive/index', $data);
		$this->load->view('templates/footer');
	}

}