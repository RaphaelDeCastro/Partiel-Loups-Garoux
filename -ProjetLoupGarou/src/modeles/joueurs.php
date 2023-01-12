<?php

class Joueurs {

    /**
     * id
     * @var integer
     */
    private $id_joueurs;

    /**
     * nom
     * @var string
     */
    private $nom;

    /**
     * Get id
     *
     * @return  integer
     */ 
    public function getId_joueurs()
    {
        return $this->id_joueurs;
    }

    /**
     * Set id
     *
     * @param  integer  $id_joueurs  id
     *
     * @return  self
     */ 
    public function setId_joueurs($id_joueurs)
    {
        $this->id_joueurs = $id_joueurs;

        return $this;
    }

    /**
     * Set nom
     *
     * @param  string  $nom  nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * tous les joueurs
     * @return Joueurs[]
     */
    public static function findAll(?string $nom="") :array{
        $tReq=("Select j.nom as 'joueursnom' from joueurs j");
        if ($nom !="") {
            $tReq .=" and j.nom like '%" . $nom . "%'";
        }
        $tReq.=" order by j.id_joueurs";
        $req=MonPDO::getInstance()->prepare($tReq);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $Result=$req->fetchAll();
        return $Result;
    }

    /**
     * Ajout joueur
     * @param Joueurs
     * @return integer
     */
    public static function add(Joueurs $joueur) :int{
        $req=MonPDO::getInstance()->prepare("insert into joueurs(nom) values(:nom)");
        $nom=$joueur->getNom();
        $req->bindParam(":nom", $nom);
        $nb=$req->execute();
        return $nb;
    }
}

?>