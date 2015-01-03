<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('pengumuman_model');
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
                    $config["base_url"] = base_url() . "berita/pengumuman.html?p=true&keyword=".$keyword;
                    $config["total_rows"] = $this->pengumuman_model->total_record_cari($keyword);

                    $this->pagination->initialize($config);
                    
                    $data = array(
                        'pengumuman' => $this->pengumuman_model->pengumuman_limit_cari($config["per_page"], $start, $keyword),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );

                    $this->load->view('berita/pengumuman',$data);
                } 
                else 
                {
                    $config["base_url"] = base_url() . "berita/pengumuman.html?p=true";
                    $config["total_rows"] = $this->pengumuman_model->total_record();

                    $this->pagination->initialize($config);

                    $data = array(
                        'pengumuman' => $this->pengumuman_model->pengumuman_limit($config["per_page"], $start),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );

                    $this->load->view('berita/pengumuman',$data);
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
                $this->load->model('pengumuman_model');
                $row = $this->pengumuman_model->get_by_slug($slug);
                $pengumuman_lain = $this->pengumuman_model->pengumuman_lain($slug);

                if ($row && $pengumuman_lain) 
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
                        'pengumuman_lain' => $pengumuman_lain
                    );

                    $this->load->view('berita/pengumuman_baca',$data);
                }
                else 
                {
                    redirect('error/not_found');
                }
            }
        }
}

/* End of file pengumuman.php */
/* Location: ./application/controllers/berita/pengumuman.php */