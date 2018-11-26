<?php

class Principal extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->library('session');
 		$this->load->model('logar_model');
	}

	public function index(){
		
		$this->logar_model->verifica_logado();
		redirect("principal/logar/");

	}

		public function logar($aviso = null){
			 $this->logar_model->verifica_logado();

		$dados = null;
	 	if($aviso == "incorreto"){ $dados['aviso'] = "Dados Incorretos"; $dados['tipo'] = "danger"; }
	 	if($aviso == "logout"){ $dados['aviso'] = "Logoff realizado com sucesso!"; $dados['tipo'] = "success"; }
	 	if($aviso == "cadastrou"){ $dados['aviso'] = "Cadastro realizado com sucesso!"; $dados['tipo'] = "success"; }
	 	if($aviso == "problema"){ $dados['aviso'] = "Houve um problema! Por favor contate o administrador!"; $dados['tipo'] = "danger"; }
	 $this->load->view('login/header');
	 $this->load->view('login/home', $dados);
	 $this->load->view('login/footer');
	}

		public function login() {
	 $user = $this->input->post('login');//Recebe do formulário
	 $pass = $this->input->post('senha');//Recebe do formulário
	 $this->logar_model->logar($user, $pass);//chama a funcao de logar
	}
	public function logout() {
	 $this->session->sess_destroy(); //destroi a sessão
	 redirect("principal/logar/logout"); //redireciona para logar com aviso
}

		 public function cadastro(){
	 $this->logar_model->verifica_logado();
	 if($this->input->post('cadastrar') != null){
	 $login = $this->input->post('login');
	 $senha = $this->input->post('senha');
	 $nome = $this->input->post('nome');
	 $sobre = $this->input->post('sobre');
	 $resultado = $this->logar_model->cadastrar($login, $senha, $nome,
	$sobre);

		 if($resultado){
	 redirect("principal/logar/cadastrou");
	 }else{
	 redirect("principal/logar/problema");
	 }
	 }
	 $this->load->view('login/header');
	 $this->load->view('login/cadastro');
	 $this->load->view('login/footer');
	}

}

?>