<?php
class user 
{   ////client
    private ?int $cin=null;              ////// id client  9 nb
    private ?string $nom=null;
    private ?string $prenom=null;
    private ?int $phone=null;             ////// 8 nb
    private ?DateTime $dob=null;
    private ?int $sexe=null;
    private ?string $email=null;    /////%.%@esprit.tn
    private ?string $mdp=null;             ////// strong
   //// +++
    //private ?int $idp=null;          //////id passager
    //private ?int $idc=null;            //// id conducteur
    private ?int $nbpassager=null;
    private ?int $nbvoiture=null;
    private ?int $nbconduire=null;
    private ?int $pdp=null;
    private ?int $service1=null;
    private ?int $service2=null;
    private ?int $service3=null;
    private ?int $tarif=null;
    ////construct
    public function __construct 
        ($cin,$nom,$prenom,$phone,$dob,$sexe,
            $email,$mdp,$nbpassager,$nbvoiture,$nbconduire,$pdp,$service1,$service2,$service3,$tarif
        )
            {
                $this->cin=$cin;
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->phone=$phone;
                $this->dob=$dob;
                $this->sexe=$sexe;
                $this->email=$email;
                $this->mdp=$mdp;
                //$this->idp=$idp;
                //$this->idc=$idc;
                $this->nbpassager=$nbpassager;
                $this->nbvoiture=$nbvoiture;
                $this->nbconduire=$nbconduire;
                $this->pdp=$pdp;
                $this->service1=$service1;
                $this->service2=$service2;
                $this->service3=$service3;
                $this->tarif=$tarif;
            }


        /////setters X getters
        ///////////////CIN//////////
        public function setcin($ch)
        {
            $this->cin=$ch;
        }
        public function getcin()
        {
           return $this->cin;
        }
        /////////////////NOM/////////////
        public function setnom($ch)
        {
            $this->nom=$ch;
        }
        public function getnom()
        {
           return $this->nom;
        }
        //////////////////PRENOM///////////
        public function setprenom($ch)
        {
            $this->prenom=$ch;
        }
        public function getprenom()
        {
           return $this->prenom;
        }
        //////////////PHONE//////////////
        public function setphone($ch)
        {
            $this->phone=$ch;
        }
        public function getphone()
        {
           return $this->phone;
        }
        ////////////DOB////////////
        public function setdob($ch)
        {
            $this->dob=$ch;
        }
        public function getdob()
        {
           return $this->dob;
        }
        ////////////////SEXE////////////////
        public function setsexe($ch)
        {
            $this->sexe=$ch;
        }
        public function getsexe()
        {
           return $this->sexe;
        }
        //////////////EMAIL/////////////
        public function setemail($ch)
        {
            $this->email=$ch;
        }
        public function getemail()
        {
           return $this->email;
        }
        //////////////////MDP/////////////
        public function setmdp($ch)
        {
            $this->mdp=$ch;
        }
        public function getmdp()
        {
           return $this->mdp;
        }
        public function getpdp()
        {
           return $this->pdp;
        }
        ////////////////////IDP/////////////
       /* public function setidp($ch)
        {
            $this->idp=$ch;
        }
        public function getidp()
        {
           return $this->idp;
        }
        ///////////////////////IDC////////////
        public function setidc($ch)
        {
            $this->idc=$ch;
        }
        public function getidc()
        {
           return $this->idc;
        }*/
        /////////////////NBPASSAGER/////////////
        public function setnbpassager($ch)
        {
            $this->nbpassager=$ch;
        }
        public function getnbpassager()
        {
           return $this->nbpassager;
        }
        //////////////NBVOITURE////////////////
        public function setnbvoiture($ch)
        {
            $this->nbvoiture=$ch;
        }
        public function getnbvoiture()
        {
           return $this->nbvoiture;
        }
        //////////////NBCONDUIRE////////
        public function setnbconduire($ch)
        {
            $this->nbconduire=$ch;
        }
        public function getnbconduire()
        {
           return $this->nbconduire;
        }


    }  


?>