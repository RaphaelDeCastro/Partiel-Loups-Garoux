<?php

class MonPDO{

    private static $serveur='mysql:host=fs405877-001.eu.clouddb.ovh.net';
    private static $bdd='dbname=LoupsGarousThiercelieux';
    private static $user='bachelorDI';
    private static $mdp='2023bachelorDI2023';
    private static $pdo;
    private static $unpdo;

    private function __construct()
    {
        MonPDO::$unpdo = new PDO(monPDO::$serveur.';'.monPDO::$bdd, monPDO::$user, monPDO::$mdp);
        MonPDO::$unpdo->query("SET CHARACTER SET utf8");
        MonPDO::$unpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function __destruct()
    { 
        MonPdo::$unpdo = null;
    }
    /**
    *	Fonction statique qui cree l'unique instance de la classe
    * Appel : $instanceMonPdo = MonPdo::getMonPdo();
    *	@return l'unique objet de la classe MonPdo
    */
    public static function getInstance()
    {
        if(self::$unpdo == null)
        {
            self::$pdo= new MonPdo();
        }
        return self::$unpdo;
    }

}


?>