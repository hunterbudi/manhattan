<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Impor extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('impor');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/impor',$data);
	}
}

/* End of file impor.php */
/* Location: ./application/controllers/administrasi/impor.php */