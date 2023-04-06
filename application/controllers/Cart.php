<?php 
Class Cart extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->library('cart'); vì trong my_controller đã load ra rồi
	}

	/*
	//Thêm vào sản phẩm vào giỏ hang
	*/
	function add()
	{
		//lấy ra sản phẩm muốn thêm vào giỏ hàng
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		//lấy thông tin sản phẩm theo id
		$this->load->model('product_model');
		$product = $this->product_model->get_info($id);

		if(!$product)
		{
			redirect();
		}
		//thông tin sản phẩm thêm vào giỏ hàng

		$qty = 1;
		$price = $product->price;
		if($product->discount > 0)
		{
			$price = $product->price - $product->discount;
		}
		$data = array();
		$data['id'] = $product->id;
		$data['qty'] = $qty;
		$data['name'] = url_title($product->name);
		$data['image_link'] = $product->image_link;
		$data['price'] = $price;
		if(!empty($product->ma_sp))
		{
			$data['ma_sp'] = $product->ma_sp;
		}
		$this->cart->insert($data);
		redirect(base_url('cart/index'));

	}

	/*
	//hiện thị ra các sản phẩm trong giỏ hàng
	*/

	function index()
	{
		//lấy thông tin giỏ hàng
		$carts = $this->cart->contents();
		$this->data['carts'] = $carts; //truyền sang view chú ý biến này là mảng dữ liệu
        //lay message thong bao
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		//tổng số sản phẩm có trong giỏ hàng
		$total_items = $this->cart->total_items();
		$this->data['total_items'] = $total_items; //truyền sang view
		//load view
		
		$this->load->view('site/cart/index', $this->data);
		
	}

	/*
	//Cập nhật giỏ hàng
	*/
	function update()
	{ 

		//lấy thông tin giỏ hàng
		    $carts = $this->cart->contents();
		    $id = isset($_POST['rowid']) ? $_POST['rowid'] : false;
			$number = isset($_POST['qty']) ? (int)$_POST['qty'] : false;
			//lấy số lượng sản phẩm
			// $total_qty = $this->input->post('qty_'.$row['id']);
			//$total_qty = $number;
			$data = array();
			$data['rowid'] = $id;//cập nhất sản phẩm có rowid bằng $key
			$data['qty'] = $number;
			$this->cart->update($data);
			//chuyển về trang thông tin giỏ hang
			redirect(base_url('cart/index'));
		
		//lấy thông tin giỏ hàng
		// $carts = $this->cart->contents();
		// foreach ($carts as $key => $row)
		// {
		// 	//lấy số lượng sản phẩm
		// 	$total_qty = $this->input->post('qty_'.$row['id']);
		// 	$data = array();
		// 	$data['rowid'] = $key;//cập nhất sản phẩm có rowid bằng $key
		// 	$data['qty'] = $total_qty;
		// 	$this->cart->update($data);
		// }
		// //chuyển về trang thông tin giỏ hang
		// redirect(base_url('cart/index'));

	}

	/*
	//xóa sản phẩm trong gio hàng
	*/
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		//trường hợp xóa 1 sản phẩm
		if($id > 0) //chứng tỏ xóa 1 sản phẩm
		{
				//lấy thông tin giỏ hàng
			$carts = $this->cart->contents();
			
			foreach ($carts as $key => $row)
			{
				if($row['id'] == $id)
				{
					//cập nhật qty = 0 là được
					$data = array();
					$data['rowid'] = $key;//cập nhất sản phẩm có rowid bằng $key
					$data['qty'] = 0;
					$this->cart->update($data);
				}
			
			}
		} else
		{
			//xóa toàn bộ giỏ hàng
			$this->cart->destroy();
		}

		//chuyển về trang thông tin giỏ hang
		redirect(base_url('cart/index'));
	}
	
}