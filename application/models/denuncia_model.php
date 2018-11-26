<?php

	class denuncia_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	function retorna_todas_denuncias(){
	 $this->db->select('*');
	 $this->db->from('denuncia');
	 return $this->db->get()->result();
	}
	function ver($id){
	 $this->db->select('*');
	 $this->db->from('denuncia');
	 $this->db->where('id_den', $id);
	 return $this->db->get()->result()[0];
	}

	function inserir($ocorrencia, $endereco){
	 	$data = array(
	 		'ocorrencia_den' => $ocorrencia,
	 		'end_den' => $endereco
	 	);
	 $this->db->insert('denuncia', $data);
	 return $this->db->affected_rows();
	}

		function alterar($id, $ocorrencia, $endereco){
	 $data = array(
	 'ocorrencia_den' => $ocorrencia,
	 'end_den' => $endereco
	 );
	 $this->db->where('id_den', $id);
	 $this->db->update('denuncia', $data);
	 return $this->db->affected_rows();
	}

		function apagar($id){
	 $this->db->where('id_den', $id);
	 $this->db->delete('denuncia');
	 return $this->db->affected_rows();
	}

}
?>