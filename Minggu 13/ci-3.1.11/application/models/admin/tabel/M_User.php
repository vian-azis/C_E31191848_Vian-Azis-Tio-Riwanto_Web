<?php
class M_User extends CI_Model
{
    // method getData() berfungsi mengembalikan nilai hasil query, untuk menampilkan seluruh
    // data pada tabel tm_user.
    public function getData()
    {
        $this->db->select('*'); // untuk menulis bagian SELECT dari query
        $this->db->from('tm_user'); // untuk menulis bagian FROM dari query
        $this->db->join('tm_grup', 'tm_user.id_grup = tm_grup.id_grup'); // untuk menulis bagian JOIN dari query

        // get() Menjalankan query select dan mengembalikan hasilnya. 
        // Dapat digunakan untuk mengambil semua record dari tabel
        $query = $this->db->get(); 
        return $query;
    }

    // method getJumlahData() berfungsi mengembalikan nilai hasil query, untuk menghitung
    // jumlah data yang ada pada tabel tm_user.
    public function getJumlahData()
    {
        $this->db->select('COUNT(id) AS jumlah'); // untuk menulis bagian SELECT dari query
        $this->db->from('tm_user'); // untuk menulis bagian FROM dari query

        // get() Menjalankan query select dan mengembalikan hasilnya. 
        // Dapat digunakan untuk mengambil semua record dari tabel
        $query = $this->db->get();
        return $query;
    }
    
    public function getDataById($id)
    {
        $data = array('id' => $id);
        return $this->db->get_where('tm_user', $data);
    }

    // method inputData() berfungsi melakukan input data menggunakan sql insert
    public function inputData($data)
    {
        // Menghasilkan insert string berdasarkan data yang Anda berikan, dan menjalankan kueri. 
        // bisa meneruskan array atau objek ke fungsi.
        return $this->db->insert('tm_user',$data);
    }

    public function hapusData($id){
        $this->db->where('id', $id);
        return $this->db->delete('tm_user');
    }

    public function ubahData($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('tm_user');
    }

    public function hapusDataApi($username){
        $this->db->where('username', $username);
        return $this->db->delete('tm_user');
    }

    public function ubahDataApi($username, $data)
    {
        $this->db->set($data);
        $this->db->where('username', $username);
        return $this->db->update('tm_user');
    }
}
