<?php
class M_Login extends CI_Model{
	function cek_login_petugas($username, $password){
		$query = $this->db->query("select*from petugas where username = '$username' and password = '$password'");
		return $query;
	}
	function cek_login_siswa($username, $password){
		$query = $this->db->query("select*from siswa where nis = '$username' and nama = '$password'");
		return $query;
	}

   function simpan(){
        $data = array('username' => $this->input->post('username'),
                'password' => md5 ($this->input->post('password')),
                'nama_petugas' => $this->input->post('nama_petugas'));
        $insert = $this->db->insert('petugas',$data);
    }

}