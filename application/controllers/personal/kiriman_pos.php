<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kiriman_pos extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('personal_model');
            $rows = $this->personal_model->get_by_jenis('kiriman_pos');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('personal/kiriman_pos',$data);
	}
}

/* End of file kiriman_pos.php */
/* Location: ./application/controllers/kiriman/kiriman_pos.php */