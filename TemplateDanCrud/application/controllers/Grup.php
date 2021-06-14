<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Grup extends CI_Controller{//membuat controller mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Grup_model');//load file bernama mahasiswa_model dari model
	}
	
	public function index(){
			$data['tm_grup'] = $this->Grup_model->getAll()->result();
			$this->template->views('crud/grup_home',$data);
	}
	
	public function tambah() {//membuat function tambah
		$this->template->views('crud/grup_tambah');
	}

	public function input() {//membuat fucntion input untuk menginput data ke db
		//membuat beberapa variable untuk input
		$grup = $this->input->post('grup');

		$data = array(//membuat array untuk menampung data yang telah diinput
			'grup' => $grup
		);
		$this->Grup_model->input_data($data, 'grup');//mengakses mahasiswa_model dan data yang ada pada table user
		redirect('Grup/index');//setelah data berhasil disimpan, maka kembalikan ke index
	}

	public function edit($id_grup) {
		$where = array('id_grup' => $id_grup);
		$data['tm_grup'] = $this->Grup_model->edit($where, 'grup')->result();
		$this->template->views('crud/grup_edit', $data);
	}

	public function update(){
		$grup = $this->input->post('grup');

		$data = array(//membuat array untuk menampung data yang telah diinput
			
			'grup' => $grup
		);
		$where=array(
			'id_grup'=>$id_grup
		);

		$this->Grup_model->update($where, $data, 'grup');//mengakses mahasiswa_model dan data yang ada pada table user
		redirect('Grup');
	}

	public function hapus($id_grup){
		$where=array('id_grup'=>$id_grup);
		$this->Grup_model->hapus_data($where, 'grup');
		redirect('Grup/index');
	}
}