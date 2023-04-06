<?php 
Class Menu extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	/*
	//lấy ra danh sách menu
	*/

	function index()
	{
		//lấy ra danh sách admin
		$list = $this->menu_model->get_list();
		$this->data['list'] = $list;

		//lấy tổng số
		$total_menu = $this->menu_model->get_total();
		$this->data['total_menu'] = $total_menu;

		//lấy nội dung thông báo
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		//load view
		$this->data['temp'] = 'admin/menu/index';
		$this->load->view('admin/main',$this->data);
	}



}