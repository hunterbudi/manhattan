<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('statistik_model');
            $rows = $this->statistik_model->get_by_jenis('statistik');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('error/under_construction',$data);
	}
}

/* End of file statistik.php */
/* Location: ./application/controllers/statistik/statistik.php */