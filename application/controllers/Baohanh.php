<?php 
Class Baohanh extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('baohanh_model');
	}
	function view()
	{
		//lấy thông tin page bảo hành
		$id =1;
		$baohanh = $this->baohanh_model->get_info($id);
		$this->data['baohanh'] = $baohanh;

		//load view
		$this->load->view('site/baohanh/view',$this->data);
	}
}