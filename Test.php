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


}