<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('user/index');
		$this->load->view('footer');
	}
}
