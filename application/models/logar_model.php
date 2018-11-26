<?php

class logar_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    ////////////////////////////////////////////////////
    ////////////////// SISTEMA LOGIN ///////////////////
    ////////////////////////////////////////////////////

    function logar($usuario, $senha){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('login', $usuario);
        $this->db->where('senha', $senha);
        $resultado = $this->db->get()->result();
        if($resultado){
            $this->session->set_userdata('id', $resultado[0]->id);
            $this->session->set_userdata('login', $resultado[0]->login);
            $this->session->set_userdata('sobre', $resultado[0]->sobre);
            $this->session->set_userdata('logado', '1');
            redirect("painel");
        }else{
            $this->session->set_userdata('logado', '0');
            redirect("principal/logar/incorreto");
        }
    }

    function protege(){
        if(isset($this->session->userdata['logado'])){
            if($this->session->userdata['logado'] == 1){
                //echo "ta";
            }else{
                redirect("principal/logar/");
            }
        }else{
            redirect("principal/logar/");
        }
    }

    function verifica_logado(){
        if(isset($this->session->userdata['logado'])){
            if($this->session->userdata['logado'] == 1){
                redirect("painel/");
            }
        }
    }






    ////////////////////////////////////////////////////////
    ////////////////// SISTEMA DE CADASTRO /////////////////
    ////////////////////////////////////////////////////////
    function cadastrar($login, $senha, $nome, $sobre){
        if(($login != null) && ($senha != null) && ($nome != null) && ($sobre != null)){
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('login', $login);
            $resultado = (bool)($this->db->get()->result());
            if(!$resultado){
                $data = array(
                'login' => $login,
                'senha' => $senha,
                'nome' => $nome,
                'sobre' => $sobre,
                'cidade' => 0,
                );
                $this->db->insert('usuario', $data);

                return $this->db->affected_rows();
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }




}
?>
