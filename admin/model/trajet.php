<?php
	class trajet {
		private $idt = null;
		private $matricule;
		private $idc = null;
		private $pt_dep;
		private $pt_arr;
		private $date;
		private $heure;
		private $place;
		private $prix;
		private $description;
		
		
		public function __construct ($idt, $matricule, $idc, $pt_dep, $pt_arr, $date, $heure, $place, $prix, $description)
    	{
			$this->idt=$idt;
			$this->matricule=$matricule;
			$this->idc=$idc;
			$this->pt_dep=$pt_dep;
			$this->pt_arr=$pt_arr;
			$this->date=$date;
			$this->heure=$heure;
			$this->place=$place;
			$this->prix=$prix;
			$this->description=$description;
		}   

		public function setIdt ($idtfk) {
			$this->idtfk = $idtfk;
		}
	
		public function getIdt () {
			return $this->idtfk;
		}
		public function setIMat ($mat) {
			$this->matricule = $mat;
		}
	
		public function getMat () {
			return $this->matricule;
		}
	
		public function setIdc ($idc) {
			$this->idc = $idc;
		}
	
		public function getIdc () {
			return $this->idc;
		}
	
		public function setDep ($dep) {
			$this->pt_dep = $dep;
		}
	
		public function getDep () {
			return $this->pt_dep;
		}
	
		public function setArr ($arr) {
			$this->pt_arr = $arr;
		}
	
		public function getArr () {
			return $this->pt_arr;
		}
	
		public function setDate ($dte) {
			$this->date = $dte;
		}
	
		public function getDate () {
			return $this->date;
		}
	
		public function setHeure ($hr) {
			$this->heure =  $hr;
		}
	
		public function getHeure () {
			return $this->heure;
		}
	
		public function setPlace ($pl) {
			$this->place =  $pl;
		}
	
		public function getPlace () {
			return $this->place;
		}
	
		public function setPrix ($pr) {
			$this->prix =  $pr;
		}
	
		public function getPrix () {
			return $this->prix;
		}

		public function setDescription ($desc) {
			$this->description =  $desc;
		}
	
		public function getDescription () {
			return $this->description;
		}
	}
?>