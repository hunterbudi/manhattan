<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lartas extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('lartas');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('informasi/lartas',$data);
	}
}

/* End of file lartas.php */
/* Location: ./application/controllers/administrasi/lartas.php */