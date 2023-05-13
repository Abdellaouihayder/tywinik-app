<?php
  include_once '../config.php';
  include '../model/user.php';
class userc
{
    public function listusers ()   //// yelzem liste conducteur w liste passager zeda 
    { 
        $sql='SELECT * FROM user';
        $base= config::getConnexion();
        try 
            {  
                $liste = $base->query($sql);  // chyetsabou les donnees mtaa bd fel variable liste
                return $liste;
            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listservice1()  
       {$pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where service1 IS NOT NULL');
                
                $query->execute(); 
                return $query->fetchAll();

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listservice2()  
       {$pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where service2 IS NOT NULL');
                
                $query->execute(); 
                return $query->fetchAll();

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listservice3()  
       {$pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where service3 IS NOT NULL');
                
                $query->execute(); 
                return $query->fetchAll();

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listuserbycin ($cin)   //// yelzem liste conducteur w liste passager zeda 
    { 
        $sql=' SELECT * FROM user WHERE cin =:cin ';
        $base= config::getConnexion();
        try 
            {  
                $liste = $base->query($sql);  // chyetsabou les donnees mtaa bd fel variable liste
                return $liste;
            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function rechercheuserparcin ($cin)
    { 
        $pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where cin=:cin');
                
                $liste = $query->execute(['cin'=>$cin]);  // chyetsabou les donnees mtaa bd fel variable liste
                return $liste;

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    ////////////// recherche par id passager /////////////
   /* public function rechercheuserparidp ($idp)
    { 
        $pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where idp= :idp');
                
                $liste = $query->execute(['idp'=>$idp]);  // chyetsabou les donnees mtaa bd fel variable liste
                return $liste;

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    ////////////RECHERCHE PAR ID CONDUCTEUR////////
    public function rechercheuserparidc ($idc)
    { 
        $pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where idc= :idc');
                
                $liste = $query->execute(['idc'=>$idc]);  // chyetsabou les donnees mtaa bd fel variable liste
                return $liste;

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }*/
    public function adduser ($user)  //////////// add client baed bech ykoun p/c twali update
    {
        $pdo=config::getConnexion();
        $x=random_int(1,10);
        try 
        { $query = $pdo->prepare("INSERT INTO user  
            VALUES (:cin,:nom,:prenom,:phone,:dob,:sexe,:email,:mdp,NULL,NULL,NULL,:pdp,NULL,NULL,NULL,NULL)");
          $query->execute
          ([
            
            'cin' => $user->getcin(),
            'nom' => $user->getnom(),
            'prenom' => $user->getprenom(),
            'phone' => $user->getphone(),
            'dob' => $user->getdob()->format('Y/m/d'),
            'sexe' => $user->getsexe(), 
            'email' => $user->getemail(),
            'mdp' => $user->getmdp(),   
            'pdp' =>$user->getpdp(),    
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}     
    }
////////////////////////////UPDATEEEEEE LEL PASSAGER WEL CONDUCTEUR LATER PLS////////
/*public function  updateclient($cin)
    {
   $pdo=config::getConnexion();
   try 
   { $query = $pdo->prepare("UPDATE user SET phone=:phone,
                                    email=:email, mdp=:mdp where cin=:cin
                                ");
     $query->execute(['cin'=>$cin,
       'phone'=>$_POST['phone'],
       'email'=>$_POST['email'],
       'mdp'=>$_POST['mdp'],
   ]);  
   }
   catch(PDOException $e)
   { die('erreur:' . $e->getMessage());}  } */


    ////delete b cin
    public function  deleteuserbycin($cin)
    {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare('DELETE FROM user where cin= :cin');
            $query->execute(['cin'=>$cin]);

        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}
    }
    /////////// delete be id conducteur
    public function  deleteuserbyidc($idc)
    {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare('DELETE FROM user where idc= :idc');
            $query->execute(['idc'=>$idc]);

        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}
    }   
    //////////delete bel id passager 
    public function  deleteuserbyidp($idp)
    {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare('DELETE FROM user where idp= :idp');
            $query->execute(['idp'=>$idp]);

        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}
    }
    public function updateuser($cin,$phone,$email,$mdp)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET phone=:phone,email=:email,mdp=:mdp WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'phone' =>$phone,
            'email' =>$email,
            'mdp' =>$mdp,       
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     //updateclient($_SESSION["cin"],$_POST['phone'],$_POST['email']); 
     public function updateclient($cin,$phone,$email)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET phone=:phone,email=:email WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'phone' =>$phone,
            'email' =>$email,
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updatemdpclient($cin,$mdp)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET mdp=:mdp WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'mdp' =>$mdp,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updatepdpclient($cin,$pdp)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET pdp=:pdp WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'pdp' =>$pdp,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updatenbpassager($cin,$nbpassager)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET nbpassager=:nbpassager WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'nbpassager' =>$nbpassager,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updatenbvoiture($cin,$nbvoiture)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET nbvoiture=:nbvoiture WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'nbvoiture' =>$nbvoiture,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updatenbconduire($cin,$nbconduire)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET nbconduire=:nbconduire WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'nbconduire' =>$nbconduire,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
     public function updateservice($cin,$s1,$s2,$s3,$tarif)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET service1=:service1,service2=:service2,service3=:service3,tarif=:tarif WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'service1' =>$s1,
            'service2' =>$s2,
            'service3' =>$s3,
            'tarif' =>$tarif,
        
           
        ]);  
        }
        catch(PDOException $e)
        { die('erreur:' . $e->getMessage());}      
     }
}



?>