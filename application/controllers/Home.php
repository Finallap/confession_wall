<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $page_size = 10;

	public function index($per_page = 1)
	{
		$this->load->model('Confession_wall_model');

		if(is_null($per_page))$per_page=1;

		$total = $this->Confession_wall_model->all_count();

		$config['base_url'] = base_url('home/index/');
		$config['total_rows'] = $total;
		$config['per_page'] = $this->page_size;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['detail']=$this->Confession_wall_model->get_confession_message($this->page_size,($per_page-1)*$this->page_size);

		$this->load->view('template/header');
		$this->load->view('main',$data);
		$this->load->view('template/footer');
	}
}