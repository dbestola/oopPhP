<?php
 

class  GodsImage{ 
    public $money =  "1 million dollar";

    public function hasPower (): void{
        echo "You Have Power";
    }

    public function hasSpirit (): void{
        echo "You Have Spirit";
    }
}

class Human extends GodsImage {
    public $name;

    private $age;

    protected $gender;

    public function hasPower (): void{
        echo "NOT USING POWER";
    }

    public function canVote(): void{}

    public function reProduce (): void{
        echo "Now I can Reproduce";
    }

}