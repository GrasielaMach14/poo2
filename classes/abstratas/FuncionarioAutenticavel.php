<?php 

	namespace classes\abstratas;

	use classes\abstratas\Funcionario;

	abstract class FuncionarioAutenticavel extends Funcionario{ //Uma classe pode herdar apenas uma 															classe por vez, e torno abstrata por 															causa da classe pai Funcionario
		public $senha;

		public function autenticar($senha){

			return $this->senha == $senha;

		}
	}
 ?>