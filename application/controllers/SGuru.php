<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SGuru extends CI_Controller {
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
			$data['content']='LevelSiswa/v_guru';
		}


		$this->load->view('VBackend',$data);
	}
}