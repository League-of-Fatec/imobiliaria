<?php 

	include_once('imovel.class.php');

	class Apartamento extends Imovel{

		public $condominio;

		public function __construct($quartos,$valor,$endereco,$condominio){

			parent::__construct($quartos,$valor,$endereco);

			if (is_numeric($condominio)) {
				$this -> condominio = $condominio;
			} /*else {
				echo 'Algo deu errado!<br>';
			}*/
		}

		public function dadosApartamento(){
			echo ("O seu apartamento possui: <br>Quartos: {$this -> quartos}<br>Valor: {$this -> valor} reais<br>Endereco: {$this -> endereco}<br>O valor do condominio deste apartamento é de: {$this -> condominio}");
			echo '<hr>';
		}

	}

	$apart1 = new Apartamento(5,1042323,"Rua 3",5000);

	$apart1 -> dadosApartamento();
?>