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
    public function listtri1()
    { 
        $sql='SELECT * FROM user order by nbpassager DESC';
        $base= config::getConnexion();
        try 
            {  
                $liste = $base->query($sql); 
                return $liste;
            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }

    public function listtri2()
    { 
        $sql='SELECT * FROM user order by nbconduire DESC';
        $base= config::getConnexion();
        try 
            {  
                $liste = $base->query($sql); 
                return $liste;
            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listtri3()
    { 
        $sql='SELECT * FROM user order by nbvoiture DESC';
        $base= config::getConnexion();
        try 
            {  
                $liste = $base->query($sql); 
                return $liste;
            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    public function listtype($sexe)  
       {$pdo= config::getConnexion();
        
        try 
            {  $query = $pdo->prepare( 'SELECT * FROM user where sexe=:sexe');
                
                $query->execute(['sexe'=>$sexe]); 
                return $query->fetchAll();

            }
      catch(PDOException $e)
           { die('erreur:' . $e->getMessage());}      
    }
    // public function listtri()  
    // { 
    //     $pdo= config::getConnexion();
        
    //     try 
    //         {  $query = $pdo->prepare( 'SELECT * FROM user order by nbpassager');
                
    //             $query->execute(); 
    //             return $query->fetchAll();

    //         }
    //   catch(PDOException $e)
    //        { die('erreur:' . $e->getMessage());}      
    // }
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
// public function  updateclient($cin)
//     {
//    $pdo=config::getConnexion();
//    try 
//    { $query = $pdo->prepare("UPDATE user SET phone=:phone,
//                                     email=:email, mdp=:mdp where cin=:cin
//                                 ");
//      $query->execute(['cin'=>$cin,
//        'phone'=>$_POST['phone'],
//        'email'=>$_POST['email'],
//        'mdp'=>$_POST['mdp'],
//    ]);  
//    }
//    catch(PDOException $e)
//    { die('erreur:' . $e->getMessage());}  } 


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
    public function updateadmin($cin,$nbpassager,$nbvoiture,$nbconduire)
     {
        $pdo=config::getConnexion();
        try 
        { $query = $pdo->prepare("UPDATE user SET nbpassager=:nbpassager,nbvoiture=:nbvoiture,nbconduire=:nbconduire WHERE cin=:cin");
          $query->execute
          ([
            
            'cin' =>$cin,
            'nbpassager' =>$nbpassager,
            'nbvoiture' =>$nbvoiture,
            'nbconduire' =>$nbconduire,
           
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
}



?>