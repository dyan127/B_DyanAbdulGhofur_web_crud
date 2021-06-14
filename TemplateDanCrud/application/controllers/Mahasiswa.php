<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Mahasiswa extends CI_Controller{//membuat controller mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Mahasiswa_model');//load file bernama mahasiswa_model dari model
	}
	
	public function index(){
			$data['tm_user'] = $this->Mahasiswa_model->getAll()->result();
			$this->template->views('crud/home_mahasiswa',$data);
	}

	public function tambah() {//membuat function tambah
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input() {//membuat fucntion input untuk menginput data ke db
		//membuat beberapa variable untuk input
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(//membuat array untuk menampung data yang telah diinput
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data, 'tm_user');//mengakses mahasiswa_model dan data yang ada pada table user
		redirect('Mahasiswa/index');//setelah data berhasil disimpan, maka kembalikan ke index
	}
	
		public function edit($id){
		$where = array ('id'=> $id);
		$data['tm_user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa',$data);
	}
	public function update(){
		$id 			= $this ->input->post('id');
		$username 		= $this ->input->post('username');
		$password 		= $this ->input->post('password');
		$nama 			= $this ->input->post ('nama');
		$grup 			= $this ->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama'	   => $nama,
			'grup'	   => $grup
		);

		$where = array(
			'id' => $id
		);

		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		redirect('Mahasiswa/index');
	}
	
	public function hapus ($id){
		$where = array ('id' => $id);
		$this->Mahasiswa_model->hapus_data($where,'tm_user');
		redirect ('Mahasiswa/index');
	}

	public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}

	public function ApiInsert(){
		$username		= $this ->input->post('username');
		$password 		= $this ->input->post('password');
		$nama 			= $this ->input->post ('nama');
		$grup 			= $this ->input->post('grup');
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama'	   => $nama,
			'grup'	   => $grup
		);
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		echo json_encode($array);
	}

	public function ApiDelete(){
		if ($this->input->post('username')){
			$where = array('username'=> $this->input->post('username'));
			if ($this->Mahasiswa_model->hapus_data($where, 'tm_user')){
				$array = array('succes' => true);
			}else{
				$array=array('error'=>true);
			}

			echo json_encode($array);

		}
	}
	
}

?>