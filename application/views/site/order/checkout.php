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
                        <h4 class="box-title" lang="detailproduct_titlethesame">Xác nhận đơn hàng</h4>
                    </div>
                    <div class="box-content group">
                        <div class="section group">
                            Chúc mừng quý khách đã đặt mua xe thành công. Mazda Vinh sẽ liên hệ lại với quý khách.
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