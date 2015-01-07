<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ekspor extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('pabean_model');
            $rows = $this->pabean_model->get_by_jenis('ekspor');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('pabean/ekspor',$data);
	}
}

/* End of file ekspor.php */
/* Location: ./application/controllers/pabean/ekspor.php */