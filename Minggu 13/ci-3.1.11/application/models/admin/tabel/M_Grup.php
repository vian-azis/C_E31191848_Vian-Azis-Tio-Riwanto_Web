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

    public function getDataById($id)
    {
        $data = array('id_grup' => $id);
        return $this->db->get_where('tm_grup', $data);
    }

    public function hapusData($id){
        $this->db->where('id_grup', $id);
        return $this->db->delete('tm_grup');
    }

    public function ubahData($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id_grup', $id);
        return $this->db->update('tm_grup');
    }
}
