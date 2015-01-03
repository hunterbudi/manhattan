<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kode_etik extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('tentang_model');
            $row = $this->tentang_model->get_by_kode('kode_etik');
            
            $isi = 'isi_'.$this->session->userdata('language');
            
            $data = array(
                'isi' => $row->$isi
            );
            
            $this->load->view('tentang/kode_etik',$data);
	}
}

/* End of file kode_etik.php */
/* Location: ./application/controllers/tentang/kode_etik.php */