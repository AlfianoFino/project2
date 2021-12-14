<?php
require "m_dbdatavaksin.php";

class c_dbdatavaksin {
	
	public $model;

	public function __construct() {
		$this->model = new m_dbdatavaksin();
	}

	  public function create($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2){
		  $this->model->createData($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2);
	  }
	   
	  public function update($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2){
		  $this->model->updateData($nama, $NIK, $jenisvaksin, $jadwalvaksin1, $jadwalvaksin2);
	  }
	  
	  public function delete($NIK){
		  $this->model->deleteData($NIK);
	  }
	  
	  public function invoke($NIK) {
		$proker = $this->model->getData($NIK);
		include 'v_dbdatavaksin.php';
	}
}
