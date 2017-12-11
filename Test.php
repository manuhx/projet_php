<?php

/**
 * Created by PhpStorm.
 * User: hx
 * Date: 11/12/2017
 * Time: 20:11
 */
class Test
{

    private $_nom;
    private $_pays;

    public function __construct($nom, $pays)
    {
        echo "Je suis dans le constructeur<br>";
        $this->_nom = $nom;
        $this->_pays = $pays;

    }

    public function show()
    {
        echo "show() : je m'appelle $this->_nom et j'habite à/en $this->_pays<br>";
    }

    public function show_bis()
    {
        return "show_bis() : je m'appelle $this->_nom et j'habite à/en $this->_pays<br>";
    }
}