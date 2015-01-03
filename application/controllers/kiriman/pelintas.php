<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelintas extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('kiriman_model');
            $rows = $this->kiriman_model->get_by_jenis('pelintas');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('kiriman/pelintas',$data);
	}
}

/* End of file pelintas.php */
/* Location: ./application/controllers/kiriman/pelintas.php */