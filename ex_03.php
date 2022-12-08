<?php

namespace Imperium{
class Soldier
{

    private $hp;
    private $attack=12;
    private $name=50;

    public function __construct($name,$attack,$hp)
    {
        $this->hp=$hp;
        $this->attack=$attack;
        $this->name=$name;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp=$hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function setAttack($attack)
    {
        $this->attack=$attack;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function doDamage($obj)
    {
        $obj->setHp($obj->getHp()-$this->getAttack());
    }

    public function __toString()
    {
        return "Gessart the Imperium Space Marine : ".$this->getHp()." HP.";
    }
}
}

namespace Chaos{

class Soldier
{
    
    private $hp=70;
    private $attack=12;
    private $name;


    public function __construct($name,$attack,$hp)
    {
        $this->hp=$hp;
        $this->attack=$attack;
        $this->name=$name;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp=$hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function setAttack($attack)
    {
        $this->attack=$attack;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function doDamage($obj)
    {
        $obj->setHp($obj->getHp()-$this->getAttack());
    }

    public function __toString()
    {
        return "Gessart the Imperium Space Marine : ".$this->getHp()." HP.";
    }
}
}

/*
namespace {
$spaceMarine = new Imperium\Soldier(" Gessart ") ;
$chaosSpaceMarine = new Chaos\Soldier(" Ruphen ") ;
echo $spaceMarine . "\n";
echo $chaosSpaceMarine . "\n";
$spaceMarine->doDamage( $chaosSpaceMarine ) ;
echo $spaceMarine . "\n";
echo $chaosSpaceMarine . "\n";
}
*/

