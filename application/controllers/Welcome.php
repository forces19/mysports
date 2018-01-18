<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('data_teks');
	}

	public function index()
	{
		$data = [];
		$data['judul'] = $this->data_teks->get_cons('judul');
		$data['h2_1'] = $this->data_teks->get_cons('header2.1');
		$data['h1_1'] = $this->data_teks->get_cons('header1.1');
		$data['h4_1'] = $this->data_teks->get_cons('header4.1');
		$data['h3_1'] = $this->data_teks->get_cons('header3.1');
		$data['p_1'] = $this->data_teks->get_cons('pgraph.1');
		$data['h3_2'] = $this->data_teks->get_cons('header3.2');
		$data['p_2'] = $this->data_teks->get_cons('pgraph.2');
		$data['h3_3'] = $this->data_teks->get_cons('header3.3');
		$data['p_3'] = $this->data_teks->get_cons('pgraph.3');
		$data['hb_1'] = $this->data_teks->get_cons('habout.1');
		$data['pb_1'] = $this->data_teks->get_cons('pabout.1');
		$data['hb_2'] = $this->data_teks->get_cons('habout.2');
		$data['pb_2'] = $this->data_teks->get_cons('pabout.2');
		$data['pt1_1'] = $this->data_teks->get_cons('ptest1.1');
		$data['pt1_2'] = $this->data_teks->get_cons('ptest1.2');
		$data['c1'] = $this->data_teks->get_cons('client.1');
		$data['pt2_1'] = $this->data_teks->get_cons('ptest2.1');
		$data['pt2_2'] = $this->data_teks->get_cons('ptest2.2');
		$data['c2'] = $this->data_teks->get_cons('client.2');
		$data['pt3_1'] = $this->data_teks->get_cons('ptest3.1');
		$data['pt3_2'] = $this->data_teks->get_cons('ptest3.2');
		$data['c3'] = $this->data_teks->get_cons('client.3');
		$this->load->view('pages/index',$data);
	}

	public function about()
	{
		$data = [];
		$data['judul'] = $this->data_teks->get_cons('judul');
		$this->load->view('pages/about',$data);
	}

	public function services()
	{
		$data = [];
		$data['judul'] = $this->data_teks->get_cons('judul');
		$this->load->view('pages/services',$data);
	}

	public function login()
	{
		$data = [];
		$data['judul'] = $this->data_teks->get_cons('judul');
		$this->load->view('pages/login',$data);
	}

	public function contact()
	{
		$data = [];
		$data['judul'] = $this->data_teks->get_cons('judul');
		$this->load->view('pages/contact',$data);
	}
}
