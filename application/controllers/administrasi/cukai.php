<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cukai extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('cukai');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/cukai',$data);
	}
}

/* End of file cukai.php */
/* Location: ./application/controllers/administrasi/cukai.php */