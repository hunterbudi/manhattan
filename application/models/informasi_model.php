<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informasi_model extends MY_Model 
{
    
    public $table = "administrasi";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function get_by_jenis($jenis) 
    {
        $this->db->where('jenis', $jenis);
        $this->db->order_by('urut', 'asc');
        return $this->db->get($this->table)->result();
    }

}

/* End of file Informasi_model.php */
/* Location: ./application/models/Informasi_model.php */