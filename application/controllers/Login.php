<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->load->view('admin/login', "", FALSE);
		}

		public function register()
		{
			$this->load->view('admin/register', "", FALSE);
		}
	}


?>