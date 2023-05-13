<?php
	include '../config.php';
	include_once '../Model/rescon.php';
	class resconC {
		function trirescon($type)
        {
            $requete = "select * from rescon ORDER BY $type";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
		function recherche($idress2)
		{
			$requete = "select * from rescon where cin  = $idress2";//'%$idresss2%';
			$config = config::getConnexion();
			try {
				$querry = $config->prepare($requete);
				$querry->execute();
				$result = $querry->fetchAll();
				return $result ;
			} catch (PDOException $th) {
				 $th->getMessage();
			}
		}
		function afficherrescon(){
			$sql="SELECT * FROM rescon";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerrescon($idrescon){
			$sql="DELETE FROM rescon WHERE idrescon=:idrescon";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idrescon', $idrescon);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterrescon($rescon){
			$sql="INSERT INTO rescon (idrescon, cin, servic, tarif, distance, prix, datere, cinClient) 
			VALUES (:idrescon,:cin,:servic, :tarif,:distance, :prix, :datere, :cinClient)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idrescon' => $rescon->getidrescon(),
					'cin' => $rescon->getcin(),
					'servic' => $rescon->getservic(),
					'tarif' => $rescon->gettarif(),
					'distance' => $rescon->getdistance(),
					'prix' => $rescon->getprix(),
					'datere' => $rescon->getdatere(),
                    'cinClient' => $rescon->getcinClient()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererrescon($idrescon){
			$sql="SELECT * from rescon where idrescon=$idrescon";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$rescon=$query->fetch();
				return $rescon;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
        public function modifierrescon($rescon,$idrescon) {
			try {
				$pdo = config::getConnexion();
				$sql = "UPDATE rescon SET 
				cin = :cin, servic = :servic, tarif = :tarif, distance = :distance, cinClient = :cinClient, datere = :datere, prix = :prix 
				WHERE idrescon =:idrescon";
				$query = $pdo->prepare($sql);
				$query->execute([
					'cin' => $rescon->getcin(),
					'servic' => $rescon->getservic(),
                    'distance' => $rescon->getdistance(),
					'tarif' => $rescon->gettarif(),
					'cinClient' => $rescon->getcinClient(),
					'datere' => $rescon->getdatere(),
					'prix' =>  $rescon->getPrix(),
					'idrescon' => $idrescon
				]);
				echo $query->rowCount();
			}
			catch (PDOException $e) {
				echo $e->getMessage();
                
			}
		}

	}
?>