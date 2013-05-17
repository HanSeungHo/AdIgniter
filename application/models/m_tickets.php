<?php
class m_tickets extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function get_ticket($ticketID = FALSE) {
		if ($ticketID === FALSE) {
			$this->db->select('*');
			$this->db->from('tickets');
			$this->db->join('representatives','representatives.repNumber = tickets.repNumber');
			$this->db->join('accounts','accounts.accountID = tickets.accountID');
			
			$query = $this->db->get();

			return $query->result_array();
		}
	
		$query = $this->db->get_where('tickets', array('ticketID' => $ticketID));
		return $query->row_array();
	}

}
?>
