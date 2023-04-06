<!DOCTYPE html>
<html lang="vi">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo !empty($seo_baohanh->site_title) ? $seo_baohanh->site_title : ''?></title>
    <meta name="description" content="<?php echo !empty($seo_baohanh->site_desc) ? $seo_baohanh->site_desc : ''?>" />
    <meta name="keyword" content="<?php echo !empty($seo_baohanh->site_key) ? $seo_baohanh->site_key : ''?>" />
     <link rel="shortcut icon" href="<?php echo !empty($homepage->favicon) ? $homepage->favicon : ''?>" type="image/x-icon"/>
	

    <!-- Bootstrap -->
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/uikit.min.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/uikit.gradient.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo public_url('site/thanhbinhpc')?>/css/tooltipster.bundle.min.css" />
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/tooltip.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/sticky.min.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/dotnav.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/slidenav.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/slideshow.min.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/components/slider.min.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo public_url('site/thanhbinhpc')?>/css/style.css" rel="stylesheet">
</head>
<body>
	<header id="header" class="header">
			<?php $this->load->view('site/header',$this->data) ?>
	</header>
		
	<div id="main">
		<div class="content">
			<div class="nav-menu" data-uk-sticky="">
				<?php $this->load->view('site/menu')?>
			</div>

			<div class="uk-container uk-container-center">
				<div class="uk-container uk-container-center">
					<div class="main-top uk-grid uk-grid-small">
					
						<div class="breadcrumb">
                      <ul class="uk-breadcrumb">
                          <li><a href=""><i class="uk-icon-home"></i></a></li>
                          <li><a href="<?php echo base_url('baohanh/view')?>">Bảo Hành</a></li>
                          
                        </ul>
                  </div>

						<div class="menu-left uk-width-large-2-10">
							<?php $this->load->view('site/menu_left',$this->data)?>
						</div>
						<div class="uk-width-large-8-10">
							<div class="slideshow" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
								<?php //$this->load->view('site/slide',$this->data)?>
							</div>

							<div class="slider" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
								<?php //$this->load->view('site/slide_buttom',$this->data)?>
							</div>

							
				      <div class="pomotion">
              <p>
              <?php echo $baohanh->content?>
              </p>
              </div>
                 
							
							
						</div>

					</div>
				</div>	
			</div>


		</div>
	</div>

	<footer id="footer">
	<?php $this->load->view('site/footer',$this->data)?>
		
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/jquery.js" ></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/custom.js" ></script>
    
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/tooltipster.bundle.min.js" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/uikit.min.js" ></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/components/sticky.min.js"></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/components/tooltip.js"></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/components/slider.js"></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/components/slideshow.js"></script>
    <script src="<?php echo public_url('site/thanhbinhpc')?>/js/components/slideshow-fx.js"></script>
</body>
</html>


