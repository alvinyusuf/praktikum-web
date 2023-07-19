<?php

namespace App\Models;

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
        $this->load->view('mahasiswa/list', $data);
    }

    public function create()
    {
        $this->load->view('mahasiswa/create');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'ip' => $this->input->post('ip'),
            'id_prodi' => $this->input->post('id_prodi')
        );
        $this->Mahasiswa_model->insert($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_by_id($id);
        $this->load->view('mahasiswa/edit', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_mahasiswa');
        $data = array(
            'nama' => $this->input->post('nama'),
            'ip' => $this->input->post('ip'),
            'id_prodi' => $this->input->post('id_prodi')
        );
        $this->Mahasiswa_model->update($id, $data);
        redirect('mahasiswa');
    }

    public function delete($id)
    {
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }
}
