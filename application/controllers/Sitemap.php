<?php 
Class Sitemap extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('news_model');
		$this->load->model('tuyendung_model');
		$this->load->model('dichvu_model');
		$this->load->model('catalog_model');
	}

	/*ham lay danh sach tat ca bai viet*/

	function index()
	{
		//lấy danh sách sản phẩm
		$list_sp = $this->product_model->get_list();
		$this->data['list_sp'] = $list_sp;
		//lây danh sách danh mục
		$list_dm = $this->catalog_model->get_list();
		$this->data['list_dm'] = $list_dm;
		//lấy danh sách tin tức
		$list_news = $this->news_model->get_list();
		$this->data['list_news'] = $list_news;
		//lấy danh sách bài viết giới thiệu
		$list_gt = $this->tuyendung_model->get_list();
		$this->data['list_gt'] = $list_gt;
		//lấy danh sách dịch vụ
		$list_dv = $this->dichvu_model->get_list();
		$this->data['list_dv'] = $list_dv;
		

		//load view
		$this->load->view('site/sitemap/index',$this->data);
	}
}