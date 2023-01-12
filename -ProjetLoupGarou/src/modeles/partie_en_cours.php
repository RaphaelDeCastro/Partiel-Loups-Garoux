<?php

use Doctrine\ORM\Mapping\Id;

class Partie_en_cours {

    /**
     * id_carte
     * @var int
     */
    private $id_carte;

    /**
     * id_partie
     * @var int
     */
    private $id_partie;

    /**
     * id_joueur
     * @var int
     */
    private $id_joueur;

    /**
     * est_capitaine
     * @var bool
     */
    private $est_capitaine;

    /**
     * en_vie
     * @var bool
     */
    private $en_vie;



    /**
     * Get id_carte
     *
     * @return  int
     */ 
    public function getId_carte() : Votes
    {
        return Votes::findById($this->id_carte);
    }

    /**
     * Get id_partie
     *
     * @return  int
     */ 
    public function getId_partie() : Parties
    {
        return Parties::findById($this->id_partie);
    }

    /**
     * Get id_joueur
     *
     * @return  int
     */ 
    public function getId_joueur()
    {
        return Joueurs::findById($this->id_joueur);
    }

    /**
     * Get est_capitaine
     *
     * @return  bool
     */ 
    public function getEst_capitaine()
    {
        return $this->est_capitaine;
    }

    /**
     * Set est_capitaine
     *
     * @param  bool  $est_capitaine  est_capitaine
     *
     * @return  self
     */ 
    public function setEst_capitaine(bool $est_capitaine)
    {
        $this->est_capitaine = $est_capitaine;

        return $this;
    }

    /**
     * Get en_vie
     *
     * @return  bool
     */ 
    public function getEn_vie()
    {
        return $this->en_vie;
    }

    /**
     * Set en_vie
     *
     * @param  bool  $en_vie  en_vie
     *
     * @return  self
     */ 
    public function setEn_vie(bool $en_vie)
    {
        $this->en_vie = $en_vie;

        return $this;
    }

    public function estVillageois(int $getId_joueur, int $getId_carte){
        if ($getId_carte == 1){
            return $getId_joueur;
        }
    }

    public function estLoup(int $getId_joueur, int $getId_carte){
        if ($getId_carte == 1){
            return $getId_joueur;
        }
    }

    public function estVoyante(int $getId_joueur, int $getId_carte){
        if ($getId_carte == 1){
            return $getId_joueur;
        }
    }

    public function estCupidon(int $getId_joueur, int $getId_carte){
        if ($getId_carte == 1){
            return $getId_joueur;
        }
    }

    public function estSorciere(int $getId_joueur, int $getId_carte){
        if ($getId_carte == 1){
            return $getId_joueur;
        }
    }

}



?>