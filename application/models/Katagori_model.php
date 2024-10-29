<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Katagori_model extends CI_Model
{
    protected $_table = 'Katagori';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function Save() {
        $data = array('name' => htmlspecialchars($this->input->post('name'), true));
        return $this->db->insert($this->_table,$data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}