<?php
interface Animal
{
    public function getName();
    public function action();
}
interface Plant
{
    public function haveWood();
    public function getType();
    public function growUp();
}

class Cat implements Animal
{
    private $name = 'Senorita';
    private $vurvival;
    private $eat = 'Mouse';
    public function getName()
    {
        echo '<br>My cat"s name is ' . $this->name;   // TODO: Implement getName() method.
    }
    public function action()
    {
        echo '<br>My cat eat ' . $this->eat;// TODO: Implement action() method.
    }

}

$cat = new Cat();
$cat->getName();
$cat->action();

class Kitten implements Animal, Plant
{
    private $name2 = '<br>My baby cat have not been named';
    private $eat2 = '<br>My kitty eat milk';
    private $survival = 'Grow up quickly ';
    const wood = false;
    private $type = 'Ăn hại';

    public function getName()
    {
        echo $this->name2;   // TODO: Implement getName() method.
    }

    public function action()
    {
         echo $this->eat2;  // TODO: Implement action() method.
    }
    public function growUp()
    {
        echo '<br>Mèo con: ' . $this->survival; // TODO: Implement growUp() method.
    }
    public function haveWood()
    {
        self:: wood;   // TODO: Implement haveWood() method.
    }
    public function getType()
    {
          echo '<br>Và nó... ' . $this->type;// TODO: Implement getType() method.
    }
}

$kitten = new Kitten();
$kitten->getName();
$kitten->action();
$kitten->growUp();
$kitten->getType();
$kitten->haveWood();
