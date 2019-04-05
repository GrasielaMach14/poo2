<?php 
	ini_set("display_errors", 1);
	require_once "autoload.php";

	use classes\funcionarios\Diretor;// Para identificar o diretório da classe Diretor
	use classes\funcionarios\Designer;
	use classes\abstratas\Funcionario;
	use classes\sistemaInterno\GerenciadorBonificacao;

	$diretor = new Diretor("Fernando", "890.765.675-00", 2300);
	$diretor->senha = "123456";
	$designer = new Designer("Diego", "023.433.569-21", 1600);

	$gerenciador = new GerenciadorBonificacao();//o objeto é instanciado gerenciador de bonificações
	$gerenciador->registrar($diretor);//chama o objeto p registrar a bonificaçõ do funcionário
	$gerenciador->registrar($designer);
	
	var_dump($gerenciador->getTotalBonificacao());
	

	// var_dump($diretor->autenticar("1234"));

	// var_dump($diretor);
	// echo "<br/><br/>";	
	// var_dump($designer);
	// echo "<br/><br/>";	
	// echo $diretor->aumentoSalarial();
	// echo $diretor->getBonificacao();
	// echo "<br/><br/>";	
	// $designer->aumentoSalarial();
	// var_dump($designer);
 ?>