<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq_model extends MY_Model 
{
    
    public $table = "faq";
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
 
    function faq_limit($limit, $start=0) 
    {
        $this->db->order_by('urut', 'asc');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    function total_record_cari($keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);

        if ($this->session->userdata('language')==='en') 
        {
            $where = "pertanyaan_en LIKE '%$keyword%' OR jawaban_en LIKE '%$keyword%'";
        }
        else
        {
            $where = "pertanyaan_id LIKE '%$keyword%' OR jawaban_id LIKE '%$keyword%'";
        }

        $this->db->where($where);
        $this->db->from($this->table);
        return  $this->db->count_all_results();
    }
 
    function faq_limit_cari($limit, $start=0, $keyword='') 
    {
        $keyword = $this->db->escape_like_str($keyword);
        
        if ($this->session->userdata('language')==='en') 
        {
            $where = "pertanyaan_en LIKE '%$keyword%' OR jawaban_en LIKE '%$keyword%'";
        }
        else
        {
            $where = "pertanyaan_id LIKE '%$keyword%' OR jawaban_id LIKE '%$keyword%'";
        }

        $this->db->where($where);
        $this->db->order_by('urut', 'asc');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
}

/* End of file Faq_model.php */
/* Location: ./application/models/Faq_model.php */