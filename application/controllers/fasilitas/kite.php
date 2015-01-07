<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kite extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('fasilitas_model');
            $rows = $this->fasilitas_model->get_by_jenis('kite');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('fasilitas/kite',$data);
	}
}

/* End of file kite.php */
/* Location: ./application/controllers/fasilitas/kite.php */