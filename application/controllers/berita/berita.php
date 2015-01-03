<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $this->load->model('berita_model');
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
                    $config["base_url"] = base_url() . "berita/berita.html?p=true&keyword=".$keyword;
                    $config["total_rows"] = $this->berita_model->total_record_cari($keyword);

                    $this->pagination->initialize($config);
                    
                    $data = array(
                        'berita' => $this->berita_model->berita_limit_cari($config["per_page"], $start, $keyword),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );

                    $this->load->view('berita/berita',$data);
                } 
                else 
                {
                    $config["base_url"] = base_url() . "berita/berita.html?p=true";
                    $config["total_rows"] = $this->berita_model->total_record();

                    $this->pagination->initialize($config);

                    $data = array(
                        'berita' => $this->berita_model->berita_limit($config["per_page"], $start),
                        'links' => $this->pagination->create_links(),
                        'keyword' => $keyword,
                        'total_rows' => $config["total_rows"]
                    );
                    
                    $this->load->view('berita/berita',$data);
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
                $this->load->model('berita_model');
                $row = $this->berita_model->get_by_slug($slug);
                $berita_lain = $this->berita_model->berita_lain($slug);

                if ($row && $berita_lain) 
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
                        'berita_lain' => $berita_lain
                    );

                    $this->load->view('berita/berita_baca',$data);
                }
                else 
                {
                    redirect('error/not_found');
                }
            }
        }
}

/* End of file berita.php */
/* Location: ./application/controllers/berita/berita.php */