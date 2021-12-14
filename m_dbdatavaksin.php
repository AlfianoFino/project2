<?php
require "./koneksiMVC.php";

class m_dbdatavaksin{
  private $database;
  protected $tablename = "dbdatavaksin";

  public function __construct() {
    $this->database = new koneksiMVC();
    $this->database = $this->database->mysqli;
  }

  public function createData($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2) {
    $this->database->query("INSERT INTO $this->tablename (nama, NIK, jenisvaksin, jadwalvaksin1, jadwalvaksin2) VALUES ('$nama', '$NIK', '$jenisvaksin', '$jadwalvaksin1', '$jadwalvaksin2')");
  }
  
  public function deleteData($NIK){
	$this->database->query("DELETE FROM $this->tablename WHERE NIK=$NIK");
  }
  
  public function updateData($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2){
	$this->database->query("UPDATE $this->tablename SET nama = '$nama', jenisvaksin = '$jenisvaksin, jadwalvaksin1 = '$jadwalvaksin1', jadwalvaksin2 = '$jadwalvaksin2' WHERE NIK=$NIK");
  }

  public function getData($NIK) {
    $proker = $this->database->query("SELECT * FROM $this->tablename WHERE NIK = ''$NIK");
	return $proker;
  }

  public function getAll() {
    $proker = $this->database->query("SELECT * FROM $this->tablename");
	return $proker;
  }
	
	
}


