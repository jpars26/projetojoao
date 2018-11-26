<?php

class Conf extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function set_alertas($alerta){
        if(!isset($this->session->userdata['alertas'])){
            $this->session->set_userdata('alertas', null);
        }
        $alertas = $this->session->userdata['alertas'];
        if($alertas == null){
            $alertas = array();
        }
        array_push($alertas, $alerta);
        $this->session->set_userdata('alertas', $alertas);
    }

    function get_alertas(){
        if(isset($this->session->userdata['alertas'])){
            $alertas = $this->session->userdata['alertas'];
            $this->session->set_userdata('alertas', null);
            $result = "";
            foreach ($alertas as $n) {
                $tipo = explode("|", $n)[0];
                $msg = explode("|", $n)[1];
                $result .= "<div class=\"alert alert-". $tipo ." alert-dismissible\" role=\"alert\" style=\"margin-top: 15px;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <strong>Aviso!</strong> ". $msg ."
                </div>";
            }
            return $result;
        }
    }
}
