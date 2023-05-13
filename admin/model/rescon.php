<?php
	class rescon{
		private $idrescon=null;
		private $cin=null;
		private $servic=null;
		private $tarif=null;
		private $distance=null;
		private $prix=null;
		private $datere;
        private $cinClient=null;
		function __construct($idrescon, $cin, $servic, $tarif, $distance, $prix, $datere,$cinClient){
			$this->idrescon=$idrescon;
			$this->cin=$cin;
			$this->servic=$servic;
			$this->tarif=$tarif;
			$this->distance=$distance;
			$this->prix=$prix;
			$this->datere=$datere;
            $this->cinClient=$cinClient;
		}
		function getidrescon(){
			return $this->idrescon;
		}
		function getcin(){
			return $this->cin;
		}
		function getservic(){
			return $this->servic;
		}
		function gettarif(){
			return $this->tarif;
		}
		
		function getdistance(){
			return $this->distance;
		}
		function getprix(){
			return $this->prix;
		}
		function getdatere(){
			return $this->datere;
		}
        function getcinClient(){
			return $this->cinClient;
		}
		function setcin(string $cin){
			$this->cin=$cin;
		}
		function setservic(string $servic){
			$this->servic=$servic;
		}
		function settarif(string $tarif){
			$this->tarif=$tarif;
		}
		function setdistance(string $distance){
			$this->distance=$distance;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}
		function setdatere(string $datere){
			$this->datere=$datere;
		}
        function setcinClient(string $cinClient){
			$this->cinClient=$cinClient;
		}
		
	}


?>