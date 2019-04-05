<?php 

	namespace classes\funcionarios;

	use classes\abstratas\Funcionario;

	class Designer extends Funcionario{ //Conceito de herança - as subclasses serão responsáveis por 									diferenciar os cargos dos funcionários do banco
		public function aumentoSalarial(){//Conceito de polimorfismo: mesmo método sobrescrito em 										outra classe, é possível por causa da herança
			return $this->salario *= 0.3;

		}

		public function getBonificacao(){//É obrigatório transcrever o método na classe filha por 									causa do método abstrato delcarado na classe pai 
			$this->salario * 0.1;	//conceito de polimorfismo, pois o diretor terá bonificação 							diferenciada
		}		
	}
 ?>