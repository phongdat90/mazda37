<!DOCTYPE html>
<html lang="vi">
<head>
  <link rel="shortcut icon" href="<?php echo public_url('site/thanhbinhpc')?>/images/logo.png" type="image/x-icon"/>
  
  <?php $this->load->view('site/head');?>
  


</head>
<body>
  <header id="header" class="header">
      <section class="header-inner">
          <div class="head-top">
            
            
          </div>
          <!--End head-top-->
          <div class="bottom-head">
              <div class="uk-container uk-container-center">
                  <div class="uk-grid">
                      <div class="uk-width-large-1-5">
                         <figure class="top-logo" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
                          <p>
                            <a href="<?php echo base_url()?>">
                              <img src="<?php echo public_url('site/thanhbinhpc')?>/images/logo.png" alt="<?php echo !empty($homepage->site_desc) ? $homepage->site_desc : 'Thanh Binh PC chuyen cung cap laptop,dien thoai'?>"" title="<?php echo !empty($homepage->site_title) ? $homepage->site_title : 'Thanh Binh PC'?>">
                            </a>
                          </p>  
                         </figure>
                      </div>
                      <div class="uk-width-large-3-5">
                         <div class="ht-search-form" data-uk-scrollspy="{cls:'uk-animation-slide-top'}" >
                            <form class="uk-search" action="<?php echo base_url('san-pham/tim-kiem')?>" method="get">
                               <input class="int-search-form" type="search" name="key-search" placeholder="Nhập từ khóa cần tìm..." required="">
                               <button type="submit" class="btn-search" id="btn-search" name="Gửi"><i class="uk-icon-search"></i> Tìm kiếm</button>   
                            </form>
                         </div>
                      </div>
                      <div class="uk-width-1-5 no-padding">
                         <div class="shopping-cart uk-hidden-medium uk-hidden-small" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                            <div class="box-online">
                              <ul class="online">
                                <li>
                                <a href="tel:0<?php echo !empty($homepage->hotline) ? $homepage->hotline : ''?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Hotline
                                </a>
                                </li>
                              </ul>
                            </div>
                            <!-- End box-online-->
                         </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End bottom-head-->
        </section>

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
                            <li class="uk-active"><span>Sản phẩm</span></li>
                          </ul>
                      </div>

            <div class="menu-left uk-width-large-2-10">
              
              <div class="category">
                        <h4 class="h_title">Danh mục Sản phẩm</h4>
                      </div>
                      <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
                        <?php foreach ($catalog_list as $row):?>
                        <?php if(!empty($row->subs)):?>
                        <li class="uk-parent">
                            <img class="icon-cpt" src="<?php echo $row->image_link ?>" alt="<?php echo $row->name?>"/>
                            <a href="<?php echo base_url('product/catalog/'.$row->id)?>"><?php echo $row->name?></a>
                            <ul class="uk-nav-sub">
                              <?php foreach($row->subs as $sub):?>
                                <li><a href="<?php echo base_url('product/catalog/'.$sub->id)?>"> <?php echo $sub->name?></a></li>
                              <?php endforeach;?>
                            </ul>
                        </li>
                      <?php else:?>
                        <li>
                            <img class="icon-cpt" src="<?php echo $row->image_link?>" alt=""/>
                            <a href="<?php echo base_url('product/catalog/'.$row->id)?>"><?php echo $row->name?></a>
                        </li>
                      <?php endif;?>
                      <?php endforeach;?>
                      </ul>
                      
                      <!-- End suppoter -->

            </div>
            <div class="uk-width-large-8-10">
              <div class="slideshow" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <?php //$this->load->view('site/slide',$this->data)?>
              </div>

              <div class="slider" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
                <?php //$this->load->view('site/slide_buttom',$this->data)?>
              </div>

              <div class="main-bottom">

              
                <?php $this->load->view($temp,$this->data)?>
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


<?php 
/*
<html>
    <head>
        <?php $this->load->view('site/head');?>
    </head>
    <body>
        <a id="back_to_top" href="#" style="display: none;">
       <img src="<?php echo public_url()?>/site/images/top.png">
      </a>
      
      <div class="wraper">
             <div class="header">
                   <?php $this->load->view('site/header',$this->data)?>
             </div>
             
             <div id="container">
                    <div class="left">
                          <?php $this->load->view('site/left', $this->data);?>
                    </div>
                    
                    <div class="content">
                        <?php $this->load->view($temp , $this->data);?>
                    </div>
                    
                    <div class="right">
                          <?php $this->load->view('site/right', $this->data);?>
                    </div>
                    <div class="clear"></div>
             </div>
             <center>
        <img src="<?php echo public_url()?>/site/images/bank.png"> 
         </center>
           
           <div class="footer">
                 <?php $this->load->view('site/footer');?>
           </div>
           
      </div>
      
    </body>
</html>
*/
?>