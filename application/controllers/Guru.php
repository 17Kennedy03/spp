<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataGuru()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_guru=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('guru','id_guru',$id_guru)->row();
			$data['detail']['id_guru']= $tampil->id_guru;
            $data['detail']['nama_guru']= $tampil->nama_guru;
			$data['content']='Guru/VFormUpdateGuru';
		}
		else
		{	
			$data['DataGuru']=$this->MSudi->GetData('guru');
			$data['content']='Guru/VGuru';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddGuru()
	{
		$data['content']='Guru/VFormAddGuru';
		$this->load->view('VBackend',$data);
	}
	public function AddDataGuru()
	{
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$file = $this->upload->data();
             $add['image'] = $file['file_name'];
			 $add['id_guru']=$this->input->post('id_guru');
         	 $add['nama_guru']= $this->input->post('nama_guru');
        	 $this->MSudi->AddData('guru',$add);
        	 redirect(site_url('Guru/DataGuru'));
	}
}


	public function UpdateDataGuru()
	{
		 	 $id_guru=$this->input->post('id_guru');
		 	 $update['nama_guru']= $this->input->post('nama_guru');
          	 $this->MSudi->UpdateData('guru','id_guru',$id_guru,$update);
		 redirect(site_url('Guru/DataGuru'));
	}


	public function DeleteDataGuru()
	{
		 $id_guru=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('guru','id_guru',$id_guru);
        	 redirect(site_url('Guru/DataGuru'));
	}

	function do_upload() 
	{
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->input->post('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }

}