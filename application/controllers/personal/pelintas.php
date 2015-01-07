<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelintas extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('personal_model');
            $rows = $this->personal_model->get_by_jenis('pelintas');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('personal/pelintas',$data);
	}
}

/* End of file pelintas.php */
/* Location: ./application/controllers/kiriman/pelintas.php */