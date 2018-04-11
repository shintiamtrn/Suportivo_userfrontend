<?php

 class suportivo extends CI_Controller {

 	function __contructs(){
 		parent::__contructs();

 		$this->load->model('GambarModel');
	}
           
 	public function page(){
 		echo "ini coba muncul apa engga";
 	}

 	public function index(){
 		$this->load->view('v-landingpage');
 	}
 }