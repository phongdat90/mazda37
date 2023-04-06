<?php
Class Gioithieu extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('gioithieu_model');
	}

	function view()
	{
		//lấy thông tin trang giới thiệu
		$id = 1;
		$gioithieu = $this->gioithieu_model->get_info($id);
		$this->data['gioithieu'] = $gioithieu;
		
		//load view
		$this->load->view('site/gioithieu/view',$this->data);

	}

}