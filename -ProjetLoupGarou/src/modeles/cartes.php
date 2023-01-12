<?php

class Cartes {

    /**
     * id_carte
     * @var int
     */
    private $id_carte;

    /**
     * nom
     * @var string
     */
    private $nom;

    /**
     * role
     * @var string
     */
    private $role;

    /**
     * Get id_carte
     *
     * @return  int
     */ 
    public function getId_carte()
    {
        return $this->id_carte;
    }

    /**
     * Set id_carte
     *
     * @param  int  $id_carte  id_carte
     *
     * @return  self
     */ 
    public function setId_carte(int $id_carte)
    {
        $this->id_carte = $id_carte;

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
     * Get role
     *
     * @return  string
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param  string  $role  role
     *
     * @return  self
     */ 
    public function setRole(string $role)
    {
        $this->role = $role;

        return $this;
    }
}

?>