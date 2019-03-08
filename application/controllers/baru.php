<?php 
/**
 * 
 */
defined('BASEPATH') OR exit ('No direct script access allowed');

class baru extends CI_Controller{
	
	
	function coba()
	{
		$this->load->view('konten');
	}

	function input(){
		$data['masukanData'] = "Ini data inputan. Insyaalloh";
		$this->load->view('v_data', $data);
	}
}
 ?>