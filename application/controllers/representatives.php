<?php
class representatives extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_representatives');
	}

	public function index() {
		$data['representatives'] = $this->m_representatives->get_representative();
	
		$data['title'] = 'All Representatives - NAME AdIgniter VERSION';
		$this->load->view('templates/header', $data);
		$this->load->view('representatives/index', $data);
		$this->load->view('templates/footer');
	}

}