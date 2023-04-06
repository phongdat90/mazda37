<!DOCTYPE html>
<html lang="vi">
<head>
    <title>
        <?php echo !empty($catalog->site_title) ? $catalog->site_title : $catalog->name?>
    </title>
    <meta name="description" content="<?php echo !empty($catalog->meta_desc) ? $catalog->meta_desc: '' ?>" />
    <meta name="keyword" content="<?php echo !empty($catalog->meta_key) ? $catalog->meta_key : 'may tinh,laptop,phu kien laptop,linh kien dien tu' ?>" />
    <link rel="canonical" href="<?php echo base_url($catalog->slug).'/'?>" />
    <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="object" />
    <!-- <meta property="fb:admins" content="662484515" /> -->
    <meta property="og:title" content="<?php echo !empty($catalog->site_title) ? $catalog->site_title : $catalog->name?>" />
    <meta property="og:description" content="<?php echo !empty($catalog->meta_desc) ? $catalog->meta_desc: $catalog->name ?>" />
    <meta property="og:url" content="<?php echo base_url($catalog->slug).'/'?>" />
    <meta property="og:image" content="<?php echo $catalog->image_banner;?>" />
    <!-- <meta property="fb:app_id" content="" /> -->
    <?php $this->load->view('site/head');?>
    <?php echo !empty($homepage->analytic) ? $homepage->analytic : ''?>
