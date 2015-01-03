<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat_penggunaan extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('website_model');
            $row = $this->website_model->get_by_kode('syarat_penggunaan');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('website/syarat_penggunaan',$data);
	}
}

/* End of file syarat_penggunaan.php */
/* Location: ./application/controllers/website/syarat_penggunaan.php */