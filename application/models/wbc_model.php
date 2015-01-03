<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wbc_model extends MY_Model 
{
    
    public $table = "wbc";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function total_record() 
    {
        return $this->db->count_all($this->table);
    }
 
    function wbc_limit($limit, $start=0) 
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
}

/* End of file Wbc_model.php */
/* Location: ./application/models/Wbc_model.php */