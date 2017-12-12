<?php

/**
 * Created by PhpStorm.
 * User: hx
 * Date: 11/12/2017
 * Time: 20:11
 */
class Test
{

    /**
     * @var nom
     */
    private $_nom;
    /**
     * @var
     */
    private $_pays;

    /**
     * @param $nom
     * @param $pays
     * Constructeur de la classe
     */
    public function __construct($nom, $pays)
    {
        echo "Je suis dans le constructeur<br>";
        $this->_nom = $nom;
        $this->_pays = $pays;

    }

    /**
     *affiche
     */
    public function show()
    {
        echo "show() : je m'appelle $this->_nom et j'habite à/en $this->_pays<br>";
    }

    /**
     * @return string retourne l'affichage
     */
    public function show_bis()
    {
        return "show_bis() : je m'appelle $this->_nom et j'habite à/en $this->_pays<br>";
    }

    public function afficher()
    {
        try{
            $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.sqlite');
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
        } catch(Exception $e) {
            echo "Impossible d'acc�der � la base de donn�es SQLite : " . $e->getMessage();
            die();
        }

        /*$pdo->query("CREATE TABLE IF NOT EXISTS posts (
        id            INTEGER         PRIMARY KEY AUTOINCREMENT,
        titre         VARCHAR( 250 ),
        created       DATETIME
        );");*/

        /*$stmt = $pdo->prepare("INSERT INTO posts (titre, created) VALUES (:titre, :created)");
        $result = $stmt->execute(array(
            'titre'         => "Lorem ipsum",
            'created'       => date("Y-m-d H:i:s")
        ));*/

        $stmt = $pdo->query("SELECT * FROM posts");
        //$stmt->execute(array('titre' => '*'));
        $result = $stmt->fetchAll();
        print_r($result);
        var_dump($result);
        //echo "<br>{$result[0]['titre']}";
        return $result;
        /*foreach($result as $k=>$v)
        {
            echo "A l'indice $k Titre  : {$v['titre']}<br>";
        }*/
    }


}