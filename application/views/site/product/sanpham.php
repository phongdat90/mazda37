
                    <div class="slider" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
                      <div class="title_box_center">
                         <h1 class="cufon h_title">
                            Sản phẩm bán chạy
                         </h1>
                      </div>
                      <div class="uk-slidenav-position " data-uk-slider="{autoplay:true}">
                        <div class="uk-slider-container">
                            <ul class="uk-slider uk-grid uk-grid-collapse uk-grid-width-medium-1-4">
                        <?php if(isset($viewest_slug)): ?>
                              <?php foreach ($viewest_slug as $key => $value):?>
                                <li class="ht-slide-item ht-edit-padding-phone">
                                   <div class="main-products">
                                      <figure>
                                         <a href="<?php echo base_url($value->slug.'-'.$value->id.'.html')?>" title="<?php echo $value->name ?>" draggable="false">
                                         <img src="<?php echo $value->image_link ?>" alt="" draggable="false">
                                         </a>
                                      </figure>
                                      <p class="product-name"><a href="<?php echo base_url($value->slug.'-'.$value->id.'.html')?>" title="" draggable="false"><?php echo $value->name ?></a></p>
                                       <?php if($value->discount > 0):?>
                                <?php $price_new = $value->price - $value->discount;?>
                                    <p class="product-price"><?php echo number_format($price_new)?> VNĐ
                                    </p>
                                <?php else:?>
                                    <p class="product-price"><?php echo number_format($value->price)?> VNĐ
                                    </p>
                                <?php endif;?>
                                      <a href="" class="uk-button uk-width-1-1 "><i class="uk-icon-shopping-cart"></i>Mua hàng</a>
                                   </div>
                                </li>
                              <?php endforeach; ?>
                        <?php endif; ?>

                            </ul>
                        </div>
                        <div class="icon-bt">
                              <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                              <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                        </div>  
                      </div>
                    </div>
                    <!-- End slider -->
  <!-- <div class="cat-mobile">
                <div class="uk-container-center">
                  <div class="uk-grid uk-grid-collapse uk-grid-width-small-1-3 uk-grid-width-medium-1-3 uk-grid-width-large-1-3">
                    <?php foreach($catalog_list as $row):?>
                        <a href="<?php echo base_url($row->slug).'/'?>">
                      <img class="icon-cpt" src="<?php echo $row->image_link?>" alt=""/>
                      <span><?php echo $row->name?></span>
                    </a>
                              <?php endforeach;?>
                  </div>
                </div>
  </div> -->
              <!-- End .cat-mobile -->
							<!-- End .cat-mobile -->
                    <div class="main-bottom">
                        <div class="box-product" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
                          <div class="title_box_center">
                             <h2 class="cufon h_title">
                                Danh sách sản phẩm
                             </h2>
                          </div>
                          <div class="product">
                            <div class="uk-container-center">
                                <div class="uk-grid uk-grid-collapse uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5">
                                    <?php foreach ($lists as $key => $row) :?>
                                    <div class="main-products">
                                  <div class="product-outer tooltip" data-tooltip-content="<?php echo '#tooltip_content_'.$row->id?>">
                                    <figure>
                                         <a href="<?php echo base_url($row->slug.'-'.$row->id.'.html')?>">
                                         <img src="<?php echo ($row->image_link)?>" alt="<?php echo $row->name?>" draggable="false">
                                         </a>
                                         
                                    </figure>
                                    <p class="product-name">
                                      <a href="<?php echo base_url($row->slug.'-'.$row->id.'.html')?>" title="" draggable="false"><?php echo $row->name?></a>
                                    </p>
                                  <?php if($row->discount > 0):?>
                                <?php $price_new = $row->price - $row->discount;?>
                                    <p class="product-price"><?php echo number_format($price_new)?> VNĐ
                                    </p>
                                <?php else:?>
                                    <p class="product-price"><?php echo number_format($row->price)?> VNĐ
                                    </p>
                                <?php endif;?>
                                    <a href="" class="uk-button uk-width-1-1 "><i class="uk-icon-shopping-cart"></i>Mua hàng</a>
                                  </div>

                                  <div class="tooltip_templates">
                                    <div id="<?php echo 'tooltip_content_'.$row->id?>" >
                                      <img src="<?php echo ($row->image_link)?>" alt="<?php echo $row->name?>" />
                                           <span><?php echo $row->name?></span>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
                                    
                                    <!--End main-products-->
                                </div>
                            </div>
                          </div>
                          <div class="pagination">
                              <ul class="uk-pagination">
                                  <li><?php echo $this->pagination->create_links()?></li>
                              </ul>
                          </div>
                        </div>
                        <!-- End box-product-->
                    </div>
                    <!--End main-bottom-->
