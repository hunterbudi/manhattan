<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends MY_Controller {
    
        public function english()
        {
            $this->session->set_userdata('language', 'en');
            redirect($_SERVER['HTTP_REFERER']); 
        }

        public function bahasa() 
        {
            $this->session->set_userdata('language','id');
            redirect($_SERVER['HTTP_REFERER']); 
        }
}

/* End of file language.php */
/* Location: ./application/controllers/language.php */