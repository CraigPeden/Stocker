<?php

	class User_model extends CI_Model 
	{

		var $username = "";
		var $password = "";
		var $hashedpassword = "";
		
		function __construct()
		{
				//Call the Model constructor
				parent::__construct();
				$this->load->helper('security');
		}

		public function check_password($entryusername, $entrypassword) 
		{	
			$hashed_password = do_hash($entrypassword);
						
			if ($this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->num_rows() == 1)
				{
					
					$user_id = $this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->row()->id;
					
					$this->session->set_userdata('user_id', $user_id);
					$visits = $this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->row()->visit_number + 1;
					$last_visit = date("Y-m-d");
					$data = array('visit_number' => $visits, 'last_visit' => $last_visit);
					$this->db->where('username', $entryusername);
					$this->db->update('users', $data);
					return TRUE;
				}
			else
				{
					
					return FALSE;
				} 
						
		}

		function add_user($username, $password) 
		{
			$this->db->insert('users', array('username' => $username, 'password' => do_hash($password), 'visit_number' => 0));
			redirect('Login');

		}
		
		function get_user_by_id($id)
		{
			return $this->db->get_where('users', array('id' => $id))->row();
		}
		
		function get_user_info()
		{
		$this->db->select('id, username, visit_number, last_visit');
		return $this->db->get('users');
		}
		
		function logged_in()
		{
			if ($this->session->userdata('user_id') != "")
				{
					return TRUE;
				}
			else
				{
					return FALSE;
				}
		}		
	}
	
/* End of file user_model.php */
/* Location: ../application/models */