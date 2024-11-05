<?php

class HumanBeing {


    public $name;
    public $gender;
    private $age;

    
    public function __construct($name, $usergender, $userage) {
        $this->name = $name;
        $this->gender = $usergender;
        $this->age = $userage;
    }

    public function cannotVote(){
        echo "You can vote";
    }

    public function getAge(): mixed{
        return $this->age;
    }

}



echo "<br>";
$dbestola = new HumanBeing("Dimeji", "Male", 6);


echo $dbestola->name;
echo "<br>";
echo $dbestola->getAge();

echo "<br>";


echo $dbestola-> cannotVote();
