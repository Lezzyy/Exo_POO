<?php
//la class définit ce qu'il y a à l'intérieur d'un objet

// class Product {
//   public $title = 'Retour vers le futur'; //propriété
//   //constructeur
// function __construct($title){
// $this->title=$title;
//
// }
//   function getTitle(){ //méthode
//     return $title;
//   }
// }
//
// $p = new Product('Retour vers le futur');
// $p->getTitle();

// class Person {
//   public $Firstname = "Bill";
//   public $LastName = "Murphy";
//   public $Age = 29;
// }
//
// $bill = new Person();

// Nous créons une classe « Personnage ».
class Personnage
{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

public function __construct($force){
  echo 'voici le constructeur';
  $this->setForce($force);
  $this->_experience=1;
}
    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function gagnerExperience()
    {
        echo $this->_experience=$this->_experience+1;
        //$this->_experience+=1;
        //$this->_experience++;
    }
    public function force()
    {
        return $this->_force;
    }
    public function frapper(Personnage $perso)
    {
        return $perso->_degats += $this->_force;
    }
    public function setForce($force)
    {
        if (!is_int($force)) {
            trigger_error('Valeur incorrect, entrez un nombre', E_USER_WARNING);
            return;
        }
        if ($force>100) {
            trigger_error('Entrez une valeur inférieur à 100', E_USER_WARNING);
            return;
        }
        $this->_force=$force;
    }
}

$perso1 = new Personnage(60);
$perso2 = new Personnage(100);
// 
// $perso1->setForce(10);
// $perso2->setForce(20);

$perso1->frapper($perso2);


$perso1->frapper($perso2);


$perso2->frapper($perso1);

echo 'le perso1 a ', $perso1->force(), ' de force, alors que le perso2 a ', $perso2->force(),' de force.';
