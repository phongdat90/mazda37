<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giỏ hàng</title>
    <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon"/>
    <?php $this->load->view('site/head');?>
    <link rel="stylesheet" href="<?php echo public_url('dathang')?>/css/vinastar.css">
  </head>
<?php echo !empty($homepage->analytic) ? $homepage->analytic : ''?>
  <body style="background:#000000;">
  <section class="cd-page">
      <?php $this->load->view('site/header', $this->data);?>
      <div id="ctl00_MainContent_divMainContent">
          <div class="main group">
              <div class="container row group">
                  <div class="box box-product group">
                      <div class="box-header">
                          <h4 class="box-title" lang="detailproduct_titlethesame">Thông Tin Đơn Hàng</h4>
                        <?php if(!empty($message)):?>
                          <h3><?php echo $message;?></h3>
                        <?php endif;?>
                      </div>
                      <div class="box-content group">
                          <div class="section group">
                              <?php if($total_items>0):?>
                                  <div class="w_cart">

                                      <form action="<?php echo base_url('order/checkout')?>" method="post">
                                          <div class="col1cart box_grcart">
                                              <h2 class="info-customer">Thông tin khách hàng</h2>
                                              <div class="form_gr">
                                                  <label for="firstname">Họ &amp; Tên <span class="required">*</span></label>
                                                  <input type="text" name="name" class="input-text" placeholder="">
                                              </div>
                                              <div class="form_gr">
                                                  <label>Điện thoại <span class="required">*</span></label>
                                                  <input type="text" name="phone" class="input-text" placeholder="">
                                              </div>
                                              <div class="form_gr">
                                                  <label>Địa chỉ <span class="required">*</span></label>
                                                  <input type="text" name="address" class="input-text" placeholder="">
                                              </div>


                                          </div>
                                          <div class="col2cart box_grcart">


                                              <h2 class="info-customer">Phương thức thanh toán</h2>
                                              <div class="container_tabs">
                                                  <div class="tabsradio">
                                                      <label>
                                                          <input type="radio" name="type" value="Individual" id="type_0" checked="checked" />
                                                          Thanh toán khi nhận hàng</label>
                                                      <label>
                                                          <input type="radio" name="type" value="Company" id="type_1" />
                                                          Chuyển khoản (thẻ ATM hoặc Internet Banking)</label>
                                                  </div>
                                                  <div id="Company_box" class="tab-contentcart">
