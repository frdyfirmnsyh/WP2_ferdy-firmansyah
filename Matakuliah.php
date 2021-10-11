<?php
class Matakuliah extends CI_controller
{

	public function index()
 
     {

     	$this ->load->view('view-from-matakuliah');

     }

        public function cetak()
     {
          
          $this->form_validation->set_rules('kode', 'kode matakuliah' ,
          	'required|min_length[3]',
          	[
          		'required' => 'Kode matakuliah harus di isi',
          		'min_length' => 'kode terlalu pendek'
          	]);

          $this ->form_validation->set_rules('nama', 'Nama matakuliah',
          'required|min_length[3]',[
          	'required' => 'Nama matakuliah Harus di isi',
          	'min_length' => 'Nama terlalu pendek'
          ]);

          if ($this->form_validation->run() != true) {
          	$this->load->view('view-form-matakuliah');
          } else }

           $data = [
               'Kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this ->load->view('view-data-mata-kuliah', $data);
     }
}