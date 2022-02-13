<?php

class mahasiswa
{
	private $nim = "";
	private $nama = "";
	private $jk = "";
	private $prodi = "";
	private $semester = 0;

	public function __construct($nim = "", $nama = "", $jk = "", $prodi = "", $semester = 0)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->jk = $jk;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	public function setNim($nim)
	{
		$this->nim = $nim;
	}

	public function getNim()
	{
		return $this->nim;
	}

	public function setNama($nama)
	{
		$this->nama = $nama;
	}

	public function getNama()
	{
		return $this->nama;
	}

	public function setJk($jk)
	{
		$this->jk = $jk;
	}

	public function getJk()
	{
		return $this->jk;
	}

	public function setProdi($prodi)
	{
		$this->prodi = $prodi;
	}

	public function getProdi()
	{
		return $this->prodi;
	}

	public function setSemester($semester)
	{
		$this->semester = $semester;
	}

	public function getSemester()
	{
		return $this->semester;
	}
}

?>