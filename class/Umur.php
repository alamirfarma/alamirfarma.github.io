<?php 

/**
* 
*/
class Umur
{
	private $blnSkrg;
	private $thnSkrg;
	private $thnLhr = 1994;
	private $umur;

	function __construct()
	{
		$this->blnSkrg = intval(date('m'));
		$this->thnSkrg = intval(date('Y'));
	}

	function getUmur()
	{
		if ($this->blnSkrg == 12) {
			$this->umur = $this->thnSkrg - $this->thnLhr;
		} else {
			$this->umur = $this->thnSkrg - $this->thnLhr - 1;
		}
		
		return $this->umur;
	}


}
