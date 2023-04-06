<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo !empty($product->site_title) ? $product->site_title : $product->name?>
    </title>
    <meta name="description" content="<?php echo !empty($product->meta_desc) ? $product->meta_desc: $product->name ?>" />
    <meta name="keywords" content="<?php echo !empty($product->meta_key) ? $product->meta_key : $product->name; ?>" />
    <link rel="canonical" href="<?php echo base_url($product->slug.'-'.$product->id.'.html')?>" />
    <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:admins" content="100000200272962" />
    <meta property="og:title" content="<?php echo !empty($product->site_title) ? $product->site_title : $product->name?>" />
    <meta property="og:description" content="<?php echo !empty($product->meta_desc) ? $product->meta_desc: $product->name ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo base_url($product->slug.'-'.$product->id.'.html')?>" />
    <meta property="og:image" content="<?php echo $product->image_link;?>" />
    <?php $this->load->view('site/head');?>
</head>
<?php echo !empty($homepage->analytic) ? $homepage->analytic : ''?>
<body style="background:#000000;">
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<section class="cd-page">
    <?php $this->load->view('site/header', $this->data);?>
    <div id="ctl00_MainContent_divMainContent">
        <div class="pathpage group">
            <div class="container row group">
                <ol class="breadcrumb">
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo base_url();?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a></li>
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="<?php echo $catalog->name;?>" href="<?php echo base_url($catalog->slug).'/';?>"><span itemprop="title"><?php echo $catalog->name;?></span></a></li>
                    <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="<?php echo $product->name;?>" href="<?php echo base_url($product->slug).'-'.$product->id.'.html'?>"><span itemprop="title"><?php echo $product->name;?></span></a></li>
                </ol>
            </div>
        </div>
        <div class="main group">
            <div class="container row group">
                <div class="primary-product group" itemscope itemtype="http://schema.org/Product">
                    <div class="image-block group">
                        <div id="carousel" class="carousel slide carousel-image" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <a class="item active fancybox" rel="galleryProduct" href="<?php echo $product->image_link;?>">
                                    <img src="<?php echo $product->image_link;?>">
                                </a>
                            <?php if(count(json_decode($product->image_list)) > 0) :?>
                                <?php foreach(json_decode($product->image_list) as $row):?>
                                    <a class="item fancybox" rel="galleryProduct" href="<?php echo $row;?>">
                                        <img src="<?php echo $row;?>">
                                    </a>
                                <?php endforeach;?>
                            <?php endif;?>
                            </div>
                        </div>
                        <div id="thumbcarousel" class="carousel slide carousel-thumb" data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a data-target="#carousel" data-slide-to="0" class="thumb selected">
                                        <img src="<?php echo $product->image_link;?>">
                                    </a>
                                    <?php if(count(json_decode($product->image_list)) > 0) :?>
                                    <?php foreach(json_decode($product->image_list) as $key => $row):?>
                                        <a data-target="#carousel" data-slide-to="<?php echo $key + 1;?>" class="thumb">
                                            <img src="<?php echo $row;?>">
                                        </a>
                                    <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <a class="carousel-control left" href="#thumbcarousel" role="button" data-slide="prev">‹</a><a class="carousel-control right" href="#thumbcarousel" role="button" data-slide="next">›</a></div>
                    </div>
                    <div class="detail-block group">
                        <h1 class="product-name" itemprop="name"><?php echo $product->name;?></h1>
                        <div class="social-sharing">
                            <button type="button" class="btn btn-google-plus" onclick="javascript:OpenSocialSharing('google-plus', '<?php echo $product->name?>', '<?php echo base_url($product->slug).'-'.$product->id.'.html'?>')">
                                <i class="fa fa-google-plus"></i> Google+
                            </button>
                            <button type="button" class="btn btn-facebook" onclick="javascript:OpenSocialSharing('facebook', '<?php echo $product->name?>', '<?php echo base_url($product->slug).'-'.$product->id.'.html'?>')">
                                <i class="fa fa-facebook"></i> Share
                            </button>
                            <button type="button" class="btn btn-twitter" onclick="javascript:OpenSocialSharing('twitter', '<?php echo $product->name?>', '<?php echo base_url($product->slug).'-'.$product->id.'.html'?>')">
                                <i class="fa fa-twitter"></i> Tweet
                            </button>
                        </div>

                        <p class="product-row" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <label lang="detailproduct_price">Giá sản phẩm :</label>
                            <span class="product-price"><?php echo number_format($product->price,0,',','.');?> VND</span>
                            <meta itemprop="priceCurrency" content="VND" />
                            <meta itemprop="availability" content="Còn hàng! Đặt hàng ngay" />
                            <meta itemprop="price" content="<?php echo $product->price;?>" />
                        </p>
                        <p class="product-row">
                            <label lang="detailproduct_production">Xuất xứ :</label>
                            <span itemprop="brand"><?php echo $product->hsx;?></span>
                        </p>

                        <p class="product-row">
                            <label lang="detailproduct_warranty">Bảo hành :</label>
                            <span><?php echo $product->warranty;?></span>
                        </p>

                        <h2 class="product-row short-description" itemprop="description"><?php echo $product->intro;?></h2>


                        <a href="<?php echo base_url('cart/add').'/'.$product->id?>" class="btn btn-default" lang="detailproduct_btnbuy">ĐẶT HÀNG NGAY</a>

                        <div class="product-hotline">
                            <p><span lang="detailproduct_hotline">HOTLINE TƯ VẤN : </span> <a href="tel:<?php echo '0'.$homepage->hotline;?>" class="phone"><?php echo '0'.number_format($homepage->hotline, 0,',','.');?> - <?php echo $homepage->page_face;?></a></p>
                        </div>
                    </div>
                </div>
                <!--==============================DETAIL PRODUCT================================-->
                <div class="info-product">
                    <ul class="tabs group">
                        <li class="active"><a role="tab" data-toggle="tab" href="#tab0">Chi tiết</a></li>
                    </ul>
                    <div class="tab-content detail-content-dailyxe">
                        <?php echo $product->content;?>
                    </div>
                </div>
            </div>

            <div class="container row group">
                <div class="box-center">
                    <h4 class="box-center-title" lang="detailproduct_comment">Bình luận</h4>
                    <div class="box-center-content">
                        <div class="fb-comments" data-href="<?php echo base_url($product->slug).'-'.$product->id.'.html'?>" data-numposts="5" data-width="100%"></div>
                    </div>
                </div>
            </div>

            <div class="container row group">
                <div class="box box-product group">
                    <div class="box-header">
                        <h4 class="box-title" lang="detailproduct_titlethesame">Sản phẩm cùng loại</h4>
                    </div>
                    <div class="box-content group">
                        <div class="section group">
                            <?php if(count($buy) > 0) :?>
                                <?php foreach($buy as $row) :?>
                                    <div class="col col_4">
                                <div class="product">
                                    <div class="product-image">
                                        <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>"/></a>

                                    </div>
                                    <div class="caption">
                                        <h3 class="name"><a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><?php echo $row->name;?></a></h3>
                                        <div class="content-price">
                                            <span class="price"><?php echo number_format($row->price, 0, ',', '.')?> VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php endforeach;?>
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