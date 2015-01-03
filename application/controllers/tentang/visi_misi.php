<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visi_misi extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('tentang_model');
            $row = $this->tentang_model->get_by_kode('visi_misi');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('tentang/visi_misi',$data);
	}
}

/* End of file visi_misi.php */
/* Location: ./application/controllers/tentang/visi_misi.php */