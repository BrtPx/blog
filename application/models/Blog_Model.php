<?php
class Blog_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_homepost()
    {
        $result = array(
            'bposts' => $this->grab_homepost()
        );
        return $result;
    }
    public function grab_homepost()
    {
        $this->db->select('id, title, subtitle, slug, img');
        return $this->db->get('ptz_blog')->result();
    }

    public function getpostDetails($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('ptz_blog');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else
            echo 'not found';
    }
    public function getDetails(string $id, string $field)
    {
        if ($id != null) {
            $this->db->where($field, $id);
            $result = $this->db->get('ptz_blog');
            if ($result->num_rows() > 0) {
                return $result->row();
            } else {
                return '';
            }
        }
    }
}
