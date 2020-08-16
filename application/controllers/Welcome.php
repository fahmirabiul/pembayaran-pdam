<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Dashboard_model');
		$this->Login_model->keamanan();
	}

	public function index()
	{
		$data['allTrs'] = $this->Dashboard_model->varAllTransaksi();
		$data['selTrs'] = $this->Dashboard_model->varSelectedTransaksi();
		$data['income'] = $this->Dashboard_model->varIncome();
		$data['debt'] = $this->Dashboard_model->varDebt();
		$this->load->view('templates/header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}
}
