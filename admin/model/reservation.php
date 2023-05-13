<?php
	class reservation{
		private $idres=null;
		private $idtrajet=null;
		private $nbrplace=null;
		private $cinClient=null;
		
		private $password=null;
		function __construct($idres,$idtrajet, $nbrplace,$cinClient){
			$this->idres=$idres;
			$this->idtrajet=$idtrajet;
			$this->nbrplace=$nbrplace;
			$this->cinClient=$cinClient;
		}
		function getidres(){
			return $this->idres;
		}
		function getidtrajet(){
			return $this->idtrajet;
		}
		function getnbrplace(){
			return $this->nbrplace;
		}
		function getcinClient(){
			return $this->cinClient;
		}
		function setidtrajet(string $idtrajet){
			$this->idtrajet=$idtrajet;
		}
		
		function setnbrplace(string $nbrplace){
			$this->nbrplace=$nbrplace;
		}
		function setcinClient(string $cinClient){
			$this->cinClient=$cinClient;
		}
	}


?>