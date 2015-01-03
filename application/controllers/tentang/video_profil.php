<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_profil extends MY_Controller {
    
        public function __construct() 
        {
            parent::__construct();
        }

	public function index()
	{
            $src = 'asset/video/profil_'.$this->session->userdata('language').'.mp4';
            
            $data = array(
                'src' => $src
            );
            
            $this->load->view('tentang/video_profil',$data);
	}
}

/* End of file video_profil.php */
/* Location: ./application/controllers/tentang/video_profil.php */