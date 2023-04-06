<?php 

/**
* 
*/
class Search extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('news_model');
		$this->load->model('dichvu_model');
	}

	  function index()
    {   
        
        $key = $this->input->get('key-search');
        $this->data['key'] = trim($key); //hàm trim để xóa các khoảng trống

        $input = array();
        $input['like'] = array('name',$key);
        $list_one = $this->product_model->get_list($input);

        $list = array();
        foreach ($list_one as $key => $value) {
            $value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
            $list[]= $value;
        }

        $this->data['list'] = $list;
        // pre($list); 

        //load view
        $input['like'] = array('title',$key);
        $news = $this->news_model->get_list($input);

        $this->data['news'] = $news;

        $input['like'] = array('title',$key);
        $dichvu = $this->dichvu_model->get_list($input);
        $this->data['dichvu'] = $dichvu;

        $this->data['temp'] = 'site/product/search';
        $this->load->view('site/layoutdm',$this->data);
        
    }

}

 ?>