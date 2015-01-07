<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cukai extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('cukai_model');
            $rows = $this->cukai_model->get_by_jenis('cukai');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('cukai/cukai',$data);
	}
}

/* End of file cukai.php */
/* Location: ./application/controllers/cukai/cukai.php */