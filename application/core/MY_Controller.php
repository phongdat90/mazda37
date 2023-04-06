<?php
Class MY_Controller extends CI_Controller
{
    //bien gui du lieu sang ben view
    public $data = array();
    
    function __construct()
    {
        //ke thua tu CI_Controller
        parent::__construct();
        
        $controller = $this->uri->segment(1);
        
        switch ($controller)
        {
            case 'admin' :
                {
                    //xu ly cac du lieu khi truy cap vao trang admin
                    $this->load->helper('admin');
                    $this->_check_login();
                    $login = $this->session->userdata('login');
                    
                    // $permission = (array)json_decode( $login['permissions']);
                    // if(empty($permission))
                    //     die();
                    // $this->data['permissions'] = $permission;

                    //lấy ra thông tin admin đăng nhập
                    $this->load->model('admin_model');
                    $admin_info = $this->admin_model->get_info($login['id']);
                    $this->data['admin_info'] = $admin_info;

                    /*
                    //nếu đăng nhập vào admin rùi mà admin nhập linh tinh trên url thì redirect về trang home
                    */
                    $controller2 = $this->uri->rsegment(1);
                    
                        $controller2 = ucfirst(strtolower($controller2)) . '.php';
                        if(!file_exists(FCPATH . 'application/controllers/admin/' . $controller2))
                        {
                            redirect(admin_url('home'));
                        } 
                    break;   
                    
                }
            default:
                {
                    //xu ly du lieu o trang ngoai
                    
                    //lay danh sach danh muc cha san pham
                    $this->load->model('catalog_model');
                    $input = array();
                    $input['where'] = array('parent_id' => 0);
                    $input['order'] = array('sort_order','ASC');
                    $catalog_list = $this->catalog_model->get_list($input);
//                    foreach ($catalog_list as $row)
//                    {
//                        $input['where'] = array('parent_id' => $row->id);
//                        $subs = $this->catalog_model->get_list($input);
//                        $row->subs = $subs;
//                    }
                    $this->data['catalog_list'] = $catalog_list;
                     //lấy danh sách sản phẩm mua nhiều
                   $this->load->model('product_model');
                    $input = array(); 
                    $input_order['order'] = array('view','DESC');
                    $input_order['limit'] = array('5','0');
                    $buy_one = $this->product_model->get_list($input_order);

                    $buy1 = array();
                    foreach ($buy_one as $key => $value) {
                        //lay slug catalog cua tung bai viet
                        $value->slug_catalog = $this->catalog_model->get_info($value->catalog_id)->slug;
                        $buy1[]= $value;
                    }
                    $this->data['buy1'] = $buy1;
                    

                    //lấy danh sách thông tin công ty(bảng footer)
                    $this->load->model('chantrang_model');
                    $list_footer = $this->chantrang_model->get_list();
                    $this->data['list_footer'] = $list_footer;

                    //lấy danh sách chinh_sach(bảng chinh_sach)
                    $this->load->model('chinh_sach_model');
                    $chinh_sach_footer = $this->chinh_sach_model->get_list();
                    $this->data['chinh_sach_footer'] = $chinh_sach_footer;

                    //lay danh sach bai viet moi
                    $this->load->model('news_model');
                    $input = array();
                    $input['limit'] = array(5, 0);
                    $news_list = $this->news_model->get_list($input);
                    $this->data['news_list'] = $news_list;
                    //Lấy danh sách hỗ trợ trực tuyến
                    $this->load->model('support_model');
                    $input = array();
                    $news_support = $this->support_model->get_list($input);
                    $this->data['news_support'] = $news_support;

                    //lấy banner 
                    $this->load->model('ads_model');
                    $input = array();
                    $input['limit'] = array('2','0');
                    $ads = $this->ads_model->get_list($input);
                    $this->data['ads'] = $ads;//gửi sang view


                    //lấy thông tin homepage
                    $this->load->model('homepage_model');
                    $id = 1;
                    $homepage = $this->homepage_model->get_info($id);
                    $this->data['homepage'] = $homepage;
                   
                    //lấy thông tin seopage_gioithieu
                    $this->load->model('seopage_gioithieu_model');
                    $seo_gioithieu = $this->seopage_gioithieu_model->get_info(1);
                    $this->data['seo_gioithieu'] = $seo_gioithieu;

                    //lấy thông tin seopage_tintuc
                    $this->load->model('seopage_tintuc_model');
                    $seo_tintuc = $this->seopage_tintuc_model->get_info(1);
                    $this->data['seo_tintuc'] = $seo_tintuc;

                    //lấy thông tin seopage_dichvu
                    $this->load->model('seopage_dichvu_model');
                    $seo_dichvu = $this->seopage_dichvu_model->get_info(1);
                    $this->data['seo_dichvu'] = $seo_dichvu;

                    //lấy thông tin seopage_baohanh
                    $this->load->model('seopage_baohanh_model');
                    $seo_baohanh = $this->seopage_baohanh_model->get_info(1);
                    $this->data['seo_baohanh'] = $seo_baohanh;

                    //lấy thông tin seopage_tuyển dung
                    // $this->load->model('seopage_tuyendung_model');
                    // $seo_tuyendung = $this->seopage_tuyendung_model->get_info(1);
                    // $this->data['seo_tuyendung'] = $seo_tuyendung;
                    
                    //lấy tất cả các tin tuyển dụng
                    $this->load->model('tuyendung_model');
                    $list_tuyendung1 = $this->tuyendung_model->get_list();
                    $this->data['list_tuyendung1'] = $list_tuyendung1;
                    //lay thong tin social
                    $this->load->model('social_model');
                    $social_1 = $this->social_model->get_info(1);
                    $this->data['social_1'] = $social_1;

                     $social_2 = $this->social_model->get_info(2);
                    $this->data['social_2'] = $social_2;

                    $social_3 = $this->social_model->get_info(3);
                    $this->data['social_3'] = $social_3;

                    $social_4 = $this->social_model->get_info(4);
                    $this->data['social_4'] = $social_4;
                    
                    

                    //Kiểm tra xem thành viên đã đăng nhập hay chưa
                    $user_id_login = $this->session->userdata('user_id_login');
                    $this->data['user_id_login'] = $user_id_login;
                    if($user_id_login) //nếu đã đăng nhập
                    {
                        $this->load->model('user_model');
                        $user_info = $this->user_model->get_info($user_id_login);
                        $this->data['user_info'] = $user_info;
                    }


                    //load thư viện giỏ hang
                    $this->load->library('cart');
                    //lấy tổng số sản phẩm có trong giỏ hàng
                    $total_items = $this->cart->total_items();
                    $this->data['total_items'] = $total_items; //truyền sang view
                }
            
        }
    }
    
    /*
     * Kiem tra trang thai dang nhap cua admin
     */
    private function _check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);
    
        $login = $this->session->userdata('login');
        $this->data['login'] = $login;
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'login')
        {
            redirect(admin_url('login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if($login && $controller == 'login')
        {
            redirect(admin_url('home/index'));
        }
    }
    

    /*
    //check level của ban quản trị
    */

    function getPermission(){
        $id = json_decode($this->session->userdata('login')['id']);
        $admin_level = $this->admin_model->get_info($id)->level;
        return $admin_level;
    }
}


