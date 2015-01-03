<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ekspor extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('ekspor');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/ekspor',$data);
	}
}

/* End of file ekspor.php */
/* Location: ./application/controllers/administrasi/ekspor.php */