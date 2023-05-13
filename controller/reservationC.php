<?php
	include_once '../config.php';
	include '../Model/reservation.php';
	class reservationC {
		function recherche($idress)
		{
			$requete = "select * from reservation where idtrajet = $idress";//'%$idress%';
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
		function trireservation($type)
        {
            $requete = "select * from reservation ORDER BY $type";
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
		function afficherreservation(){
			$sql="SELECT * FROM reservation" ;
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		public function afficherres($idtrajet){
			$sql="SELECT * FROM reservation WHERE idtrajet LIKE $idtrajet ORDER BY nbrplace";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreservation($idres){
			$sql="DELETE FROM reservation WHERE idres=:idres";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idres', $idres);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterreservation($reservation){
			$sql="INSERT INTO reservation (idres, idtrajet, nbrplace, cinClient) 
			VALUES (:idres,:idtrajet, :nbrplace, :cinClient)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idres' => $reservation->getidres(),
					'idtrajet' => $reservation->getidtrajet(),
					'nbrplace' => $reservation->getnbrplace(),
					'cinClient' => $reservation->getcinClient()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreservation($idres){
			$sql="SELECT * from reservation where idres=$idres";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reservation=$query->fetch();
				return $reservation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreservation($nbp, $idres){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET  
						nbrplace= :nbrplace

						
					WHERE idres= :idres'
				);
				$query->execute([
					
					'nbrplace' =>$nbp,
					
					'idres' => $idres
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>