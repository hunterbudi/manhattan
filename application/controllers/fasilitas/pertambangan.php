<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pertambangan extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('fasilitas_model');
            $rows = $this->fasilitas_model->get_by_jenis('pertambangan');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('fasilitas/pertambangan',$data);
	}
}

/* End of file pertambangan.php */
/* Location: ./application/controllers/fasilitas/pertambangan.php */