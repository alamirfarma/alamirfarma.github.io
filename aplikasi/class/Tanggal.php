<?php 

/**
* 
*/

class Tanggal
{
	var $hari;
	var $tanggal;
	var $bulan;
	var $tahun;

	function __construct()
	{
		$this->hari = date('l');
		$this->tanggal = date('d');
		$this->bulan = date('m');
		$this->tahun = date('Y');

		switch ($this->hari) {
			case 'Sunday':
				$this->hari = 'Ahad';
			break;
			case 'Monday':
				$this->hari = 'Senin';
			break;
			case 'Tuesday':
				$this->hari = 'Selasa';
			break;
			case 'Wednesday':
				$this->hari = 'Rabu';
			break;
			case 'Thursday':
				$this->hari = 'Kamis';
			break;
			case 'Friday':
				$this->hari = 'Jumat';
			break;
			case 'Saturday':
				$this->hari = 'Sabtu';
			break;
		}

		switch ($this->tanggal) {
			case '01':
				$this->tanggal = '1';
			break;
			case '02':
				$this->tanggal = '2';
			break;
			case '03':
				$this->tanggal = '3';
			break;
			case '04':
				$this->tanggal = '4';
			break;
			case '05':
				$this->tanggal = '5';
			break;
			case '06':
				$this->tanggal = '6';
			break;
			case '07':
				$this->tanggal = '7';
			break;
			case '08':
				$this->tanggal = '8';
			break;
			case '09':
				$this->tanggal = '9';
			break;
		}

		switch ($this->bulan) {
			case '01':
				$this->bulan = 'Januari';
			break;
			case '02':
				$this->bulan = 'Februari';
			break;
			case '03':
				$this->bulan = 'Maret';
			break;
			case '04':
				$this->bulan = 'April';
			break;
			case '05':
				$this->bulan = 'Mei';
			break;
			case '06':
				$this->bulan = 'Juni';
			break;
			case '07':
				$this->bulan = 'Juli';
			break;
			case '08':
				$this->bulan = 'Agustus';
			break;
			case '09':
				$this->bulan = 'September';
			break;
			case '10':
				$this->bulan = 'Oktober';
			break;
			case '11':
				$this->bulan = 'November';
			break;
			case '12':
				$this->bulan = 'Desember';
			break;
		}
	}
	
	function get_hari()
	{
		return $this->hari;
	}

	function get_tanggal()
	{
		return $this->tanggal;
	}

	function get_bulan()
	{
		return $this->bulan;
	}

	function get_tahun()
	{
		return $this->tahun;
	}

	function get_lengkap()
	{
		return $this->hari.", ".$this->tanggal." ".$this->bulan." ".$this->tahun;
	}
}


