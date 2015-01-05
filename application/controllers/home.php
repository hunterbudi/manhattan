<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

        public function __construct() 
        {
            parent::__construct();
        }

        public function index()
	{
            $this->load->model('home_model');
            $slide = $this->home_model->slide(4);
            $berita = $this->home_model->berita(4);
            $penumpang = $this->home_model->personal('penumpang_sarkut',5);
            $kiriman = $this->home_model->personal('kiriman_pos',5);
            $pelintas = $this->home_model->personal('pelintas_batas',5);
            $pengumuman = $this->home_model->pengumuman(4);
            $pengumuman_alert = $this->home_model->pengumuman_alert(4);
            $pengumuman_alert_count = $this->home_model->pengumuman_alert_count();
            $wbc = $this->home_model->wbc();

            $data = array(
                'slide' => $slide,
                'berita' => $berita,
                'penumpang' => $penumpang,
                'kiriman' => $kiriman,
                'pelintas' => $pelintas,
                'pengumuman' => $pengumuman,
                'pengumuman_alert' => $pengumuman_alert,
                'pengumuman_alert_count' => $pengumuman_alert_count,
                'wbc' => $wbc,
            );

            $this->load->view('home',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */