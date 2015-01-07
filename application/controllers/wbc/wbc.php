<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wbc extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('wbc_model');
            $this->load->helper('download');
            $this->load->library("pagination");

            $p = $this->input->get('p') ? $this->input->get('p') : 'true';
            $start = $this->input->get('start') ? intval($this->input->get('start')) : 0;
            
            $config["per_page"] = 8;
            $config["uri_segment"] = 3;
            
            if ($p==='true') 
            {
                $config["base_url"] = base_url() . "wbc/wbc.html?p=true";
                $config["total_rows"] = $this->wbc_model->total_record();

                $this->pagination->initialize($config);

                $data = array(
                    'wbc' => $this->wbc_model->wbc_limit($config["per_page"], $start),
                    'links' => $this->pagination->create_links(),
                    'total_rows' => $config["total_rows"]
                );

                $this->load->view('wbc/wbc',$data);
            }
            else
            {
                redirect('error/not_found');
            }
	}
}

/* End of file wbc.php */
/* Location: ./application/controllers/wbc/wbc.php */