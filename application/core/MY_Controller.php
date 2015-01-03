<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    
    function __construct() 
    {
        parent::__construct();
        $default_languange = $this->session->userdata('language')?$this->session->userdata('language'):$this->session->set_userdata('language','id');
        $this->lang->load('common', $default_languange);
    }
    
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */