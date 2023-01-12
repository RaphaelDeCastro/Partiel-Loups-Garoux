<?php

class Votes {

    /**
     * id_vote
     * @var int
     */
    private $id_vote;

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
     * Get id_vote
     *
     * @return  int
     */ 
    public function getId_vote()
    {
        return $this->id_vote;
    }

    /**
     * Set id_vote
     *
     * @param  int  $id_vote  id_vote
     *
     * @return  self
     */ 
    public function setId_vote(int $id_vote)
    {
        $this->id_vote = $id_vote;

        return $this;
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
     * un vote
     * @param integer
     * @return Votes
     */
    public static function findById($id): Votes
    {
        $req=MonPDO::getInstance()->prepare("Select * from votes where id_vote= :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'votes');
        $req->bindParam(":id", $id);
        $req->execute();
        $leResultat=$req->fetch();
        return $leResultat;
    }


}

?>