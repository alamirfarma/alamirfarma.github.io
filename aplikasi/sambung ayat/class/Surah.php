<?php 

class Surah
{
	var $nama;
	var $jml_ayat;
	var $random_ayat;

	function __construct($nama,$jml_ayat)
	{
		$this->nama = $nama;
		$this->jml_ayat = $jml_ayat;
		if ($this->nama == "Belum ada") {
			$this->random_ayat = rand(0,$this->jml_ayat);
		} 
		else {
			$this->random_ayat = rand(1,$this->jml_ayat);
		}
	}

	function get_nama()
	{
		return $this->nama;
	}

	function get_ayat()
	{
		return $this->jml_ayat;
	}

	function get_random()
	{
		return $this->random_ayat;
	}

}


