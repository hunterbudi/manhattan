<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penumpang_sarkut extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('personal_model');
            $rows = $this->personal_model->get_by_jenis('penumpang_sarkut');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('personal/penumpang_sarkut',$data);
	}
}

/* End of file penumpang_sarkut.php */
/* Location: ./application/controllers/kiriman/penumpang_sarkut.php */