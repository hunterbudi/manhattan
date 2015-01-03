<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fta extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('administrasi_model');
            $rows = $this->administrasi_model->get_by_jenis('fta');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('administrasi/fta',$data);
	}
}

/* End of file fta.php */
/* Location: ./application/controllers/administrasi/fta.php */