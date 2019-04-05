<?php 

	namespace classes\funcionarios;
 
	use classes\abstratas\FuncionarioAutenticavel;
	//Diretor poderá ter acesso com senha ao se autenticar
	class Diretor extends FuncionarioAutenticavel{//Conceito de herança múltipla, pois 																FuncionarioAutenticavel herda de Funcionario
		public function getBonificacao(){//É obrigatório transcrever o método na classe filha por 									causa do método abstrato delcarado na classe pai 
			$this->salario * 0.5;	//conceito de polimorfismo, pois o diretor terá bonificação 							diferenciada
		}
		
	}

 ?>