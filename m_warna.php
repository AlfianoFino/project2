<?php
require "./koneksiMVC.php";

class m_warna{
  private $database;
  protected $tablename = "colors";

  public function __construct() {
    $this->database = new koneksiMVC();
    $this->database = $this->database->mysqli;
  }

  public function setProgramKerja($BackgroundColor, $FormColor, $ButtonColor) {
    $this->database->query("INSERT INTO $this->tablename (BackgroundColor, FormColor, ButtonColor) VALUES ('$BackgroundColor', '$FormColor', '$ButtonColor')");
  }
  
  public function deleteProgramKerja($Id){
	$this->database->query("DELETE FROM $this->tablename WHERE Id=$Id");
  }
  
  public function updateProgramKerja($Id, $BackgroundColor, $FormColor, $ButtonColor){
	$this->database->query("UPDATE $this->tablename SET BackgroundColor = '$BackgroundColor', FormColor = '$FormColor, $ButtonColor = $ButtonColor' WHERE Id=$Id");
  }

  public function getAll() {
    $proker = $this->database->query("SELECT * FROM $this->tablename");
	return $proker;
  }
	
	
}


