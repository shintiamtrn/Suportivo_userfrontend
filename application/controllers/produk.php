<?php

class produk extends CI_Controller {

	function __contructs(){
		parent::__contructs();
	}

	/*public function monitaamr($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monitaamr', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}*/
	public function monitaamr($produk='2')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_monitaamr', $data);
	}  
	/*public function monitaengine($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monitaengine', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}*/
    public function monitaengine($produk='1')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_monitaengine', $data);
	}   
	/*public function monitamarine($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monitamarine', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}*/
	public function monitamarine($produk='3')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_monitamarine', $data);
	}
	/*public function monitapembangkit($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monitapembangkit', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}*/
	public function monitapembangkit($produk='3')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_monitapembangkit', $data);
	}
	/*public function monitapenyulang($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monitapenyulang', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}*/
	public function monitapenyulang($produk='4')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_monitapenyulang', $data);
	}
/*
	public function halizareciprocating($id=11)
	{
		$data = $this->db->get_where('spek2', array('idSpek2' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_halizareciprocating', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}
	}

*/
	public function halizareciprocating($produk='3')
	{
		$data['data']=$this->db->query("select * from spek2 where id_sub_category=".$produk." order by num asc");
		$this->load->view('v_halizareciprocating', $data);
	}

}