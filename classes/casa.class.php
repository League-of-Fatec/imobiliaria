<?php 

	include_once('imovel.class.php');

	class Casa extends Imovel{

		public $quintal;

		public function __construct($quartos,$valor,$endereco,$quintal) {
			
			parent::__construct($quartos,$valor,$endereco);
			
			if (is_bool($quintal)) {
				$this -> quintal = $quintal;
			} /*else {
				echo 'Algo deu errado!<br>';
				echo "Esperava-se um valor booleano<br>";
			}*/

			
		}

		public function dadosCasa() {

			if ($this -> quintal === true){
				$bolean = "Sim";
			}else {
				$bolean = "Não";
			}

			echo ("A sua casa possui: <br>Quartos: {$this -> quartos}<br>Valor: {$this -> valor}<br>Endereco: {$this -> endereco}<br>Possui quintal: $bolean");
			echo '<hr>';
		}

	}

	$casa1 = new Casa(5,3000,5,true);

	$casa1 -> dadosCasa();
?>