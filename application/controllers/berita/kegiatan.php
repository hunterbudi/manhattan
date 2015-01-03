<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('kegiatan_model');
            $this->load->library("pagination");

            $p = $this->input->get('p') ? $this->input->get('p') : 'true';
            $start = $this->input->get('start') ? intval($this->input->get('start')) : 0;
            $keyword = $this->input->get_post('keyword') ? htmlentities($this->input->get_post('keyword')) : '';
            
            $config["per_page"] = 2;
            $config["uri_segment"] = 3;
            
            if ($p==='true') 
            {
                if ($this->input->get_post('keyword')) 
                {
                    $config["base_url"] = base_url() . "berita/kegiatan.html?p=true&keyword=".$keyword;
                    $config["total_rows"] = $this->kegiatan_model->total_record_cari($keyword);

                    $this->pagination->initialize($config);
                    
                    $data = array(
                        'kegiatan' => $this->kegiatan_model->kegiatan_limit_cari($config["per_page"], $start, $keyword),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );

                    $this->load->view('berita/kegiatan',$data);
                } 
                else 
                {
                    $config["base_url"] = base_url() . "berita/kegiatan.html?p=true";
                    $config["total_rows"] = $this->kegiatan_model->total_record();

                    $this->pagination->initialize($config);

                    $data = array(
                        'kegiatan' => $this->kegiatan_model->kegiatan_limit($config["per_page"], $start),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );

                    $this->load->view('berita/kegiatan',$data);
                }
            }
            else
            {
                redirect('error/not_found');
            }
	}
        
        public function baca($slug=NULL) 
        {
            if ($slug==NULL) 
            {
                redirect('error/not_found');
            } 
            else 
            {
                $this->load->model('kegiatan_model');
                $row = $this->kegiatan_model->get_by_slug($slug);
                $kegiatan_lain = $this->kegiatan_model->kegiatan_lain($slug);

                if ($row && $kegiatan_lain) 
                {
                    $judul = 'judul_'.$this->session->userdata('language');
                    $isi = 'isi_'.$this->session->userdata('language');
                    if ($this->session->userdata('language')==='en') 
                    {
                        $tgl_upload = tgl_en($row->tgl_upload);
                    }
                    else 
                    {
                        $tgl_upload = tgl_id($row->tgl_upload);
                    }
 
                    $data = array(
                        'judul' => $row->$judul,
                        'tgl' => $tgl_upload,
                        'isi' => $row->$isi,
                        'slug' => $row->slug,
                        'kegiatan_lain' => $kegiatan_lain
                    );

                    $this->load->view('berita/kegiatan_baca',$data);
                }
                else 
                {
                    redirect('error/not_found');
                }
            }
        }
}

/* End of file kegiatan.php */
/* Location: ./application/controllers/berita/kegiatan.php */