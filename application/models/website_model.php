<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends MY_Model 
{
    
    public $table = "website";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_by_kode($kode) 
    {
        $this->db->where('kode', $kode);
        return $this->db->get($this->table)->row();
    }

}

/* End of file Website_model.php */
/* Location: ./application/models/Website_model.php */