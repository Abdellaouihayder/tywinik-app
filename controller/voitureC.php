<?php
	include_once '../config.php';
	include '../Model/voiture.php';

	class voitureC {

		public function listvoitureA(){
			$pdo = config::getConnexion();
			$sql="SELECT * FROM voiture";
			try{
				$liste = $pdo->query($sql); 
				return $liste;
			}
			catch(Exception $e){
				$e->getMessage();
			}
		}

		public function listvoitureH($idcfk)
		{$pdo= config::getConnexion();
        
			try 
				{  $query = $pdo->prepare( 'SELECT  COUNT(*) FROM voiture where idcfk = :idcfk');
					
					$query->execute(['idcfk'=>$idcfk]); 
					return $query->fetchColumn();
	
				}
		  catch(PDOException $e)
			   { die('erreur:' . $e->getMessage());}      
		}	
		public function deletevoitureA($matricule){
			$pdo = config::getConnexion();
			$sql="DELETE FROM voiture where matricule = :matricule";
			try {
				$query = $pdo->prepare($sql);
				$query->execute(['matricule'=> $matricule]);
				echo $query->rowCount();
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function addvoiture($voiture){
			$pdo = config::getConnexion();
			$sql="INSERT INTO voiture (matricule,idcfk,marque,couleur,type,photo) 
			VALUES (:matricule, :idcfk, :marque, :couleur, :type, :photo)"; 
			try{
				$query = $pdo->prepare($sql);
				$query->execute([
					'matricule' => $voiture->getMatricule(),
					'idcfk' => $voiture->getIdc(),
					'marque' => $voiture->getMarque(),
					'couleur' => $voiture->getCouleur(),
					'type' => $voiture->getType(),
					'photo' => $voiture->getPhoto()
				]);		
				echo $query->rowCount();	
			}
			catch (Exception $e){
				$e->getMessage();
			}			
		}
		
		public function updatevoitureA($voiture,$matricule) {
			try {
				$pdo = config::getConnexion();
				$sql = "UPDATE voiture SET 
				matricule = :matricule, idcfk = :idcfk, marque = :marque, couleur = :couleur, type = :type, photo = :photo 
				WHERE matricule =:matricule";
				$query = $pdo->prepare($sql);
				$query->execute([
					'matricule' => $voiture->getMatricule(),
					'idcfk' => $voiture->getIdc(),
					'marque' => $voiture->getMarque(),
					'couleur' => $voiture->getCouleur(),
					'type' => $voiture->getType(),
					'photo' => $voiture->getPhoto()
				]);
				echo $query->rowCount();
			}
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function listvoitureC($idcfk)
		{
			$pdo = config::getConnexion();
			$sql="SELECT * from voiture where idcfk=:idcfk";
			try{
				$query=$pdo->prepare($sql);
				$query->execute(['idcfk' => $idcfk]);
				$idcfk=$query->fetchAll();
				return $idcfk;
			}
			catch (Exception $e){
				$e->getMessage();
			}
		}

		public function listvoitureM($matricule)
       {$pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM voiture where matricule=:matricule');
                
                $query->execute(['matricule' => $matricule]); 
                return $query->fetchAll();

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
}
?>