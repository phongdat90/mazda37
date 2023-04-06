<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form liên hệ</title>
    <meta name="description" content="Mọi thông tin góp ý liên hệ với mazda vinh" />
   <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon"/>
    <?php $this->load->view('site/head');?>
</head>
<body style="background:#000000;">
<section class="cd-page">
    <?php $this->load->view('site/header');?>
    <div id="ctl00_MainContent_divMainContent">
        <div class="pathpage group">
            <div class="container row group">
                <ol class="breadcrumb">
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo base_url();?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a></li>
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Đăng ký lái thử" href="#"><span itemprop="title">Đăng ký lái thử</span></a></li>
                </ol>
            </div>
        </div>
        <div class="main group">
            <div class="container row group">
                <div class="contact-us">
                    <div class="box-center">
                        <h4 class="box-center-title" lang="contact_contact">Liên hệ</h4>
                        <div class="box-center-content group">
                            <div class="col col_4 col-info-contact">
                                <h2 class="company-name">MAZDA VINH</h2>
                                <p><b lang="contact_address">Địa chỉ</b> : Đại Lộ Lê Nin, Tp. Vinh, Nghệ An</p>
                                <p><b lang="contact_phone">Điện thoại</b> : <?php echo '0'.number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></p>
                                <p><b lang="contact_email">Email</b> : <a href="mailto:giaxemazda37.com@gmail.com" target="_top">giaxemazda37.com@gmail.com</a></p>
                                <p><b>Website</b> : <a title="MAZDA VINH" href="index.html">https://giaxemazda37.com</a></p>
                            </div>
                            <form id="frmLienHe" action="<?php echo base_url('lien-he');?>" method="post">
                                <div class="col col_8 col-send-contact">
                                    <table class="table-noborder">
                                        <tr>
                                            <td width="120px;"><span lang="contact_fullname">Họ tên</span> <span class="required">*</span></td>
                                            <td>
                                                <input name="name" type="text" id="ctl00_MainContent_ucLienHe_txtHoTen" maxlength="50" class="form-control" style="width:100%;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span lang="contact_phone">Điện thoại</span> <span class="required">*</span></td>
                                            <td>
                                                <input name="phone" type="text" id="ctl00_MainContent_ucLienHe_txtDienThoai" maxlength="30" class="form-control" style="width:100%;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span lang="contact_email">Email</td>
                                            <td>
                                                <input name="email" type="text" id="ctl00_MainContent_ucLienHe_txtEmail" maxlength="50" class="form-control" style="width:100%;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span lang="contact_content">Nội dung</span> <span class="required">*</span></td>
                                            <td>
                                                <textarea name="content" id="ctl00_MainContent_ucLienHe_txtNoiDung" class="form-control" style="width:100%;" rows="10"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <button type="submit" class="btn btn-default" style="width:160px;" lang="contact_btnsend">GỬI LIÊN HỆ</button>
                                                <a href="<?php echo base_url('lien-he')?>" class="btn btn-default" style="width:160px;" lang="contact_btnclear">Refresh</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-center">
                        <h4 class="box-center-title" lang="contact_maps">Bản đồ</h4>
                        <div class="box-center-content group" style="height:500px;">
                            <?php echo $homepage->google_map;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('site/footer');?>
</section>

<p id="back-top"><a href="javascript:void(0);" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a></p>
<?php $this->load->view('site/menu');?>
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



