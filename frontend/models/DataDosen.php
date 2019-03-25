<?php
namespace frontend\models;

class DataDosen{
	public $nidn;
	public $nama;
	public $idprodi;

	//konstruktor class
	public function __construct($nidn, $nama){
		$this->nidn = $nidn;
		$this->nama = $nama;
	}

	public function prodi(){
		if($this->idprodi ==1)
			return "Sistem Informasi";
		else if($this->idprodi ==2)
			return "Teknik Informaika";
		else
			return "Prodi Tidak Teredia";
	}
}


?>