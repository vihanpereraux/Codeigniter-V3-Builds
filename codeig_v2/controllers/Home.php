<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelPost');
		$result = $this->ModelPost->fetchAllArticles();
		//print_r($result);
		$data['result'] = $result;
		$this->load->view('home', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}
}
