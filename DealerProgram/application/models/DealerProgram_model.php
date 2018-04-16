<?php
class DealerProgram_model extends CI_Model 
{
	
	public $program_name; // string, provided by dealer.
	public $program_id;  // integer, manually assigned
	public $classes; // array of integers
	public $vendors;  // array of integers
	public $goal; // integer goal, usually for a quarter, some programs may have a monthly goal instead.
	public $claim_file_type; // type of claim file csv or txt.

	
	public function __construct()
	{
		$this->load->database(); // loads the database that is set up in config/database.php.
	}

	// Insert a row into the database table , DealerProgram
	public function insert_dealer_program()
	{
		$this->program_name    = $_POST['program_name']; 
		$this->program_id  = $_POST['program_id'];
		$this->classes     = $_POST['classes'];
		$this->vendors     = $_POST['vendors'];
		
		$this->db->insert('DealerProgram', $this);
	}
	
	// Read an entry from the DB table
	public function get_dealer_program()
	{
		$this->db->where('PRG_ID', $this->program_id);
		$this->db->get('DealerProgram', $this->program_id, $this->program_name);
	}


	
	
	
}

?>