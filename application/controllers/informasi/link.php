<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->view('informasi/link');
	}
        
}

/* End of file link.php */
/* Location: ./application/controllers/informasi/link.php */