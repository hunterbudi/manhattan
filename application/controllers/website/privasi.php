<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privasi extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('website_model');
            $row = $this->website_model->get_by_kode('privasi');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('website/privasi',$data);
	}
}

/* End of file privasi.php */
/* Location: ./application/controllers/website/privasi.php */