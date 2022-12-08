<?php

interface iCars
{
    public function getPrice();

    public function getWeight();

    public function mineIsBigger($obj);
}


class BMW implements iCars
{
    private $_weight;
    private $_price;

    public function __construct($price,$weight=4242)
    {
        $this->$_weight=$weight;
        $this->$_price=$price;
    }

    static function lessExpansive()
    {
        return 15000;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getWeight()
    {
        return $this->_weight;
    }

    public function mineIsBigger(object $obj)
    {
        if(is_a($obj,"Toyota"))
        {
            echo "Minbe is bigger";
        }
        elseif (is_a($obj,"Smart")) 
        {
            echo "Mine is way bigger !";
        }
        elseif(is_a($obj,"Velib"))
        {
            echo "LOL";
        }
        else
        {
            echo "Show me !";
        }
    }
}

class Suzuki implements iCars
{
    private $_weight;
    private $_price;

    public function __construct($price,$weight=4242)
    {
        $this->$_weight=$weight;
        $this->$_price=$price;
    }

    static function lessExpansive()
    {
        return 5000;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getWeight()
    {
        return $this->_weight;
    }

    public function mineIsBigger($obj)
    {
        if(is_a($obj,"Toyota"))
        {
            echo "Minbe is bigger";
        }
        elseif (is_a($obj,"Smart")) 
        {
            echo "Mine is way bigger !";
        }
        elseif(is_a($obj,"Velib"))
        {
            echo "LOL";
        }
        else
        {
            echo "Show me !";
        }
    }
}
/*
echo Suzuki::lessExpansive();
echo BMW::lessExpansive();
*/