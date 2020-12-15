<?php

class Fan
{
    private $name;
    public function __constuct($name) {
        $this->name = $name;
    }

    public function favorite(Team $team) {
        $team->favorite();     
    }
}

class Team 
{
    public $numberOfFans = 0;
    public $name = 0;

    public function __construct($numberOfFans, $name)
    {
        $this->numberOfFans = $numberOfFans;
        $this->name = $name;
    }

    public function getNumbeOfFans() {
        return $this->numberOfFans;
    }

    public function getNameOfTeam(){
        return $this->name;
    }
    public function favorite(){
        return $this->numberOfFans++;
    }
}

class Ligue 
{
    public $name ;
    public $team;

    public function __construct($name)
    {
        $this->name = $name;
        $this->team = [];
    }
    //Typing Thing
    public function getTeams(Team $team){
        $this->team[] = $team;
    }

    public function countTeam(){
        return count($this->team);
    }
}
$Tintin = new Fan("Mansouri");

$Barcelona = new Team(0, "barcelona");
$RealMadrid = new Team(0, "Real de Madrid");
$Tintin->favorite($Barcelona);
//$Tintin->favorite($RealMadrid);
//$Tintin->getFavoriteTeam($Barcelona);
echo $Barcelona->getNumbeOfFans() . PHP_EOL;
echo $RealMadrid->getNumbeOfFans();

/*
$Liga = new Ligue('Liga');
$Liga->getTeams($Barcelona);
$Liga->getTeams($RealMadrid);
echo $Liga->countTeam();*/