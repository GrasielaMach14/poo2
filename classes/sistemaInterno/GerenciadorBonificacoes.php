<?php 

	namespace classes\sistemaInterno;

	use classes\abstratas\Funcionario;

	class GerenciadorBonificacao{

		private $totalBonificacao;

		public function registrar(Funcionario $funcionario){//esta função usará a variável 													funcionario para trazer o valor da sua bonificação, 										a função registrará a bonificação do funcionário
			$this->totalBonificacao += $funcionario->getBonificacao();

		}

		public function getTotalBonificacao(){

			return $this->totalBonificacao;
			
		}
	}
 ?>