<?php

class GodsImage
{

    const description = "those that are created by God";

    // properties
    public $name;
    public $gender;
    private $age;
    protected $school;
     
    // methods
    // constructor
    public function __construct($name, $usergender, $userage) {
        $this->name = $name;
        $this->gender = $usergender;
        $this->age = $userage;
    }

    public function intro() {
        echo $this-> name;
    }
        
   

    // deconstructor
    public function __destruct() {
        echo "<br>", "Done";
        echo "<br>",  "my gender is {$this->gender}";
        echo "<br>", $this->age;
    }

    public function getAge(): mixed{
        return $this->age;
    }

    // if i did not declare the type of function, it will regard it as a public function
    // setter function
     function setSchool ($school) {
       return $this -> school = $school;
    }
    // getter function
     function getSchool(): mixed{
        return $this -> school;
    }
   
}


 

echo GodsImage::description;

echo "<br>";

// class intanciating --- gives me access to the functionality inside the class "GodsImage"
$dbest = new GodsImage( "Dimeji", "Male", 85);


echo $dbest->name;
echo "<br>";
echo $dbest->getAge();
echo "<br>";

echo $dbest ->getSchool();



// a class derived from another class is called inheritance
// inheritance
// child class HumanBeing is inheried from GodsImage class
class Humanbeing extends GodsImage{
    public function message () {
        echo "my time has come ";
       $this->  intro();
    }
}


// inherited child class
// class intanciating --- gives me access to the functionality inside both the class "GodsImage" and Humanbeing
$obj = new Humanbeing("Dimeji", "Male", 85);
$obj -> message();