<!--                                                      <div class="w_cttabs">-->
<!--                                                          Bạn vui lòng liên hệ với mazda vinh qua thông tin sau để chuyển khoản:-->
<!--                                                          <div class="item_cttabs">-->
<!--                                                              <strong>Ngân hàng Vietcombank (chi nhánh Hà Nội)</strong>-->
<!--                                                              <p>Tên tài khoản: Phan Van Linh</p>-->
<!--                                                              <p>Số tài khoản: --><?php //echo $homepage->hotline;?><!--</p>-->
<!--                                                          </div>-->
<!--                                                      </div>-->
                                                  </div>

                                              </div><!-- container -->

                                              <div class="form_gr">
                                                  <label>Ghi chú</label>
                                                  <textarea name="message" class="input-text" placeholder="Yêu cầu đặc biệt của bạn. Ví dụ: Giao hàng trong giờ hành chính, người nhận hàng thay,..." rows="3"></textarea>
                                              </div>
                                              <button class="btn_cartgr1" type="submit">Hoàn tất mua hàng</button>
                                          </div>
                                      </form>
                                      <form action="<?php echo base_url('cart/update')?>" method="post">
                                          <div class="col3cart box_grcart">
                                              <h2 class="info-customer">Thông tin đơn hàng</h2>
                                              <?php $total_amount = 0;?>
                                              <?php if(count($carts) > 0):?>
                                                  <?php foreach ($carts as $row) : ?>
                                                      <?php $total_amount = $total_amount + $row['subtotal']?>
                                                      <div class="dh012_w">
                                                          <div class="img_dh0112">
                                                              <img src="<?php echo $row['image_link']?>" alt="<?php echo $row['name']?>">
                                                          </div>
                                                          <div class="txt_dh0112">
                                                              <p><strong>Tên sản phẩm:</strong> <?php echo $row['name']?></p>
                                                              <p><strong>Đơn giá:</strong> <?php echo number_format($row['price'])?> VNĐ</p>
                                                              <p><strong>Số lượng:</strong>
                                                                  <input style="border:1px solid #B87333" type="text" name="qty_<?php echo $row['id']?>" id="<?php echo $row['rowid']?>" placeholder="" value="<?php echo $row['qty']?>" class="qty_cart form-control w_50" id="number" size="5" />
                                                              </p>
                                                              <a href="<?php echo base_url('cart/delete/'.$row['id'])?>" class="btn_cartgr1"><strong>Xóa sản phẩm</strong></a>
                                                          </div>
                                                      </div>
                                                  <?php endforeach;?>
                                              <?php endif;?>
                                              <div class="gr_btnform3011">
                                                  <div class="gr_sumform">
                                                      <!-- <p><strong>Tổng cộng:</strong><span class="price_sm">1.500.000 đ</span></p>
                                                      <p><strong>Phí vận chuyển:</strong><span class="price_sm">20.000 đ</span></p> -->
                                                      <p><strong>Tổng tiền:</strong><span><?php echo number_format($total_amount)?> VNĐ</span></p>
                                                  </div>
                                                  <div class="btnform3011_gr">
                                                      <a href="<?php echo base_url()?>" class="btnform3011_1 btn_cartgr">Tiếp tục mua hàng</a>
                                                      <!-- <button class="btn_cartgr" type="submit">Cập nhật đơn hàng</button> -->
                                                      <a href="<?php echo base_url('cart/delete')?>" class="btn_cartgr">Xóa hết</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              <?php else:?>
                                  <h4>Không có sản phẩm nào trong giỏ hàng vui lòng quay lại trang chủ để thêm sản phẩm vào giỏ hàng</h4>
                              <?php endif;?>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>
      <?php $this->load->view('site/footer');?>
  </section>
  <div id="ctl00_divAdLeftModule" class="adv-leftslider"></div>
  <div id="ctl00_divAdRightModule" class="adv-rightslider"></div>
  <p id="back-top"><a href="javascript:void(0);" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a></p>
  <a class="btn-call-now" href="tel:0<?php echo $homepage->hotline;?>" onclick="return gtag_report_conversion('tel:0<?php echo $homepage->hotline;?>')"><em class="fa fa-phone">&nbsp; </em></a>
  <?php $this->load->view('site/menu', $this->data);?>
  <style type="text/css">
      .btn-ads {
          color: #fff;
          font-size: 120%;
          font-weight: 700;
          padding: 10px 35px;
          background-color: #0092D5;
          border: 1px solid rgba(0,0,0,0.1);
          -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
          -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
          box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          border-radius: 4px;
      }

      .pathpage {border-bottom: none;}

      .actions-link {
          overflow: hidden;
          margin-top: 15px;
      }
      .actions-link li {
          height: 30px;
          float: left;
          margin-right: 15px;
          width: 30px;
          line-height: 30px !important;
          text-align: center;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
          border-radius: 50%;
          background-color: #717d91;
      }
      .actions-link li a {
          color: #ffffff;
          font-size: 18px;
      }
      .overhidden {
          overflow: hidden;
          margin-left:15px;
      }
      .btn-kham-pha {
          background: #717d91;
          padding-left: 15px;
          border: none;
          position: relative;
          text-align: left;
          display: inline-block;
          line-height: 30px;
          height: 30px;
          font-weight: normal;
          float: left;
          margin-right: 15px;
          min-width: 140px;
          color: #ffffff;
          margin-top: 15px;
      }
      .btn-kham-pha > em {
          position: absolute;
          top: 0;
          right: 0;
          width: 30px;
          float: right;
          text-align: center;
          background: #c4172c;
          line-height: 30px;
          font-size: 1em;
      }
      .content-price {
          margin-top: 10px;
          margin-bottom: 10px;
      }
      .icon-link {
          margin-left: 5px;
      }
      .btn-kham-pha:hover {
          color: #fff;
      }
      .prices {
          background: #eeeeee;
          border-top: 1px solid #ffffff;
      }
      .prices .item {
          padding-left: 20px;
          border-top: 1px solid #ffffff;
          border-bottom: 1px solid transparent;
          margin-top: -1px;
          display: table;
      }
      .prices .item > .name {
          display: table-cell;
          font-family: UTMNeosansintel;
          font-weight: bold;
          padding: 5px 0;
          line-height: 30px;
          width: 240px;
      }
      .prices .item > .price {
          line-height: 30px;
          font-weight: bold;
          text-align: right;
          color: #c9252b;
          font-size: 15px;
          display: table-cell;
          padding: 5px;
          width: 230px;
      }
      .prices .item .estimates {
          display: table-cell;
          padding: 5px 0;
          text-align: right;
          width: 60px;
      }
      .prices .item .estimates > a {
          display: inline-block;
          line-height: 30px;
          width: 30px;
          text-align: center;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
          border-radius: 50%;
          background-color: #717d91;
          color: #ffffff;
      }
      .prices .item .estimates > a em {
          line-height: 30px;
      }
      .prices .item .estimates > a em:hover {
          font-weight: 600;
      }
      div .fb-comments
      {
          width: 100%!important;
      }
      div .fb-comments span
      {
          width: 100%!important;
      }
      div .fb-comments span iframe
      {
          width: 100%!important;
      }
      @media screen and (max-width: 650px) {
          .btn-shopping-cart {
              display: none;
          }
          .btn-call-now {
              left: 0;
              border-bottom-right-radius: 30px;
              border-top-right-radius: 30px;
              border-bottom-left-radius: 0px;
              border-top-left-radius: 0px;
          }
      }
  </style>
  </body>
</html>