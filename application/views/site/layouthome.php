<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
	<title><?php echo !empty($homepage->site_title) ? $homepage->site_title : 'Mazda-vinh'?></title>
	<meta name="description" content="<?php echo !empty($homepage->site_desc) ? $homepage->site_desc : 'Mazda-vinh'?>" />
	<meta name="keyword" content="<?php echo !empty($homepage->site_key) ? $homepage->site_key : 'Mazda-vinh' ?>" />
    <link rel="canonical" href="<?php echo base_url();?>" />


	<link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon"/>
	<?php $this->load->view('site/head');?>
<meta property="og:title" content="<?php echo !empty($homepage->site_title) ? $homepage->site_title : 'Mazda-vinh'?>" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo base_url();?>" /> 
<meta property="og:image" content="https://driver.gianhangvn.com/file/mazda-logo-1108939f26888.png" />
<meta itemprop="description" content="<?php echo !empty($homepage->site_desc) ? $homepage->site_desc : 'Mazda-vinh'?>"/>
<meta property="og:site_name" content="<?php echo !empty($homepage->site_title) ? $homepage->site_title : 'Mazda-vinh'?>" />
	<!---GOOGLE ANALITIC-->
	<?php echo !empty($homepage->analytic) ? $homepage->analytic : ''?>
	<!---END GOOGLE ANALITIC-->
</head>
<body style="background:#000000;">
<section class="cd-page">
    <?php $this->load->view('site/header', $this->data);?>
    <div id="ctl00_MainContent_divMainContent">
        <div class="slideshow group">
            <div class="full-container group">
                <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-banner" class="active" data-slide-to="0"></li>
                      <?php for($i = 1; $i < $slide_total; $i++):?>
                        <li data-target="#carousel-banner" data-slide-to="<?php echo $i;?>"></li>
                      <?php endfor;?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="<?php echo $slide_list[0]->link;?>"><img class="img-responsive" src="<?php echo $slide_list[0]->image_link;?>"/></a>
                        </div>
                    <?php foreach($slide_list as $row): ?>
                        <div class="item">
                            <a href="<?php echo $row->link;?>"><img class="img-responsive" src="<?php echo $row->image_link;?>"/></a>
                        </div>
                    <?php endforeach;?>
                    </div>
                    <a class="carousel-control left" href="#carousel-banner" role="button" data-slide="prev">‹</a><a class="carousel-control right" href="#carousel-banner" role="button" data-slide="next">›</a>
                </div>
            </div>
        </div>

        <?php $this->load->view('site/home/index', $this->data);?>

        <div id="ctl00_MainContent_ucTrangChu_divAdPopup"></div>
    </div>

    <?php $this->load->view('site/footer');?>
</section>
<div id="ctl00_divAdLeftModule" class="adv-leftslider"></div>
<div id="ctl00_divAdRightModule" class="adv-rightslider"></div>
<p id="back-top"><a href="javascript:void(0);" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a></p>
<?php $this->load->view('site/menu', $this->data);?>
<style type="text/css">
    .btn-ads {
        color: #fff;
        font-size: 120%;
        font-weight: 700;
        padding: 10px 35px;
        background-color: #0092D5;
        border: 1px solid rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
        -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .pathpage {
        border-bottom: none;
    }

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
        margin-left: 15px;
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
<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            appId: '',
            cookie: true,
            xfbml: true,
            version: 'v3.2'
        });
    };
    function FormatNumber(pNumber) {
        var num = pNumber.toString().replace(/\$|\,/g, '');
        if (isNaN(num)) {
            num = "";
        }
        sign = (num == (num = Math.abs(num)));
        num = Math.floor(num * 100 + 0.50000000001);
        num = Math.floor(num / 100).toString();
        for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++) {
            num = num.substring(0, num.length - (4 * i + 3)) + ',' + num.substring(num.length - (4 * i + 3));
        }
        return (((sign) ? '' : '-') + num);
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
</body>
</html>