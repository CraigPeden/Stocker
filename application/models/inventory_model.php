<?php

	class Inventory_model extends CI_Model 
	{

		var $product_name = "";
		var $product_quantity = "";
		var $product_category = "";
		var $product_price = "";
		var $inventory_count = "";
		
		function __construct()
		{
				//Call the Model constructor
				parent::__construct();
				$this->load->helper('security');
		}

		function inventory_add_item($product_name,$product_quantity,$product_category,$product_price) 
		{
			$this->session->set_flashdata('success', $product_name);
			$this->db->insert('inventory', array('product_name' => $product_name, 'product_quantity' => $product_quantity, 'product_category' => $product_category, 'product_price' => $product_price));
			redirect('Stocker/inventory_add_item');

		}
		
		function inventory_display()
		{
			return $this->db->get('inventory');
		}
		
		function inventory_delete_item($product_id)
		{
			$this->session->set_flashdata('success', $this->Inventory_model->get_full_name_by_id($product_id));
			$this->db->delete('inventory', array('id' => $product_id));
			redirect('Stocker/inventory');
		}
		
		function inventory_restock_item($product_id, $restock_quantity)
		{
				$old_quantity = $this->db->get_where('inventory',array('id' => $product_id))->row()->product_quantity;
				$new_quantity = $old_quantity + $restock_quantity;
				$this->db->where('id', $product_id);
				$this->db->update('inventory', array('product_quantity' => $new_quantity));
				redirect('Stocker/inventory_profile?id=' . $product_id);
		}	
		
		function inventory_count_items()
		{
			return $this->db->count_all('inventory');
		}
		
		function get_full_name_by_id($product_id)
		{
			return $this->db->get_where('inventory', array('id' => $product_id))->row()->product_name;
		}
		
		function get_info_by_id($product_id)
		{
			return $this->db->get_where('inventory', array('id' => $product_id))->row();
		}
		
		function get_info_by_name($product_name)
		{
			return $this->db->get_where('inventory', array('product_name' => $product_name))->row();
		}
		
		function inventory_edit_item($product_id,$product_name,$product_quantity,$product_category,$product_price)
		{
			
			$data = array(
	               'product_name' => $product_name,
	               'product_category' => $product_category,
	               'product_price' => $product_price
	            );
			$this->db->where('id', $product_id);
			$this->db->update('inventory', $data); 
			$this->session->set_flashdata('success', $product_name);
			redirect('Stocker/inventory');

		}
		
		function inventory_profile($id)
		{
		return $this->db->get_where('inventory', array('id' => $id))->row();

		}
		
		function populate_list()
		{
			foreach($this->db->get('inventory')->result() as $row)
			{
				$sort_array[] = array($row->id, $row->product_name, $row->product_category, $row->product_quantity, $row->product_price);
			}
			
			return $sort_array;
		}
				
		function populate_autocomplete()
		{
			foreach($this->db->get('inventory')->result() as $row)
			{
				$typeahead[] = $row->product_name;
			}
			
			return $typeahead;
		}
		
		function random_row()
		{
			$this->db->order_by('id', 'RANDOM');
    		$this->db->limit(1);
    		$query = $this->db->get('inventory');
    		return $query->row();	
    	}
		
		function populate_slideshow()
		{
			for($counter = 1; $counter < 6 ; $counter++)
			{
				$query = $this->Inventory_model->random_row();
				$slide[$counter] = array('product_name' => $query->product_name, 'product_price' => $query->product_price);
			}
			
			return $slide;
		}
	}
	
/* End of file inventory_model.php */
/* Location: ../application/models */