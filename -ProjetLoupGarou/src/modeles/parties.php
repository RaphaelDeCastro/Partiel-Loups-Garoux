<?php

    class Parties {

        /**
         * id_partie
         * @var int
         */
        private $id_partie;

        /**
         * nombre_joueur
         * @var int
         */
        private $nombre_joueur;

        /**
         * Get id_partie
         *
         * @return  int
         */ 
        public function getId_partie()
        {
                return $this->id_partie;
        }

        /**
         * Set id_partie
         *
         * @param  int  $id_partie  id_partie
         *
         * @return  self
         */ 
        public function setId_partie(int $id_partie)
        {
                $this->id_partie = $id_partie;

                return $this;
        }

        /**
         * Get nombre_joueur
         *
         * @return  int
         */ 
        public function getNombre_joueur()
        {
                return $this->nombre_joueur;
        }

        /**
         * Set nombre_joueur
         *
         * @param  int  $nombre_joueur  nombre_joueur
         *
         * @return  self
         */ 
        public function setNombre_joueur(int $nombre_joueur)
        {
                $this->nombre_joueur = $nombre_joueur;

                return $this;
        }







    /**
     * Trouve une partie par son num
     *
     * @param integer $id Parteis
     * @return Parties objet Partie trouvé
     */
    public static function findById($id): Parties
    {
        $req=MonPDO::getInstance()->prepare("Select * from parties where id= :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'parties');
        $req->bindParam(":id", $id);
        $req->execute();
        $leResultat=$req->fetch();
        return $leResultat;
    }



    }

?>