<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kantor extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('tentang_model');
            $row = $this->tentang_model->get_by_kode('kantor');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('tentang/kantor',$data);
	}
}

/* End of file kantor.php */
/* Location: ./application/controllers/tentang/kantor.php */