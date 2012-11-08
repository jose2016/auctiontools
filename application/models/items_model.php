<?php
class Items_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->helper('url');
        $this->load->database();
    }

    public function get_items($id = FALSE)
    {
      if($id == FALSE){
          $query = $this->db->get('item');
          return $query->result_array();
      }

        $query = $this->db->get_where('item', array('id' => $id));
        return $query->row_array();

    }

}
