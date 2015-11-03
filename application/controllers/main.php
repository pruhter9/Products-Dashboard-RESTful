<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('Product');
		$view_data['products'] = $this->Product->fetch_all_products();
		$this->load->view('index', $view_data);
	}
}
