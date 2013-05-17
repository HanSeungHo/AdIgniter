<?php
class tickets extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_tickets');
	}

	public function index() {
		$data['tickets'] = $this->m_tickets->get_ticket();
		
		$data['title'] = 'All Tickets - NAME AdIgniter VERSION';
		$this->load->view('templates/header', $data);
		$this->load->view('tickets/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug) {
		$data['ticket'] = $this->m_tickets->get_ticket($slug);
	}
	
	public function pdf($ticketID) {
		$data['ticket'] = $this->m_tickets->get_ticket($ticketID);
		$pdf = $this->load->view('tickets/pdf', $data, true);
		$mpdf = new mPDF('','A4-L','','',5,5,5,5,5,5,''); 
		$mpdf->WriteHTML($pdf);
		$mpdf->Output($ticketID,I);
		#$this->load->view('tickets/pdf', $data);
	}
	
		public function add() {
		$data['title'] = 'Add New Ticket - NAME AdIgniter VERSION';
		$this->load->view('templates/header', $data);
		$this->load->view('tickets/add', $data);
		$this->load->view('templates/footer');
	}
	
}