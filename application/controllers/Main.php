<?php
	class main extends CI_Controller{
		/*main constructor*/
		public function __construct(){
			parent::__construct();
		}
		/*first page to load*/
		public function index(){
			$this->load->view('headers/c_header');
			$this->load->view('contents/c_content');
			$this->load->view('footers/c_footer');
			$this->load->view('modal/yoursource_product');
		}
	} 
 ?>