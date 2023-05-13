<?php
	include_once '../config.php';
	include '../Model/trajet.php';

	class trajetC {

		public function listTrajetA(){
			$pdo = config::getConnexion();
			$sql="SELECT * FROM trajet ORDER BY `date` ASC";
			try{
				$liste = $pdo->query($sql); 
				return $liste;
			}
			catch(Exception $e){
				$e->getMessage();
			}
		}
		
		public function deleteTrajetA($idt){
			$pdo = config::getConnexion();
			$sql="DELETE FROM trajet where idt = :idt";
			try {
				$query = $pdo->prepare($sql);
				$query->execute(['idt'=> $idt]);
				echo $query->rowCount();
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function addTrajet($tra){
			$pdo = config::getConnexion();
			$sql="INSERT INTO trajet (matricule,idc,pt_dep,pt_arr,`date`,heure,place,prix,`description`) 
			VALUES (:matricule, :idc, :pt_dep, :pt_arr, :dat, :heure, :place, :prix, :descrip)"; 
			try{
				$query = $pdo->prepare($sql);
				$query->execute([
					'matricule' => $tra->getMat(),
					'idc' => $tra->getIdc(),
					'pt_dep' => $tra->getDep(),
					'pt_arr' => $tra->getArr(),
					'dat' => $tra->getDate(),
					'heure' => $tra->getHeure(),
					'place' => $tra->getPlace(),
					'prix' =>  $tra->getPrix(),
					'descrip' => $tra->getDescription()
				]);		
				echo $query->rowCount();	
			}
			catch (Exception $e){
				$e->getMessage();
			}			
		}
		
		public function updateTrajetA($tra,$idt) {
			try {
				$pdo = config::getConnexion();
				$sql = "UPDATE trajet SET 
				matricule = :matricule, pt_dep = :pt_dep, pt_arr = :pt_arr, `date` = :dat, heure = :heure, place = :place, prix = :prix, `description` = :descrip 
				WHERE idt =:idt";
				$query = $pdo->prepare($sql);
				$query->execute([
					'matricule' => $tra->getMat(),
					'pt_dep' => $tra->getDep(),
					'pt_arr' => $tra->getArr(),
					'dat' => $tra->getDate(),
					'heure' => $tra->getHeure(),
					'place' => $tra->getPlace(),
					'prix' =>  $tra->getPrix(),
					'descrip' => $tra->getDescription(),
					'idt' => $idt
				]);
				echo $query->rowCount();
			}
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function listTrajetC($idc){
			$pdo = config::getConnexion();
			$sql="SELECT * from trajet where idc=$idc";
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				$idc=$query->fetchAll();
				return $idc;
			}
			catch (Exception $e){
				$e->getMessage();
			}
	}
	
}
?>

