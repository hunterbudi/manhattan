<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ppid extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->view('error/under_construction');
	}
}

/* End of file Ppid.php */
/* Location: ./application/controllers/informasi/Ppid.php */