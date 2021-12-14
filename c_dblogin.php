<?php
require "m_dblogin.php";

class c_dblogin {
	
	public $model;

	public function __construct() {
		$this->model = new m_dblogin();
	}

	  public function create($username, $pw, $NIK, $nomorhp){
          $privilege = 0;
		  $this->model->createData($username, $pw, $NIK, $nomorhp, $privilege);
	  }
	   
	  public function update($username, $pw, $NIK, $nomorhp, $privilege){
		  $this->model->updateData($username, $pw, $NIK, $nomorhp, $privilege);
	  }
	  
	  public function delete($NIK){
		  $this->model->deleteData($NIK);
	  }

	  public function checkRegister($NIK){
		$check = $this->model->getData($NIK);
		$return = false;
		if ($check == NULL) {
			$return = false;
		}
		else {
			$return = true;	
		}

		return $return;
	}

	public function checkLogin($username, $pw){
		$pwSQL = $this->model->checkLogin($username);
		//$pwCheck = $pwSQL->fetch_assoc();
		$pwUse = "";
		$pwCheck = "";
		while($pwCheck = $pwSQL->fetch_assoc()){
			$pwUse = "$pwCheck[pw]";
		}

		$return = true;
		if ($pwUse == $pw) {
			$return = true;
		}
		else {
			$return = false;	
		}
		return $return;
	}

      public function privilege($username){
        $privilege = $this->model->getPrivilege($username);
		return $privilege;
    }
	  
	public function invoke($priv, $NIK) {
		$privilege = $priv;
		$NIK = $NIK;
		//echo "login sukses!";
		include_once 'login_control.php';
        //header("Location: index_read_dbdatavaksin.php");
	}
}
