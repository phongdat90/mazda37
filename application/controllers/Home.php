<?php
Class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
	    //lay danh sach slide
	    $this->load->model('slide_model');
	    $slide_list = $this->slide_model->get_list();
	    $this->data['slide_list'] = $slide_list;
	    //l?y t&#7893;ng s&#7889; slide
	    $slide_total = $this->slide_model->get_total();
	    $this->data['slide_total'] = $slide_total;
	    //lay n&#7897;i dung c&#7911;a bi&#7871;n message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

	    //lay danh 3 sach san pham moi
        /*
	    $this->load->model('product_model');
	    $input = array();
	    $input['where'] = array('noi_bat' => 1);
	    $input['order'] = array('created','DESC');
	    $input['limit'] = array('3','0');
	    $product_newest= $this->product_model->get_list($input);
	    foreach($product_newest as $row)
        {
            $row->slug_catalog = $this->catalog_model->get_info($row->catalog_id)->slug;
        }
	    $this->data['product_newest'] = $product_newest;
        // lay danh sach 3 san pham moi tiep theo
        $input_pro_3 = array();
        $input_pro_3['where'] = array('noi_bat' => 1);
        $input_pro_3['order'] = array('created','DESC');
        $input_pro_3['limit'] = array('3','3');
        $product_newest_3= $this->product_model->get_list($input_pro_3);
        foreach($product_newest_3 as $row) {
            $row->slug_catalog = $this->catalog_model->get_info($row->catalog_id)->slug;
        }
        $this->data['product_newest_3'] = $product_newest_3;

        // lay danh sach 3 san pham moi tiep theo
        $input_pro_6 = array();
        $input_pro_6['where'] = array('noi_bat' => 1);
        $input_pro_6['order'] = array('created','DESC');
        $input_pro_6['limit'] = array('3','6');
        $product_newest_6= $this->product_model->get_list($input_pro_6);
        foreach($product_newest_6 as $row) {
            $row->slug_catalog = $this->catalog_model->get_info($row->catalog_id)->slug;
        }
        $this->data['product_newest_6'] = $product_newest_6;
        */
        $where = array();
        $where = array('status' => 1,'parent_id'=>0);
        $info_1 = $this->catalog_model->get_info_rule($where);
        $this->data['info_1'] = $info_1;

        if($info_1)
        {
            $input_1['where'] = array('catalog_id' => $info_1->id);
         	$input_1['order'] = array('created','DESC');
	        $input_1['limit'] = array('3','0');
	        $list_1 = $this->product_model->get_list($input_1);
	        $this->data['list_1'] = $list_1;
        }


        //l&#7845;y th?ng tin status =2
        $where = array();
        $where = array('status' => 2,'parent_id'=>0);
        $info_2 = $this->catalog_model->get_info_rule($where);
        $this->data['info_2'] = $info_2;

        if($info_2)
        {
            $input_2['where'] = array('catalog_id' => $info_2->id);
            $input_2['order'] = array('created','DESC');
	        $input_2['limit'] = array('3','0');
	        $list_2 = $this->product_model->get_list($input_2);
	        $this->data['list_2'] = $list_2;

        }


        //l&#7845;y th?ng tin status =3
        $where = array();
        $where = array('status' => 3,'parent_id'=>0);
        $info_3 = $this->catalog_model->get_info_rule($where);
        $this->data['info_3'] = $info_3;
        
        if($info_3)
        {
            $input_3['where'] = array('catalog_id' => $info_3->id);
         	$input_3['order'] = array('created','DESC');
	        $input_3['limit'] = array('3','0');
	        $list_3 = $this->product_model->get_list($input_3);
	        $this->data['list_3'] = $list_3;
        }
        // lay thong tin status = 4
        $where = array();
        $where = array('status' => 4,'parent_id'=>0);
        $info_4 = $this->catalog_model->get_info_rule($where);
        $this->data['info_4'] = $info_4;

        if($info_4)
        {
            $input_4['where'] = array('catalog_id' => $info_4->id);
            $input_4['order'] = array('created','DESC');
            $input_4['limit'] = array('3','0');
            $list_4 = $this->product_model->get_list($input_4);
            $this->data['list_4'] = $list_4;
        }

        // lay thong tin status = 5
        $where = array();
        $where = array('status' => 5,'parent_id'=>0);
        $info_5 = $this->catalog_model->get_info_rule($where);
        $this->data['info_5'] = $info_5;

        if($info_5)
        {
            $input_5['where'] = array('catalog_id' => $info_5->id);
            $input_5['order'] = array('created','DESC');
            $input_5['limit'] = array('3','0');
            $list_5 = $this->product_model->get_list($input_5);
            $this->data['list_5'] = $list_5;
        }
        // lay thong tin status = 6
        $where = array();
        $where = array('status' => 6,'parent_id'=>0);
        $info_6 = $this->catalog_model->get_info_rule($where);
        $this->data['info_6'] = $info_6;

        if($info_6)
        {
            $input_6['where'] = array('catalog_id' => $info_6->id);
            $input_6['order'] = array('created','DESC');
            $input_6['limit'] = array('3','0');
            $list_6= $this->product_model->get_list($input_6);
            $this->data['list_6'] = $list_6;
        }
		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layouthome', $this->data);
	}



}