<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kurs extends CI_Controller {
    
        public function __construct() 
        {
            parent::__construct();
            $this->lang->load('common', $this->session->userdata('language'));
        }

	public function index()
	{
            $this->load->view('informasi/kurs');
	}
        
}

/* End of file kurs.php */
/* Location: ./application/controllers/informasi/kurs.php */