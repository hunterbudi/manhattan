<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Not_found extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->view('error/not_found');
	}
}

/* End of file 404.php */
/* Location: ./application/controllers/error/404.php */