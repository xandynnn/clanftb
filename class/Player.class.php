<?php

class Player{

	public $username;
	public $plataforma;
	public $tag;
	private $name;
	private $advanceDogTagImage;
	private $basicDogTagImage;
	private $rank;
	private $rankName;
	private $rankImage;
	private $kills;
	private $win;
	private $headshot;
	private $timePlayed;



	public function setPlayer($username, $plataforma){
		$this->username = $nomeCompleto;
		$this->plataforma = $plataforma;
	}

	function __construct(){}

	public function getPlayerInfo(){
		$playerJson = file_get_contents("http://api.bf4stats.com/api/playerInfo?plat=".$this->plataforma."&name=".$this->username."&output=json&opt=details");

	}

}