<?php
	class voiture {
		private $matricule;
		private $idcfk;
		private $marque;
		private $couleur;
		private $type;
		private $photo;
				
		public function __construct ($matricule, $idcfk, $marque, $couleur, $type, $photo)
    	{
			$this->matricule=$matricule;
			$this->idcfk= $idcfk;
			$this->marque=$marque;
			$this->couleur=$couleur;
			$this->type=$type;
			$this->photo=$photo;
		}   

		public function setMatricule ($mat) {
			$this->matricule = $mat;
		}
	
		public function getMatricule () {
			return $this->matricule;
		}

		public function setIdc ($idcfk) {
			$this->idcfk = $idcfk;
		}
	
		public function getIdc () {
			return $this->idcfk;
		}
	
		public function setMarque ($mrq) {
			$this->marque = $mrq;
		}
	
		public function getMarque () {
			return $this->marque;
		}
	
		public function setCouleur ($clr) {
			$this->couleur = $clr;
		}
	
		public function getCouleur () {
			return $this->couleur;
		}
	
		public function setType ($typ) {
			$this->type = $typ;
		}
	
		public function getType () {
			return $this->type;
		}

		public function setPhoto ($ph) {
			$this->photo = $ph;
		}
	
		public function getPhoto () {
			return $this->photo;
		}
	
	}
?>