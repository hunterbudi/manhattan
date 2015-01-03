<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi extends CI_Controller {
    
        public function __construct() 
        {
            parent::__construct();
            $this->lang->load('common', $this->session->userdata('language'));
        }

	public function index()
	{
            $this->load->view('tentang/lokasi');
	}
        
        public function dirjen() {
            $this->load->view('dirjen');
        }
}

/* End of file lokasi.php */
/* Location: ./application/controllers/lokasi.php */