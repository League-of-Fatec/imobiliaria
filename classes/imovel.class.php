<?php 

	class Imovel {

		public $quartos;
		public $valor;
		public $endereco;

		public function __construct($quartos,$valor,$endereco) {
			
			
			if (is_numeric($quartos)) {
				$this -> quartos = $quartos;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor numérico<br>";
			}*/

			if (is_numeric($valor)) {
				$this -> valor = $valor;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor numérico<br>";
			}*/

			if (is_string($endereco)) {
				$this -> endereco = $endereco;
			} /*else {
				echo "A informação apresentada não corresponde a resposta adequada!<br>";
				echo "Esperava-se um valor do tipo 'texto'!<br>";
			}*/

		}

		public function dadosImovel(){
			echo ("O seu imovel possui: <br>Quartos: {$this -> quartos}<br>Valor: {$this -> valor}<br>Endereco: {$this -> endereco}");
			echo '<hr>';
		}

	}


	$imovel1 = new Imovel(3,32125,"Rua 1");

	$imovel1 -> dadosImovel();

?>