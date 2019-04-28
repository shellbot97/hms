<?php 

	/**
	 * 
	 */
	class Hotel extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			
			$data['main_content'] = 'admin/hotel/list';
			$this->load->view('includes/template', $data);
		}

		public function addHotel()
		{
			$data['main_content'] = 'admin/hotel/edit';
			$this->load->view('includes/template', $data);
		}

		public function updateHotel($hotel_id='')
		{
			$data['main_content'] = 'admin/hotel/edit';
			$data['hotel_id'] = $hotel_id;
			$this->load->view('includes/template', $data);
		}
	}




?>