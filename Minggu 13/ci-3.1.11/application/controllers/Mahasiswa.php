<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/tabel/M_User');
        $this->load->model('admin/tabel/M_Grup');
    }

    public function index()
    {
        // $data['user'] = $this->M_User->getData()->result();  
        // $data['grup'] = $this->M_Grup->getData()->result(); 
    }

    public function Api()
    {
        $data = $this->M_User->getData();
        echo json_encode($data->result_array());
    }

    public function ApiInsert()
    {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);
        $nama = $this->input->post('nama');
        $id_grup = $this->input->post('grup');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'id_grup' => $id_grup
        );

        $result = $this->M_User->inputData($data);

        if ($result == TRUE) {
            $array = array(
                'success' => true,
                'message' => 'Data "'.$username.'" Berhasil Ditambahkan'
            );
        } else {
            $array = array(
                'error' => true,
                'message' => 'Error '.$result
            );
        }

        echo json_encode($array);
    }

    public function ApiDelete()
    {
        $username = $this->input->post('username');

        $result = $this->M_User->hapusDataApi($username);

        if ($result == TRUE) {
            $array = array(
                'success' => true,
                'message' => 'Data "'.$username.'" Berhasil Dihapus'
            );
        } else {
            $array = array(
                'error' => true,
                'message' => 'Error '.$result
            );
        }

        echo json_encode($array);
    }
    
    public function ApiUpdate()
    {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT);
        $nama = $this->input->post('nama');

        if($this->input->post('grup') == 'admin'){
            $id_grup = 1;
        } elseif ($this->input->post('grup') == 'user') {
            $id_grup = 2;
        } else {
            $id_grup = $this->input->post('grup');
        }
        
        $data = array(
            'password' => $password,
            'nama' => $nama,
            'id_grup' => $id_grup
        );

        $result = $this->M_User->ubahDataApi($username, $data);

        if ($result == TRUE) {
            $array = array(
                'success' => true,
                'message' => 'Data "'.$username.'" Berhasil Diperbaharui'
            );
        } else {
            $array = array(
                'error' => true,
                'message' => 'Error '.$result
            );
        }

        echo json_encode($array);
    }
}
