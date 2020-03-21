<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Coworking');
	}
	public function index()
	{
		$data['coworking']= $this->Coworking->getAllCoworking();
		$this->load->view('template/header');
		$this->load->view('home/index',$data);
		$this->load->view('template/footer');
	}
	public function detail($id)
	{
		$data['coworking']= $this->Coworking->urlCoworking($id);
		$this->load->view('template/header');
		$this->load->view('home/detail',$data);
		$this->load->view('template/footer');
	}
}
