<!DOCTYPE html>
<html lang="vi">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo !empty($info->site_title) ? $info->site_title : $info->title?></title>
    <meta name="description" content="<?php echo isset($info->meta_desc) ? $info->meta_desc : ''?>" />
     <link rel="canonical" href="<?php echo base_url('gioi-thieu/'.$info->slug.'.html').'/'?>" />
    <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon"/>
    <?php $this->load->view('site/head');?>
	<?php echo !empty($homepage->analytic) ? $homepage->analytic : ''?>
	<!---END GOOGLE ANALITIC-->
</head>
<body style="background:#000000;">

<section class="cd-page">
    <?php $this->load->view('site/header');?>
    <div id="ctl00_MainContent_divMainContent">
        <div class="pathpage group">
            <div class="container row group">
                <ol class="breadcrumb">
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo base_url();?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a></li>
                    <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Tin tức" href="#"><span itemprop="title">Giới Thiệu</span></a></li>
                    <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="<?php echo $info->title;?>" href="<?php echo base_url('gioi-thieu').'/'.$info->slug.'.html'?>"><span itemprop="title"><?php echo $info->title;?></span></a></li>
                </ol>
            </div>
        </div>
        <div class="main group">
            <div class="container row group">
                <div class="col col-left">
                    <div class="news group">

                        <h1 class="news-title"><?php echo $info->title;?></h1>
                        <div class="social-sharing">
                            <button type="button" class="btn btn-google-plus" onclick="javascript:OpenSocialSharing('google-plus', '<?php echo $info->title;?>', '<?php echo base_url('gioi-thieu').'/'.$info->slug.'.html'?>')">
                                <i class="fa fa-google-plus"></i> Google+
                            </button>
                            <button type="button" class="btn btn-facebook" onclick="javascript:OpenSocialSharing('facebook', '<?php echo $info->title;?>', '<?php echo base_url('gioi-thieu').'/'.$info->slug.'.html'?>')">
                                <i class="fa fa-facebook"></i>Share
                            </button>
                            <button type="button" class="btn btn-twitter" onclick="javascript:OpenSocialSharing('twitter', '<?php echo $info->title;?>', '<?php echo base_url('gioi-thieu').'/'.$info->slug.'.html'?>')">
                                <i class="fa fa-twitter"></i> Tweet
                            </button>
                        </div>
                        <h2 class="news-description">
                            <?php echo $info->intro;?>
                        </h2>
                        <div class="news-content group">
                            <?php echo $info->content;?>
                        </div>
                    </div>

                </div>
                <div class="col col-right">
                    <div class="box group">
                        <div class="box-header">
                            <h4 class="box-title" lang="detailnews_morenews">Giới thiệu liên quan</h4>
                        </div>
                        <?php if(count($related_tuyendung) > 0):?>
                            <div class="box-content group">
                              <?php foreach($related_tuyendung as $row):?>
                                <div class="block block-border-top group">
                                    <div class="block-img block-img-border">
                                        <a href="<?php echo base_url('gioi-thieu').'/'.$row->slug.'.html'?>" title="<?php echo $row->title;?>"><img alt="<?php echo $row->title;?>" class="img-default" src="<?php echo $row->image_link;?>"/></a>
                                    </div>
                                    <div class="block-caption">
                                        <h5 class="block-title"><a href="<?php echo base_url('gioi-thieu').'/'.$row->slug.'.html'?>" title="<?php echo $row->title;?>"><?php echo $row->title;?></a></h5>
                                    </div>
                                </div>
                              <?php endforeach;?>
                            </div>
                        <?php endif;?>
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


