<?php 
Class Order extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');

	}
	/*
	//Lấy thông tin của khách hàng
	*/
	function checkout()
	{
		//lấy thông tin giỏ hàng
		$carts = $this->cart->contents();
		$this->data['carts'] = $carts; //truyền sang view chú ý biến này là mảng dữ liệu
		//tổng số sản phẩm có trong giỏ hàng
		$total_items = $this->cart->total_items();
		if($total_items < 0)
		{
			redirect();
		}
		//lấy tổng số tiền cần thanh toán
		$total_amount = 0;
		foreach($carts as $row)
		{
			$total_amount = $total_amount + $row['subtotal'];
		}
		$this->data['total_amount'] = $total_amount;
		//nhận thông báo từ biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		//Nếu thành viên đã đăng nhập thì lấy thông tin thành viên
		/*

		$user = '';
		$user_id = 0;
		if($this->session->userdata('user_id_login'))
		{
			//lấy thông tin
			$user_id = $this->session->userdata('user_id_login');
			$user = $this->user_model->get_info($user_id);
		}
		$this->data['user'] = $user;
		*/

		//load thư viên form_validation và helper form
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post()) //nếu có dữ liệu post lên
		{
			//$this->form_validation->set_rules('email','Email nhận hàng','required|valid_email');
			$this->form_validation->set_rules('name','Họ và tên','required');
			$this->form_validation->set_rules('phone','Số điện thoại','required');
			
			$this->form_validation->set_rules('address','Địa chỉ nhận hàng','required');

			//$this->form_validation->set_rules('payment','Cổng thanh toán','required');
			//nếu nhập liệu chính xác
			if($this->form_validation->run())
			{
				//lấy các giá trị nhập vào
				//$user_email = $this->input->post('email');
				$user_name = $this->input->post('name');
				$user_phone = $this->input->post('phone');
				$message = $this->input->post('message');
				$address = $this->input->post('address');
				$payment = $this->input->post('payment');
				//thêm vào cơ sở dữ liệu
				$data = array(
					'status'        => 0,//trạng thái chưa thanh toán
					//'user_id'       =>$user_id,//id thành viên mua hàng nếu đã đăng nhập
					'user_name'     => $user_name,
					'user_email'    => '',
					'user_phone'    => $user_phone,
					'address'       => $address,
					'message'       => $message, //ghi chú khi mua hàng
					'amount'        =>$total_amount,//tổng số tiền cần thanh toán
					'payment'		=>'Thanh toán tại showroom',
					'created'       =>now(),
					);
//				if($payment == 'Individual')
//				{
//					$data['payment'] = 'Thanh toán khi nhận hàng';
//				}else
//				{
//					$data['payment'] = 'Chuyển khoản';
//				}
			//thêm dữ liệu vào transaction
				$this->load->model('transaction_model');
				$this->transaction_model->create($data);
				$transaction_id = $this->db->insert_id(); //lấy ra id giao dịch vừa thêm vào

			//thêm vào bảng order(chi tiết đơn hàng)
				$this->load->model('order_model');
			//lặp các sản phẩm trong giỏ hàng và thêm từng sản phẩm vào bảng order
				foreach($carts as $row)
				{
					$data = array(
						'transaction_id' => $transaction_id,
						'product_id'     =>$row['id'],
						'qty'            =>$row['qty'],
						'amount'         =>$row['subtotal'],
						'status'         => 0,
						'product_name'   => $row['name'],
						'image_link'     => $row['image_link'],
						);
				
				$this->order_model->create($data);
				}
				//sau khi thêm xong xóa toàn bộ giỏ hàng
				$this->cart->destroy();
					//tạo ra thông báo
				//$this->session->set_flashdata('message','Quý khách đã đặt hàng thành công, chúng tôi sẽ kiểm tra và liên hệ gửi hàng trong thời gian sớm nhất');
				$this->load->view('site/order/checkout',$this->data);
				/*
				thanh toán online
				if($payment == 'offline')
				{
					//tạo ra nội dung thông báo
					$this->session->set_flashdata('message','Bạn đã đặt hàng thành công, chúng tôi sẽ kiểm tra và gửi hàng');
					//chuyển tới trang chủ (nên chuyển đến trang chi tiết đơn hàng)
					redirect();
				}elseif(in_array($payment, array('nganluong','baokim')))
				{
					//load thư viện payment
					$this->load->library('payment/'.$payment .'_payment');
					//chuyển sang cổng thanh toán
					
				}
				*/	
			} else {
                $this->session->set_flashdata('message','Quý khách vui lòng điền đầy đủ thông tin!');
                redirect(base_url('cart/index'));
            }
		}
	}

	

}