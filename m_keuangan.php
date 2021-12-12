<?php
require "./koneksiMVC.php";

class m_keuangan{
  private $database;
  protected $tablename = "keuangan";

  public function __construct() {
    $this->database = new koneksiMVC();
    $this->database = $this->database->mysqli;
  }

  public function setProgramKerja($Info, $Tanggal, $Tipe, $Jumlah) {
    $this->database->query("INSERT INTO $this->tablename (Info, Tanggal, Tipe, Jumlah) VALUES ('$Info', '$Tanggal', '$Tipe', '$Jumlah')");
  }
  
  public function deleteProgramKerja($Id){
	$this->database->query("DELETE FROM $this->tablename WHERE Id=$Id");
  }
  
  public function updateProgramKerja($Id, $Info, $Tanggal, $Tipe, $Jumlah){
	$this->database->query("UPDATE $this->tablename SET Info = '$Info', Tanggal = '$Tanggal', Tipe = '$Tipe', Jumlah = '$Jumlah' WHERE Id=$Id");
  }

  public function getAll() {
    $proker = $this->database->query("SELECT * FROM $this->tablename");
	return $proker;
  }
	
	
}


