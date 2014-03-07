<?php 

	class Stocker extends CI_Controller 
	{

		function __construct() 
		{
			
			parent::__construct();
			if (!$this->User_model->logged_in()) 
			{
				$this->session->set_flashdata('current_url', uri_string());
				redirect('Login');	
			}
		}

		///////////////////////////////
		//Masthead					//
		/////////////////////////////
		
		function index()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			/*$this->load->view('assets/sidebar');*/
			$this->load->view('stocker/masthead');
			$this->load->view('assets/footer');
		}
		
		///////////////////////////////
		//About					    //
		/////////////////////////////
		
		function about()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('stocker/about/about');
			$this->load->view('assets/footer');
		}
		
		function changelog()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('stocker/about/changelog');
			$this->load->view('assets/footer');
		}
		
		function checklist()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('stocker/about/checklist');
			$this->load->view('assets/footer');
		}
		
		///////////////////////////////
		//Inventory					//
		/////////////////////////////
		
		function inventory()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/inventory', array('inventory' => $this->Inventory_model->inventory_display()));
			$this->load->view('assets/footer');
		}
		
		function inventory_add_item()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/inventory/inventory_add_item');
			$this->load->view('assets/footer');
		}
		
		function add_inventory_item()
		{
			$this->Inventory_model->inventory_add_item($this->input->post('product_name'),$this->input->post('product_quantity'),$this->input->post('product_category'),$this->input->post('product_price'));
		}
		
		function inventory_restock_item()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/inventory/inventory_restock_item', array('inventory' => $this->Inventory_model->inventory_profile($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
		
		function restock_inventory_item()
		{
			$this->Inventory_model->inventory_restock_item($this->input->post("product_id"), $this->input->post("restock_quantity"));
		}
		
		function inventory_profile()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/inventory/inventory_profile', array('inventory' => $this->Inventory_model->inventory_profile($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
				
		function delete_inventory_item()
		{
			$product_id= $this->input->get('id');
			$this->Inventory_model->inventory_delete_item($product_id);
		}
		
		function inventory_edit_item()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/inventory/inventory_edit_item', array('inventory' => $this->Inventory_model->get_info_by_id($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
		
		function update_inventory_info()
		{
			$this->Inventory_model->inventory_edit_item($this->input->post('product_id'), $this->input->post('product_name'), $this->input->post('product_quantity'), $this->input->post('product_category'),$this->input->post('product_price'));
		}
		
		///////////////////////////////
		//Loyalty    				//
		/////////////////////////////
		
		function loyalty()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/loyalty', array('loyalty' => $this->Loyalty_model->loyalty_display()));
			$this->load->view('assets/footer');
		}
		
		function loyalty_add_member()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/loyalty/loyalty_add_member');
			$this->load->view('assets/footer');
		}
		
		function add_loyalty_member()
		{			
			if($this->input->post('loyalty_age') > 17)
				{
					$this->Loyalty_model->add_loyalty_member($this->input->post('loyalty_first_name'), $this->input->post('loyalty_second_name'), $this->input->post('loyalty_age'), 0, date("Y-m-d"));
				}
			else
				{
					$this->session->set_flashdata('error', 'You must be 18 years or older');
					redirect('Stocker/loyalty_add_member');
				}
					
		}
		
		function delete_loyalty_member()
		{
			$this->Loyalty_model->delete_loyalty_member($this->input->get('id'));
		}
		
		function loyalty_edit_member()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/loyalty/loyalty_edit_member', array('loyalty' => $this->Loyalty_model->get_info_by_id($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
		
		
		
		function loyalty_profile()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/loyalty/loyalty_profile', array('loyalty' => $this->Loyalty_model->loyalty_profile($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
		
		///////////////////////////////
		//Transactions    			//
		/////////////////////////////
		
		function activity()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/activity', array('user_info' => $this->User_model->get_user_info()));
			$this->load->view('assets/footer');
		}
		
		function transactions()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions', array('inventory' => $this->Inventory_model->inventory_display(), 'contents' => $this->Inventory_model->populate_slideshow()));
			$this->load->view('assets/footer');
		}
		
		function transactions_search()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/search', array('inventory' => $this->Inventory_model->get_info_by_name($this->input->post('product_name'))));
			$this->load->view('assets/footer');
		}
		
		function checkout()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/checkout');
			$this->load->view('assets/footer');
		}
		
		function checkout_loyalty()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/checkout_loyalty', array('loyalty' => $this->Loyalty_model->loyalty_display()));
			$this->load->view('assets/footer');
		}
		
		function checkout_loyalty_final()
		{
			$id = $this->input->get('id');
			$this->Loyalty_model->increment_loyalty($id);
			redirect('Stocker/final_checkout');
		}
		
		function final_checkout()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/final_checkout');
			$this->load->view('assets/footer');
			
			$this->cart->destroy();
		}
		
		///////////////////////////////
		//Cart		    			//
		/////////////////////////////
		
		function add_to_cart()
		{	
			$data = array(
						'id' => $this->input->post('product_id'),
						'qty' => $this->input->post('qty'),
						'price' => $this->input->post('product_price'),
						'name' => $this->input->post('product_name'),
						'options' => array()
						);
			$this->cart->insert($data);
			$this->session->set_flashdata('success', $this->input->post('product_name') . ' added to cart.');
			redirect('Stocker/transactions');
			
		}
		
		function view_cart()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/transactions/view_cart');
			$this->load->view('assets/footer');
		}
		
		function update_cart()
		{
			for ($i = 1; $i <= $this->cart->total_items(); $i++)
			{
				$item = $this->input->post($i);
				$data = array(
					'rowid' => $item['rowid'],
					'qty' => $item['qty']
					);
					
					$this->cart->update($data);
			}
			redirect('Stocker/view_cart');
		}
		
		function clear_cart()
		{
			$this->cart->destroy();
			$this->session->set_flashdata('error', 'Cart Cleared');
			redirect('Stocker/transactions');
		}
		
		///////////////////////////////
		//Sorting		 			//
		/////////////////////////////
		
		function sorting()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/sorting/sorting', array('inventory' => $this->Inventory_model->inventory_display()));
			$this->load->view('assets/footer');
		}
		
		function numeric_max()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/sorting/numeric_max');
			$this->load->view('assets/footer');
		}
		
		function numeric_min()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/sorting/numeric_min');
			$this->load->view('assets/footer');
		}
		
		function quantity_max()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/sorting/quantity_max');
			$this->load->view('assets/footer');
		}
		
		function quantity_min()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('stocker/sorting/quantity_min');
			$this->load->view('assets/footer');
		}
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */