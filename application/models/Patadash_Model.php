<?php

class Patadash_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function viewallposts()
    {
        $this->db->order_by('id', 'DESC');
        $result = $this->db->get('ptz_blog')->result_array();
        return $result;
    }

    public function createblog($blogdata)
    {
        return $this->db->insert('ptz_blog', $blogdata);
    }

    public function fill_editform($bid)
    {
        $this->db->where('id', $bid);
        $query = $this->db->get('ptz_blog')->result_array();
        return $query;
    }
    //with image update
    public function editfile(array $data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('ptz_blog', $data);
    }
    //no image update
    public function editcontent($db, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('ptz_blog', $db);
    }
}
