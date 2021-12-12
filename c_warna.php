<?php
require "m_warna.php";

class c_warna {
	
	public $model;

	public function __construct() {
		$this->model = new m_warna();
	}

	  public function create($BackgroundColor, $FormColor, $ButtonColor){
		  $this->model->setProgramKerja($BackgroundColor, $FormColor, $ButtonColor);
	  }
	   
	  public function update($Id, $BackgroundColor, $FormColor, $ButtonColor){
		  $this->model->updateProgramKerja($Id, $BackgroundColor, $FormColor, $ButtonColor);
	  }
	  
	  public function delete($Id){
		  $this->model->deleteProgramKerja($Id);
	  }
	  
	  public function view($No){
		$proker = $this->model->getAll();
		while ($output = $proker->fetch_assoc()){
			
			if (("$output[Id]") == $No){
				$BackgroundColor = "$output[BackgroundColor]";
				$FormColor = "$output[FormColor]";
				$ButtonColor = "$output[ButtonColor]";
			}
			
		}
		include_once('login_view.php');
		header('Location: login_view.php');
		exit;
	  }
	  
	  public function invoke() {
		$proker = $this->model->getAll();
		include 'v_warna.php';
	}
}
