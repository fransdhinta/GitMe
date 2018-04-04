<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$this->load->view('home',$data);
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function news()
	{
		$this->load->view('news');
	}
}
