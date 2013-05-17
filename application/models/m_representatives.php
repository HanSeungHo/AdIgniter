<?php
class m_representatives extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function get_representative($repNumber = FALSE) {
		if ($repNumber === FALSE) {
			$this->db->select('*');
			$this->db->from('representatives');
			$this->db->join('tickets','tickets.repNumber = representatives.repNumber');
			$this->db->join('accounts','accounts.accountID = tickets.accountID');
			
			$query = $this->db->get();

			return $query->result_array();
		}
	
		$query = $this->db->get_where('representatives', array('repNumber' => $repNumber));
		return $query->row_array();
	}

}
?>
