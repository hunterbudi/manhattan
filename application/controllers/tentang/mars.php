<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mars extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $src = 'asset/video/mars_'.$this->session->userdata('language').'.mp4';
            
            $data = array(
                'src' => $src
            );
            
            $this->load->view('tentang/mars',$data);
	}
}

/* End of file mars.php */
/* Location: ./application/controllers/tentang/mars.php */