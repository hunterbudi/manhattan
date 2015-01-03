<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tentang_model extends MY_Model 
{
    
    public $table = "tentang";
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

/* End of file Tentang_model.php */
/* Location: ./application/models/Tentang_model.php */