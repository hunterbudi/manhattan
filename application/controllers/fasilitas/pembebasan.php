<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembebasan extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('fasilitas_model');
            $rows = $this->fasilitas_model->get_by_jenis('pembebasan');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('fasilitas/pembebasan',$data);
	}
}

/* End of file pembebasan.php */
/* Location: ./application/controllers/fasilitas/pembebasan.php */