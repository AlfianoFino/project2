<?php
require "./koneksiMVC.php";

class m_dblogin{
  private $database;
  protected $tablename = "dblogin";

  public function __construct() {
    $this->database = new koneksiMVC();
    $this->database = $this->database->mysqli;
  }

  public function createData($username, $pw, $NIK, $nomorhp, $privilege) {
    $this->database->query("INSERT INTO $this->tablename (username, pw, NIK, nomorhp, privilege) VALUES ('$username', '$pw', '$NIK', '$nomorhp', '$privilege')");
  }
  
  public function deleteData($NIK){
	$this->database->query("DELETE FROM $this->tablename WHERE NIK=$NIK");
  }
  
  public function updateData($username, $pw, $NIK, $nomorhp, $privilege){
	$this->database->query("UPDATE $this->tablename SET username = '$username', pw = '$pw, nomorhp = '$nomorhp', privilege = '$privilege' WHERE NIK=$NIK");
  }

  public function getData($NIK) {
    $proker = $this->database->query("SELECT * FROM $this->tablename WHERE NIK = '$NIK'");
	return $proker;
  }

  public function checkLogin($username) {
    $proker = $this->database->query("SELECT * FROM $this->tablename WHERE username = '$username'");
	  return $proker;
  }



  public function getPrivilege($username) {
    $proker = $this->database->query("SELECT * FROM $this->tablename WHERE username = '$username'");
	  return $proker;
  }

  public function getAll() {
    $proker = $this->database->query("SELECT * FROM $this->tablename");
	return $proker;
  }
	
	
}


