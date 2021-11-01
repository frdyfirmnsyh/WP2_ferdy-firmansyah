<?php
class review extends CI_Controller
{
 public function index()
 {
 $this->load->view('form');
 }
 public function cetak()
 {
 $data = [
 'nm' => $this->input->post('nm'),
 'no' => $this->input->post('no'),
 'mk' => $this->input->post('mk'),
 'uk' => $this->input->post('uk'),
 ];

 $this->load->view('data', $data);
 }
}