<?php

class soccerTeam
{
	private $name = "";
	private $nation = "";
	private $year_founded = 0;
	private $player = [];

	public function __construct($name="", $nation="", $year_founded=0, $player=[])
	{
		$this->name = $name;
		$this->nation = $nation;
		$this->year_founded = $year_founded;
		$this->player = $player;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNation($nation)
	{
		$this->nation = $nation;
	}

	public function getNation()
	{
		return $this->nation;
	}

	public function setYear_founded($year_founded)
	{
		$this->year_founded = $year_founded;
	}

	public function getYear_founded()
	{
		return $this->year_founded;
	}

	public function setPlayer($player)
	{
		$this->player = $player;
	}

	public function getPlayer()
	{
		return $this->player;
	}

	public function printTeam()
	{
		echo "Nama tim : ". $this->name ."<br>";
		echo "Negara asal tim : ". $this->nation ."<br>";
		echo "Tahun berdiri : ". $this->year_founded ."<br>";
		echo "Pemain : <br>";
		foreach($this->player as $i)
		{
			echo " -> ". $i ."<br>";
		}
	}
}

?>