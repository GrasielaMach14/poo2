<?php 

	namespace classes\abstratas;

	abstract class Funcionario{// Funcionario será responsável por guardar esses atributos em comum

		public $nome;

		public $cpf;

		protected $salario;//O protected permite que a classe e seus herideiros possam fazer 							alterações
		public function __construct($cpf, $salario){

			$this->cpf = $cpf;
			$this->salario = $salario;

		}

		abstract public function getBonificacao();//Como este método não pode instanciar deve 													simplifica-lo dessa forma, apenas a assinatura
		public function aumentoSalarial(){

			return $this->salario *= 1.5;
		}

	}
 ?>