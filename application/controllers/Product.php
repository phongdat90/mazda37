<?php
Class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load model san pham
        $this->load->model('product_model');
    }
    
    /*
     * Hiển thị danh sách sản phẩm theo danh mục
     */
    function catalog()
    {
        //lấy slug của thể loại
        $slug_catalog = $this->uri->segment(1);
        $slug_catalog = strtolower($slug_catalog);
        if($slug_catalog == 'admin')
        {
            redirect(admin_url('admin'));
        }
        //lay ra thông tin của thể loại
        $this->load->model('catalog_model');
        $where= array('slug' => $slug_catalog);
        $catalog = $this->catalog_model->get_info_rule($where);
        if(!$catalog)
        {
            redirect(base_url());
        }
        $this->data['catalog'] = $catalog;
        $input = array();
        $input['where'] = array('catalog_id' => $catalog->id);
        /*
         * kiêm tra xem đây là danh con hay danh mục cha

         if($catalog->parent_id == 0)
        {
            $input_catalog = array();
            $input_catalog['where']  = array('parent_id' => $catalog->id);
            $catalog_subs = $this->catalog_model->get_list($input_catalog);
            $this->data['catalog_subs'] = $catalog_subs;
            if(!empty($catalog_subs)) //neu danh muc hien tai co danh muc con
            {
                $catalog_subs_id = array();
                foreach ($catalog_subs as $sub)
                {
                    $catalog_subs_id[] = $sub->id;
                }
                //lay tat ca san pham thuoc cac danh mục con do
                $this->db->where_in('catalog_id', $catalog_subs_id);
            }else{
                $input['where'] = array('catalog_id' => $catalog->id);
            }
        }else{
            $input['where'] = array('catalog_id' => $catalog->id);
        }
         */
        //lấy ra danh sách sản phẩm thuộc danh mục đó
        $total_rows = $this->product_model->get_total($input);
        $this->data['total_rows'] = $total_rows;
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['base_url']   = base_url( $slug_catalog.'/page'); 
        $config['total_rows'] = $total_rows;
        $config['per_page']   = 30;//so luong san pham hien thi tren 1 trang
        // $config['base_url']   = base_url('product/catalog/'.$catalog->id); 
        // $config['uri_segment'] = 3;
        // echo $config['uri_segment'];
        $config['cur_tag_open'] = '<a onclick="return false;" style="background:#ddd">';
        $config['cur_tag_close'] = '</a>';
        
       
        $config['uri_segment'] = 3;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->rsegment(4);
        // $segment = $this->uri->rsegment(4);
        $segment = intval($segment);
        // echo $segment;
        // die();
        $input['limit'] = array($config['per_page'], $segment);
        
        
        //lay danh sach san pham
//        if(isset( $catalog_subs_id))
//        {
//            $this->db->where_in('catalog_id', $catalog_subs_id);
//        }
        $input['order'] = array('created','DESC');
        $input['limit'] = array(3,0);
        $list_one = $this->product_model->get_list($input);

         $buy = array();
            foreach ($list_one as $key => $value) {
                //lay slug catalog cua tung bai viet
                $value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
                $buy[]= $value;
            }
            $this->data['buy'] = $buy;
         //lay 3 san pham tiep theo
        $input_pro_2 = array();
        $input_pro_2['where'] = array('catalog_id' => $catalog->id);
        $input_pro_2['order'] = array('created','DESC');
        $input_pro_2['limit'] = array(3,3);
        $list_one_2 = $this->product_model->get_list($input_pro_2);
        $buy2 = array();
        foreach ($list_one_2 as $key => $value) {
            //lay slug catalog cua tung bai viet
            $value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
            $buy2[]= $value;
        }
        $this->data['buy2'] = $buy2;
        // lay 3 san pham tiep theo
        $input_pro_3 = array();
        $input_pro_3['where'] = array('catalog_id' => $catalog->id);
        $input_pro_3['order'] = array('created','DESC');
        $input_pro_3['limit'] = array(3,6);
        $list_one_3 = $this->product_model->get_list($input_pro_3);
        $buy3 = array();
        foreach ($list_one_3 as $key => $value) {
            //lay slug catalog cua tung bai viet
            $value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
            $buy3[]= $value;
        }
        $this->data['buy3'] = $buy3;
        //hiển thị ra view
        $this->load->view('site/product/catalog', $this->data);
    }
    /*
     * Xem chi tiết sản phẩm
     */

    function view()
    {
        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            redirect();
        }
        $this->data['product'] = $product;
        //pre($product);
        /*
        //Nếu có dữ liệu post lên thì lưu vào bảng tư vấn mua hàng
        */
        //load thư viện form_validation và helper form
        // $this->load->library('form_validation');
        // $this->load->helper('form');
        // if($this->input->post())
        // {
        //     $this->form_validation->set_rules('phone','số điện thoại','required');
        //     $this->form_validation->set_rules('email','tài khoản email','required|valid_email');
        //     if($this->form_validation->run())
        //     {
        //         $phone = $this->input->post('phone');
        //         $email = $this->input->post('email');

        //         $data = array(
        //             'phone' => $phone,
        //             'email' =>$email,
        //             'created' => now(),
        //             );
        //         //lưu vào cơ sơ dữ liệu
        //         $this->load->model('tuvanmuahang_model');
        //         $this->tuvanmuahang_model->create($data);
        //     }
        // }
        
        //lấy danh sách ảnh sản phẩm kèm theo
        //$image_list = @json_decode($product->image_list);
        //$this->data['image_list'] = $image_list;

        //cập nhật lại lượt xem
        $data = array();
        $data['view'] = $product->view + 100;
        $this->product_model->update($product->id,$data);
        
        //lay thong tin cua danh mục san pham
        $catalog = $this->catalog_model->get_info($product->catalog_id);
        $this->data['catalog'] = $catalog;
        

        /*
        //lấy danh sách sản phẩm liên quan
        */
        $input = array();
        $input['where'] = array( 'catalog_id' => $product->catalog_id);
        if(isset($product->id))
        {
            $this->db->where('id <>', $product->id);//hoặc sử dụng $this->db->where('id !=', $id);
        }
        $input['limit'] = array(3,0);
        $buy = $this->product_model->get_list($input);
        $this->data['buy'] = $buy;
        //hiển thị ra view
        $this->load->view('site/product/view', $this->data);

    }
/*
//Tìm kiếm theo tên sản phẩm
*/
    function search()
    {
        $key = $this->input->get('key-search');
        $key = trim($key);
        $this->data['key'] = $key; //hàm trim để xóa các khoảng trống

        $input = array();
        $input['like'] = array('name',$key);
        $input['limit'] = array(3,0);
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;
        //load view
        //$this->data['temp'] = 'site/product/search';
        $this->load->view('site/product/search', $this->data);
    }
    /*
    //Tìm kiếm theo giá
    */
    function search_price()
    {
        $price_from = $this->input->get('price_from');
        $price_from = intval($price_from);
        $this->data['price_from'] = $price_from;

        $price_to = $this->input->get('price_to');
        $price_to = intval($price_to);
        $this->data['price_to'] = $price_to;
        //lọc theo giá
        $input = array();
        $input['where'] = array('price >=' => $price_from, 'price <=' => $price_to);
        $list = $this->product_model->get_list($input);
        $this->data['list'] = $list;
       //load view
        $this->data['temp'] = 'site/product/search_price';
        $this->load->view('site/layout',$this->data);

    }

    function redirect_page_zero($slug){
        redirect(base_url() . $slug);
    }

    


}

