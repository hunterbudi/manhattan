<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fasilitas extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('fasilitas');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/fasilitas',$data);
	}
}

/* End of file fasilitas.php */
/* Location: ./application/controllers/administrasi/fasilitas.php */