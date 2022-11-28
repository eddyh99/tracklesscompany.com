<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title'     => 'Trackless Company',
			'content'   => 'home/index',
			'extra'     => 'home/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function indonesia()
	{
		$data = array(
			'title'     => 'Trackless Company',
			'content'   => 'home/indonesia',
			'extra'     => 'home/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function deleware()
	{
		$data = array(
			'title'     => 'Trackless Company',
			'content'   => 'home/deleware',
			'extra'     => 'home/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function delselect()
	{
		$data = array(
			'title'     => 'Trackless Company',
			'content'   => 'home/del-select',
			'extra'     => 'home/js/js_index',
		);
		$this->load->view('layout/wrapper', $data);
	}
}