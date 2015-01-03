<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_model extends MY_Model 
{
    
    public $table = "download";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function total_record() 
    {
        $this->db->from($this->table);
        return  $this->db->count_all_results();
    }
 
    function download_limit($limit, $start=0) 
    {
        $this->db->order_by($this->id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    function total_record_cari($keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);

        if ($this->session->userdata('language')==='en') 
        {
            $where = "judul_en LIKE '%$keyword%' OR isi_en LIKE '%$keyword%'";
        }
        else
        {
            $where = "judul_id LIKE '%$keyword%' OR isi_id LIKE '%$keyword%'";
        }

        $this->db->where($where);
        $this->db->from($this->table);
        return  $this->db->count_all_results();
    }
 
    function download_limit_cari($limit, $start=0, $keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);
        
        if ($this->session->userdata('language')==='en') 
        {
            $where = "judul_en LIKE '%$keyword%' OR isi_en LIKE '%$keyword%'";
        }
        else
        {
            $where = "judul_id LIKE '%$keyword%' OR isi_id LIKE '%$keyword%'";
        }

        $this->db->where($where);
        $this->db->order_by($this->id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
}

/* End of file Download_model.php */
/* Location: ./application/models/Download_model.php */