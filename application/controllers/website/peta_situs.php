<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peta_situs extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->view('website/peta_situs');
	}
}

/* End of file tentang_website.php */
/* Location: ./application/controllers/website/peta_situs.php */