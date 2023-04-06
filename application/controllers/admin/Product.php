<?php
Class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('product_model');
    }
    
     /*
     * Hien thi danh sach san pham
     */
    function index()
    {
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        
        $input_pagi['where'] = array();
        if($id)
        {
            $input_pagi['like'] = array('ma_sp', $id);
        }

        $name = $this->input->get('name');
        if($name)
        {
            $input_pagi['like'] = array('name', $name);
        }
        $catalog_id = $this->input->get('catalog');
        $catalog_id = intval($catalog_id);

        if($catalog_id > 0)
        {
            $input_pagi['where']['catalog_id'] = $catalog_id;
        }

        $total_row = $this->product_model->get_list($input_pagi);
        $total_rows = count($total_row);

        $this->data['total_rows'] = $total_rows;
        
        //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('product/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 25;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang k&#7871; ti&#7871;p';
        $config['prev_link']   = 'Trang tr&#432;&#7899;c';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        
        $input['where'] = array();
        if($id)
        {
            $input['like'] = array('ma_sp', $id);
        }

        $name = $this->input->get('name');
        if($name)
        {
            $input['like'] = array('name', $name);
        }
        $catalog_id = $this->input->get('catalog');
        $catalog_id = intval($catalog_id);

        if($catalog_id > 0)
        {
            $input['where']['catalog_id'] = $catalog_id;
        }
        
        //lay danh sach san pham theo ng�y
        
        $input['order'] = array('created','DESC');
        $list_one = $this->product_model->get_list($input);

            $buy = array();
            foreach ($list_one as $key => $value) {
                //lay slug catalog cua tung bai viet
                $this->load->model('catalog_model');
                //$value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
                $value->name_catalog = $this->catalog_model->get_info($value->catalog_id)->name;
                $buy[]= $value;
            }
            $this->data['buy'] = $buy;

        //l�y danh m&#7909;c cha
                        $this->load->model('catalog_model');
                        $input = array();
                        $input['where'] = array('parent_id' => 0);
                        $catalog_0 = $this->catalog_model->get_list($input);
                        //l&#7863;p danh m&#7909;c cha l&#7845;y ra menu c&#7845;p 2 n&#7871;u c�
                        foreach($catalog_0 as $row)
                        {
                            //l&#7845;y ra menu c&#7845;p 2 n&#7871;u c�
                            $input_1 = array();
                            $input_1['where'] = array('parent_id' => $row->id);
                            $menu_1 = $this->catalog_model->get_list($input_1);
                            //g&#7855;n menu con v�o menu_0
                            $row->menu_1 = $menu_1;
                        }

                       foreach($catalog_0 as $value)
                       {
                            if(count($value->menu_1) > 0)//l&#7845;y danh m&#7909;c c&#7845;p 3 n&#7871;u c�
                            {
                                foreach($value->menu_1 as $row)
                                {
                                    $input_2 = array();
                                    $input_2['where'] = array('parent_id' => $row->id);
                                    $menu_2 = $this->catalog_model->get_list($input_2);
                                    $row->menu_2 = $menu_2;
                                }
                                
                            }
                       }
                       $this->data['catalog_0'] = $catalog_0;
        
        //lay n&#7897;i dung c&#7911;a bi&#7871;n message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        //load view
        $this->data['temp'] = 'admin/product/index';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Them san pham moi
     */
    function add()
    {
        //lay danh sach danh muc san pham
        $this->load->model('catalog_model');
        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->catalog_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->catalog_model->get_list($input);
            $row->subs = $subs;  
        }
        foreach($catalogs as $value)
        {
            if(count($value->subs) > 0)
            {
                foreach($value->subs as $value2)
                {
                    $input2 = array();
                    $input2['where'] = array('parent_id'=>$value2->id);
                    $sub2 = $this->catalog_model->get_list($input2);
                    $value2->sub2 = $sub2;
                }
            }
        }
        $this->data['catalogs'] = $catalogs;

        //lấy danh sách address
        // $this->load->model('address_model');
        // $input_address = array();
        // $input_address['order'] = array('sort_order','DESC');
        // $list_address = $this->address_model->get_list($input_address);
        // $this->data['list_address'] = $list_address;
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
            //$this->form_validation->set_rules('address_id', 'Hãng sản xuất', 'required');
            //$this->form_validation->set_rules('price', 'Giá', 'required');
            if($this->input->post('slug') != '')
                $this->form_validation->set_rules('slug', 'Slug', 'callback__check_slug');
                
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name        = $this->input->post('name');
                
                $catalog_id  = $this->input->post('catalog');
                $price       = $this->input->post('price');
                $price       = str_replace(',', '', $price);
                $discount    = $this->input->post('discount');
                $discount    = str_replace(',','',$discount);
                $ma_sp       = $this->input->post('ma_sp');
                $status      = $this->input->post('status');
                
                //luu du lieu can them
                $data = array(
                    'name'       => $name,
                    'image_link' => $this->input->post('image'),
                    'image_list' => json_encode($this->input->post('image_list')),
                    'price'      => $price,
                    'discount'   => $discount,
                    'catalog_id' => $catalog_id,
                    //'address_id' => $this->input->post('address_id'),
                    'hsx'        => $this->input->post('hsx'),
                    'status'     =>  $status,
                    'ma_sp'      => $ma_sp,
                    'noi_bat'    => $this->input->post('noi_bat'),
                    'warranty'   => $this->input->post('warranty'),
                    'gifts'      => $this->input->post('gifts'),

                    'site_title' => $this->input->post('site_title'),
                    'meta_desc'  => $this->input->post('meta_desc'),
                    'meta_key'   => $this->input->post('meta_key'),
                    
                    
                    //'intro'      => $this->input->post('intro'),
                    'content'    => $this->input->post('content'),
                    'created'    => now(),
                );

                

             
                //slug mặc định
                if($this->input->post('slug') == '')
                    $data['slug']  = str_slug($name);
                else
                     $data['slug'] =$this->input->post('slug');
                
                //them moi vao csdl
                if($this->product_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('product'));
            }
        }
        //load view
        $this->data['temp'] = 'admin/product/add';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Chinh sua san pham
     */
    function edit()
    {
        if($this->getPermission() != 1)
        redirect(admin_url('permission/deny'));

        $id = $this->uri->rsegment('3');
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(admin_url('product'));
        }
        $this->data['product'] = $product;
       
        //lay danh sach danh muc san pham
        $this->load->model('catalog_model');
        $input = array();
        $input['where'] = array('parent_id' => 0);
        $catalogs = $this->catalog_model->get_list($input);
        foreach ($catalogs as $row)
        {
            $input['where'] = array('parent_id' => $row->id);
            $subs = $this->catalog_model->get_list($input);
            $row->subs = $subs;  
        }
        foreach($catalogs as $value)
        {
            if(count($value->subs) > 0)
            {
                foreach($value->subs as $value2)
                {
                    $input2 = array();
                    $input2['where'] = array('parent_id'=>$value2->id);
                    $sub2 = $this->catalog_model->get_list($input2);
                    $value2->sub2 = $sub2;
                }
            }
        }
        $this->data['catalogs'] = $catalogs;
        
        

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
            //$this->form_validation->set_rules('price', 'Giá', 'required');
             if($this->input->post('slug') != '')
                $this->form_validation->set_rules('slug', 'Slug', 'callback__check_slug');
                
        
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name        = $this->input->post('name');
                
                $catalog_id  = $this->input->post('catalog');
                $price       = $this->input->post('price');
                $price       = str_replace(',', '', $price);
                $discount    = $this->input->post('discount');
                $discount    = str_replace(',','',$discount);
                $ma_sp       = $this->input->post('ma_sp');
                $status      = $this->input->post('status');
                
                //luu du lieu can them
                $data = array(
                    'name'       => $name,
                    'image_link' => $this->input->post('image'),
                    'image_list' => json_encode($this->input->post('image_list')),
                    'price'      => $price,
                    'discount'   => $discount,
                    'catalog_id' => $catalog_id,
                    //'address_id' => $this->input->post('address_id'),
                    'hsx'        => $this->input->post('hsx'),
                    'status'     =>  $status,
                    'ma_sp'      => $ma_sp,
                    'noi_bat'    => $this->input->post('noi_bat'),
                    'warranty'   => $this->input->post('warranty'),
                    'gifts'      => $this->input->post('gifts'),

                    'site_title' => $this->input->post('site_title'),
                    'meta_desc'  => $this->input->post('meta_desc'),
                    'meta_key'   => $this->input->post('meta_key'),
                    
                    
                    //'intro'      => $this->input->post('intro'),
                    'content'    => $this->input->post('content'),
                    
                );
                
                 if($this->input->post('product_time') == 'auto')
                 {
                    $data['created'] = now();
                 }
                 //slug 
                 if($this->input->post('slug') == '')
                    $data['slug']  = str_slug($name);
                else
                     $data['slug'] =$this->input->post('slug');
                //them moi vao csdl
                if($this->product_model->update($product->id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('product'));
            }
        }
        
        //load view
        $this->data['temp'] = 'admin/product/edit';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Xoa du lieu
     */
    function del()
    {
        $id = $this->uri->rsegment('3');
        $this->_del($id);

        
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
        redirect(admin_url('product'));
    }
    
    /*
     * Xóa nhiều sản phẩm
     */
    function delete_all()
    {
        $ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
    }
    
    /*
     *Xoa san pham
     */
    private function _del($id)
    {
      if($this->getPermission() != 1)
        redirect(admin_url('permission/deny'));

        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
            redirect(admin_url('product'));
        }
        //thuc hien xoa san pham
        $this->product_model->delete($id);
        // //xoa cac anh cua san pham
        // $image_link = './upload/product/'.$product->image_link;
        // if(file_exists($image_link))
        // {
        //     unlink($image_link);
        // }
        
        // //xoa cac anh kem theo cua san pham
        // $image_list = json_decode($product->image_list);
        // if(is_array($image_list))
        // {
        //     foreach ($image_list as $img)
        //     {
        //         $image_link = './upload/product/'.$img;
        //         if(file_exists($image_link))
        //         {
        //             unlink($image_link);
        //         }
        //     }
        // }
    }
    function _check_slug(){
          $slug = $this->input->post('slug');
          $info = $this->product_model->get_info($this->uri->rsegment(3));
          if($this->uri->rsegment('3')){
           $conditional = $this->product_model->get_list(array('where'=>array('slug !=' =>$info->slug,'slug'=>$slug)));
    
          }
          else{
            $conditional = $this->product_model->get_list(array('where'=>array('slug'=>$slug)));
          }

          if($conditional){
            $this->form_validation->set_message(__FUNCTION__,'Slug đã tồn tại!');
            return false;
            }
          else{
            return true;
          }

        }


         //Update san pham

        function update()
        {
           $id = isset($_POST['id']) ? $_POST['id'] : false;
           $price = isset($_POST['price']) ? (int)$_POST['price'] : false;
           $data = array();
           $data['price'] = $price;
           $this->product_model->update($id,$data);
           redirect(admin_url('product/index'));


        }
    
}



