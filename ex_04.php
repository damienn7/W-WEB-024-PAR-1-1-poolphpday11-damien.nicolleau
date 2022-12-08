<?php

namespace Imperium{
class Soldier
{

    private $hp=50;
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

    public function doDamage(object $obj)
    {
        $obj->setHp($obj->getHp()-$this->getAttack());
    }

    public function __toString()
    {
        return "Gessart the Imperium Space Marine : ".$this->getHp()." HP.";
    }
}
}


namespace {

    class Scanner
    {
        static function scan($obj)
        {
            if(is_a($obj,"Imperium\Soldier"))
            {
                echo "Praise be, Emperor, Lord.\n";
            }
            
            if(is_a($obj,"Chaos\Soldier"))
            {
                echo "Xenos spotted.\n";
            }
        }
    }
/*
$spaceMarine = new Imperium\Soldier(" Gessart ") ;
$chaosSpaceMarine = new Chaos\Soldier(" Ruphen ") ;
echo $spaceMarine . "\n";
echo $chaosSpaceMarine . "\n";
$spaceMarine->doDamage( $chaosSpaceMarine ) ;
echo $spaceMarine . "\n";
echo $chaosSpaceMarine . "\n";

Scanner::scan($spaceMarine);
*/
}

