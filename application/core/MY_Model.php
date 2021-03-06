<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    public $table;
    public $id;
    public $order = "DESC";
    
    function __construct() {
        parent::__construct();
    }
    
//    tampilkan semua
    function get_all() {
        $this->db->order_by($this->id,  $this->order);
        return $this->db->get($this->table)->result();
    }

//    tampilkan by primary key
    function get_by_id($id) {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

//    insert data
    function insert($data) {
        $this->db->insert($this->table,$data);
    }
    
//    update data
    function update($id,$data) {
        $this->db->where($this->id,$id);
        $this->db->update($this->table,$data);
    }

//    delete data
    function delete($id) {
        $this->db->where($this->id,$id);
        $this->db->delete($this->table);
    }
    
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */