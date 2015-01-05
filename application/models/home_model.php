<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends MY_Model 
{
    public $table = "home";
    public $id = "id";
    
    function __construct() 
    {
        parent::__construct();
    }
    
    function slide($limit=5) 
    {
        $this->db->where('publish', '1');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        return $this->db->get('slide')->result();
    }

    function berita($limit=4) 
    {
        $this->db->where('publish', '1');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        return $this->db->get('berita')->result();
    }

    function personal($jenis,$limit=5)
    {
        $this->db->where('jenis', $jenis);
        $this->db->order_by('urut', 'asc');
        $this->db->limit($limit);
        return $this->db->get('kiriman')->result();
    }
    
    function pengumuman($limit=4) 
    {
        $this->db->where('publish', '1');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        return $this->db->get('pengumuman')->result();
    }
    
    function pengumuman_alert($limit=5) 
    {
        $this->db->where('publish', '1');
        $this->db->where('alert', '1');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        return $this->db->get('pengumuman')->result();
    }
    
    function pengumuman_alert_count() 
    {
        $this->db->where('publish', '1');
        $this->db->where('alert', '1');
        $this->db->from('pengumuman');
        return $this->db->count_all_results();
    }
    
    function wbc()
    {
        $this->db->order_by('edisi', 'desc');
        $this->db->limit(1);
        return $this->db->get('wbc')->row();
    }
    
}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */