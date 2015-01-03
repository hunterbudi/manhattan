<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang_website extends MY_Controller {
    
        public function __construct()
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('website_model');
            $row = $this->website_model->get_by_kode('tentang_website');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('website/tentang_website',$data);
	}
}

/* End of file tentang_website.php */
/* Location: ./application/controllers/website/tentang_website.php */