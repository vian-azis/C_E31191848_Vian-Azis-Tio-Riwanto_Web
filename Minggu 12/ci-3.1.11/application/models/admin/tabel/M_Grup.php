<?php
class M_Grup extends CI_Model
{
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('tm_grup');
        $query = $this->db->get();
        return $query;
    }

    public function getJumlahData()
    {
        $this->db->select('COUNT(id_grup) AS jumlah');
        $this->db->from('tm_grup');
        $query = $this->db->get();
        return $query;
    }

    public function inputData($data)
    {
        $this->db->insert('tm_grup',$data);
    }
}
