<?php 
/**
 * 
 */
class goni extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_jemput');
	}

	public function index(){
		$this->load->view('v_home');
	}

	public function req_jemput(){
		$this->load->view('v_jemput');
	}

	public function prosesJemput(){
		$layanan = $this->input->post('layanan');
		$jenis 	 = $this->input->post('jenis');
		$berat	 = $this->input->post('berat');
		$foto 	 = $this->input->post('foto');

		$data = array(
				'layanan' => $layanan,
				'jenis'   => $jenis,
				'berat'	  => $berat,
				'foto' 	  => $foto
				);
		$this->m_jemput->input_data($data, 'history_jemput');
		redirect('goni','refresh');
	}

	function tampilRiwayat(){
		$data['history'] = $this->m_jemput->tampil_data()->result();
		$this->load->view('v_history',$data);
	}
	public function cari(){
		$data['history'] = $this->m_jemput->cariHistory();
		$this->load->view('v_history', $data);
	}

	public function edit($id){
		$where = array('id_history' => $id);
		$data['value'] = $this->m_jemput->edit_data($where,'history_jemput')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$layanan = $this->input->post('layanan');
		$jenis 	 = $this->input->post('jenis');
		$berat	 = $this->input->post('berat');
		$foto 	 = $this->input->post('foto');

		$data = array(
				'layanan' => $layanan,
				'jenis'   => $jenis,
				'berat'	  => $berat,
				'foto' 	  => $foto
				);
	 
		$where =  $id;
		
	 
		$this->m_jemput->update_data($where,$data,'history_jemput');
		redirect('goni/tampilRiwayat');
	}


}

 ?>