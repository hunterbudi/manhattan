<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tpb extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('fasilitas_model');
            $rows = $this->fasilitas_model->get_by_jenis('tpb');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('fasilitas/tpb',$data);
	}
}

/* End of file tpb.php */
/* Location: ./application/controllers/fasilitas/tpb.php */