</head>
<body style="background:#000000;">
<section class="cd-page">
    <?php $this->load->view('site/header', $this->data);?>
    <div id="ctl00_MainContent_divMainContent">
        <div class="pathpage group">
            <div class="container row group">
                <ol class="breadcrumb">
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo base_url();?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a></li>
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Sản phẩm" href="#"><span itemprop="title">Danh Mục</span></a></li>
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="<?php echo $catalog->name;?>" href="<?php echo base_url($catalog->slug).'/';?>"><span itemprop="title"><?php echo $catalog->name;?></span></a></li>
                </ol>
            </div>
        </div>
        <div class="main group">
            <div class="container row group">
                <!--==============================SAN PHAM================================-->
                <h1 class="page-heading"><?php echo $catalog->name;?></h1>
                <div class="intro">
                    <?php echo $catalog->intro;?>
                </div>
                <div class="grid-sort group">
                    <div class="grid-left">
                        <label lang="catpro_sortby">Sắp xếp theo</label>
                        <select class="form-control" id="cboColumnOrder" onchange="ReLoadData()">
                            <option selected="selected" value="1" lang="catpro_sortby_default">Mặc định</option>
                            <option value="2" lang="catpro_sortby_lowest">Giá thấp nhất</option>
                            <option value="3" lang="catpro_sortby_hightestprice">Giá cao nhất</option>
                            <option value="4" lang="catpro_sortby_name_az">Tên sản phẩm : A đến Z</option>
                            <option value="5" lang="catpro_sortby_name_za">Tên sản phẩm : Z đến A</option>
                        </select>
                    </div>
                    <div class="grid-left">
                        <label lang="catpro_display">Hiển thị</label>
                        <select class="form-control" id="cboDisplayRecord" onchange="ReLoadData()">
                            <option value="15">15</option>
                            <option value="27" selected="selected">27</option>
                            <option value="33">33</option>
                            <option value="39">39</option>
                        </select>
                        <span lang="catpro_onepage">mỗi trang</span>
                    </div>
                    <div class="grid-right">
                        <label lang="catpro_view">Xem</label>
                        <a id="viewgrid" class="grid-view selected" rel="nofollow" href="javascript:;" title="Grid"><i class="fa fa-th-large"></i></a>
                        <a id="viewlist" class="grid-view" rel="nofollow" href="javascript:;" title="List"><i class="fa fa-th-list"></i></a>
                    </div>
                </div>

                <div class="grid-content group">
                    <div class="section group">
                      <?php if(count($buy) > 0) :?>
                      <?php foreach ($buy as $row) :?>
                        <div class="col col_4">
                            <div class="product group">
                                <div class="product-image">
                                    <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>"/></a>
                                </div>
                                <div class="caption">
                                    <h3 class="name"><a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><?php echo $row->name;?></a></h3>
                                    <div class="content-price">
                                        <span class="price"><?php echo number_format($row->price,0,',','.');?> VND</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php endforeach;?>
                      <?php endif;?>
                    </div>
                <?php if(count($buy2) > 0) :?>
                    <div class="section group">
                        <?php foreach($buy2 as $row) :?>
                            <div class="col col_4">
                                <div class="product group">
                                    <div class="product-image">
                                        <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>"/></a>
                                    </div>
                                    <div class="caption">
                                        <h3 class="name"><a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><?php echo $row->name;?></a></h3>
                                        <div class="content-price">
                                            <span class="price"><?php echo number_format($row->price,0,',','.');?> VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if(count($buy3) > 0) :?>
                    <div class="section group">
                        <?php foreach($buy3 as $row) :?>
                            <div class="col col_4">
                                <div class="product group">
                                    <div class="product-image">
                                        <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>"/></a>
                                    </div>
                                    <div class="caption">
                                        <h3 class="name"><a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><?php echo $row->name;?></a></h3>
                                        <div class="content-price">
                                            <span class="price"><?php echo number_format($row->price,0,',','.');?> VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                </div>


                <script type="text/javascript">
                    // function IsCheckValidData() {
                    //                    //     var valid = true;
                    //                    //     return valid;
                    //                    // }

                    // function BuildUrlSearch() {
                    //     var defaultSoDuLieuToiDa = 27;
                    //     var defaultOrderBy = 1;
                    //     var queries = new Array();
                    //
                    //     var text = $('#txtTuKhoaTimKiem').val().trim();
                    //     if (text.length > 0) {
                    //         queries.push('txt=' + text);
                    //     }
                    //
                    //     var orderBy = parseInt($('#cboColumnOrder').val());
                    //     if (orderBy > 0 && orderBy != defaultOrderBy) {
                    //         queries.push("s=" + orderBy);
                    //     }
                    //
                    //     var displayRow = parseInt($('#cboDisplayRecord').val());
                    //     if (displayRow > 0 && displayRow != defaultSoDuLieuToiDa) {
                    //         queries.push("d=" + displayRow);
                    //     }
                    //
                    //     var currenturl = location.href.split('?')[0];
                    //     if (queries.length > 0) {
                    //         window.location.href = currenturl + "?" + queries.join("&");
                    //     }
                    //     else {
                    //         window.location.href = currenturl;
                    //     }
                    // }
                    //
                    // function ReLoadData() {
                    //     if (IsCheckValidData()) {
                    //         BuildUrlSearch();
                    //     }
                    // }

                    function ViewProduct(obj) {
                        if(obj.hasClass("selected")){
                            return;
                        }
                        if(typeof(Storage) !== "undefined"){
                            if ($("#viewlist").hasClass("selected")) {
                                localStorage.setItem("memberviewproduct", "thum");
                            }
                            else {
                                localStorage.setItem("memberviewproduct", "list");
                            }
                        }
                        $(".grid-content").toggleClass('product-list');
                        $("#viewlist").toggleClass('selected');
                        $("#viewgrid").toggleClass('selected');
                    }

                    $(document).ready(function () {

                        $(".grid-view").click(function(){
                            ViewProduct($(this));
                        });

                        if(typeof(Storage) !== "undefined") {
                            if (localStorage.getItem("memberviewproduct") == null) {
                                localStorage.setItem("memberviewproduct", "thum");
                            }
                            var viewproduct = localStorage.getItem("memberviewproduct");
                            if(viewproduct == "list"){
                                ViewProduct($("#viewlist"));
                            }
                        }
                    });
                </script>

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
    .intro {
        background: #d9edf7;
        padding: 12px;
        margin-top:10px;
        border-color: #bce8f1;
        text-align: justify;
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
<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>
</body>

</html>