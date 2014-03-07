<?php

	class Loyalty_model extends CI_Model 
	{	
		function add_loyalty_member($loyalty_first_name,$loyalty_second_name,$loyalty_age,$loyalty_balance,$loyalty_begun)
		{
			$this->db->insert('loyalty_card', array('loyalty_first_name' => $loyalty_first_name, 'loyalty_second_name' => $loyalty_second_name, 'loyalty_age' => $loyalty_age, 'loyalty_balance' => $loyalty_balance, 'loyalty_begun' => $loyalty_begun));
			$this->session->set_flashdata('success', $loyalty_first_name . ' added');
			redirect('Stocker/loyalty_add_member');
		}
		
		function delete_loyalty_member()
		{
			$user_id = $this->input->get('id');
			$this->session->set_flashdata('success', $this->Loyalty_model->get_full_name_by_id($user_id) . ' deleted.');
			$this->db->delete('loyalty_card', array('id' => $user_id));
			redirect('Stocker/loyalty');
		}
		
		function edit_loyalty_member($loyalty_first_name,$loyalty_second_name,$loyalty_id)
		{
			
			$data = array(
	               'loyalty_first_name' => $loyalty_first_name,
	               'loyalty_second_name' => $loyalty_second_name,
	            );
			$this->db->where('id', $product_id);
			$this->db->update('inventory', $data); 
			$this->session->set_flashdata('success', $product_name);
			redirect('Stocker/inventory');

		}
		
		function update_loyalty_info()
		{
			$this->Loyalty_model->inventory_edit_item($this->input->post('loyalty_id'), $this->input->post('loyalty_first_name'), $this->input->post('loyalty_second_name'));
		}
		
		function loyalty_display()
		{
			return $this->db->get('loyalty_card');
		}
		
		function get_full_name_by_id($user_id)
		{
			$result = $this->db->get_where('loyalty_card', array('id' => $user_id))->row();
			$first_name = $result->loyalty_first_name;
			$second_name = $result->loyalty_second_name;
			$full_name = $first_name . ' ' . $second_name;
			return $full_name;
		}
		
		function get_info_by_id($loyalty_id)
		{
			return $this->db->get_where('loyalty_card', array('id' => $loyalty_id))->row();
		}
		
		function loyalty_profile($id)
		{
			return $this->db->get_where('loyalty_card', array('id' => $id))->row();
		}
		
		function increment_loyalty($id)
		{
			$loyalty = $this->db->get_where('loyalty_card', array('id' => $id))->row()->loyalty_balance + 1;
			$data = array('loyalty_balance' => $loyalty);
			$this->db->where('id', $id);
			$this->db->update('loyalty_card', $data);
		}
	}
	
/* End of file loyalty_model.php */
/* Location: ../application/models */