<?php 

	function load($namespace){

		$namespace = str_replace("\\", "/", $namespace); //O namespace é apenas o caminho onde nossa 								classe está, ela vai trocar as barras invertendo "\" em "/"
		$caminhoAbsoluto = __DIR__ . "/" .$namespace.".php"; //esta variável irá incluir o caminho 									onde o autoload está no diretório e concatenar com $namespace
		return include_once $caminhoAbsoluto;
	}

	spl_autoload_register(__NAMESPACE__ . "\load");//Toda a vez que instanciar um novo objeto este 												método será invocado e chamar a função load que é 												responsável por fazer o carregamento das classes
 ?>