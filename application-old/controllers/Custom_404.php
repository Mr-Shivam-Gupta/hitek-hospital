<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_404 extends CI_Controller
{
	
	public function index()
	{
		$data['title']="Home | HI-TEK Super Speciality Hospital";
		$data['canonical']="https://www.hitekhospitals.com";
		$data['keywords']="";
		$data['desc']="";
		$data['menu']="home";
		$this->load->view('error-page',$data);
	}
}








?>