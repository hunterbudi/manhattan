<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends MY_Model 
{
    
    public $table = "berita";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function total_record() 
    {
        $this->db->where('publish', '1');
        $this->db->from($this->table);
        return  $this->db->count_all_results();
    }
 
    function berita_limit($limit, $start=0) 
    {
        $this->db->where('publish', '1');
        $this->db->order_by($this->id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    function total_record_cari($keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);

        if ($this->session->userdata('language')==='en') 
        {
            $where = "publish = '1' AND (judul_en LIKE '%$keyword%' OR isi_en LIKE '%$keyword%')";
        }
        else
        {
            $where = "publish = '1' AND (judul_id LIKE '%$keyword%' OR isi_id LIKE '%$keyword%')";
        }

        $this->db->where($where);
        $this->db->from($this->table);
        return  $this->db->count_all_results();
    }
 
    function berita_limit_cari($limit, $start=0, $keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);
        
        if ($this->session->userdata('language')==='en') 
        {
            $where = "publish = '1' AND (judul_en LIKE '%$keyword%' OR isi_en LIKE '%$keyword%')";
        }
        else
        {
            $where = "publish = '1' AND (judul_id LIKE '%$keyword%' OR isi_id LIKE '%$keyword%')";
        }

        $this->db->where($where);
        $this->db->order_by($this->id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    function get_by_slug($slug) {
        $this->db->where('publish', '1');
        $this->db->where('slug', $slug);
        return $this->db->get($this->table)->row();
    }

    function berita_lain($slug) 
    {
        $this->db->where('publish', '1');
        $this->db->where('slug <>', $slug);
        $this->db->order_by($this->id, 'DESC');
        return $this->db->get($this->table,6)->result();
    }
}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */