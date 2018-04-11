<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('v_download');
	}
 
	public function lakukan_download($id=''){		
		force_download('file/' . $this->db->get_where('download', array('id' => $id))->row()->nama_dokumen,NULL);
	}
	public function lakukan_download2($id=''){		
		force_download('software/' . $this->db->get_where('produk_software', array('id_software' => $id))->row()->nama_software,NULL);
	}	
 
}   