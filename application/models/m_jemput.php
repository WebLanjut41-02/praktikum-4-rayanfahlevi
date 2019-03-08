<?php 
class m_jemput extends CI_Model{
	
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function tampil_data(){
		return $this->db->get('history_jemput');
	}
	public function cariHistory()
	{
		$cari = $this->input->POST('cari', TRUE);
		$data = $this->db->query("SELECT * from history_jemput where layanan like '%$cari%' ");
		return $data->result();
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);

		}

	function update_data($where,$data,$table){
		$this->db->where('id_history',$where);
		$this->db->update($table,$data);
	}	

}

 ?>