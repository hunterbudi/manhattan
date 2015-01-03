<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aeo extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('aeo');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/aeo',$data);
	}
}

/* End of file aeo.php */
/* Location: ./application/controllers/administrasi/aeo.php */