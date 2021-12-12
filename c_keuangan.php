<?php
require "m_keuangan.php";

class c_keuangan {
	
	public $model;

	public function __construct() {
		$this->model = new m_keuangan();
	}

	  public function create($Info, $Tanggal, $Tipe, $Jumlah){
		  $this->model->setProgramKerja($Info, $Tanggal, $Tipe, $Jumlah);
	  }
	   
	  public function update($Id, $Info, $Tanggal, $Tipe, $Jumlah){
		  $this->model->updateProgramKerja($Id, $Info, $Tanggal, $Tipe, $Jumlah);
	  }
	  
	  public function delete($Id){
		  $this->model->deleteProgramKerja($Id);
	  }
	  
	  public function invoke() {
		$proker = $this->model->getAll();
		include 'v_keuangan.php';
	}
}
