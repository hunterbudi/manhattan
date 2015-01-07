<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fta extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('pabean_model');
            $rows = $this->pabean_model->get_by_jenis('fta');
            
            $data = array(
                'rows' => $rows
            );
            
            $this->load->view('pabean/fta',$data);
	}
}

/* End of file fta.php */
/* Location: ./application/controllers/pabean/fta.php */