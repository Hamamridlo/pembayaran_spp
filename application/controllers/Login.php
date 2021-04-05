<?php
class Login extends CI_Controller{
public function __construct(){
parent::__construct();
$this->load->model('M_Login');
}
public function index(){
$this->load->view('login');
}


public function otentikasi(){
	$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
	$password = md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
	$status = htmlspecialchars($this->input->post('status',TRUE),ENT_QUOTES);
	if ($status == "1"){
		$cek_login = $this->M_Login->cek_login_petugas($username, $password);
		if ($cek_login->num_rows() > 0){
			$this->session->set_userdata('login', TRUE);
			$data = $cek_login->row_array();
			$this->session->set_userdata('id',$data['id_petugas']);
			$this->session->set_userdata('username',$data['username']);
			$this->session->set_userdata('nama',$data['nama_petugas']);
			$this->session->set_userdata('level',$data['level']);
			redirect('dashboard');
		}else{
			redirect('login');
		}
	}elseif ($status == "2") {
		$cek_login = $this->M_Login->cek_login_siswa($username, $password);
		if ($cek_login->num_rows() > 0){
			$this->session->set_userdata('login', TRUE);
			$data = $cek_login->row_array();
			$this->session->set_userdata('id',$data['nisn']);
			$this->session->set_userdata('username',$data['nis']);
			$this->session->set_userdata('nama',$data['nama']);
			$this->session->set_userdata('level','2');
			redirect('dashboard');
		}else{
			redirect('login');
		}
	}


}
	
	
    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['subtitle'] = "Tambah Data Petugas";
        $this->template->load_admin('index','login_tambah',$data);
    }


    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Login->simpan();
        redirect('login');
    }


public function logout(){
	$this->session->sess_destroy();
	redirect('login');
}
}