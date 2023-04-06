<div class="top group">
    <div class="container group">
        <div class="top-left">

        </div>
        <div class="top-right">
            <div class="hotline">
                        <span class="icon">
                        <em class="fa fa-phone" style="line-height: 20px">&nbsp;</em>
                    </span>
                <p>
                    <a href="tel:<?php echo '0'.$homepage->hotline;?>" class="phone"><?php echo '0'.number_format($homepage->hotline, 0,',','.');?> - <?php echo $homepage->page_face;?></a>
                </p>
            </div>

            <div class="cart">
                <a href="<?php echo base_url('cart/index') ?>" class="title-cart">
                    <span class="fa fa-shopping-cart"></span>
                    <span class="cart-large"><span lang="master_shopping">Giỏ hàng</span> : <span class="total-product"><?php echo $total_items;?></span> <span lang="master_shopping_product">Sản phẩm</span></span>
                    <span class="cart-small">(<span class="total-product"><?php echo $total_items;?></span>)</span>
                </a>
            </div>
            <form action="<?php echo base_url('product/search')?>" method="get">
                <div class="search-box">
                        <span class="btn-search">
                            <span class="fa fa-search"></span>
                        </span>
                        <input class="text-search" type="text" id="key-search" name="key-search" placeholder="Tìm kiếm..." />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="header group">
    <div class="container group">
        <div class="logo">

            <h1 style="margin:0;padding:0;text-indent:-9999px;width:0;height:0;">Mazda Vinh</h1>

            <a href="<?php echo base_url();?>"><img alt="Logo" class="img-logo" src="<?php echo public_url('site/mazda')?>/images/mazda-logo.jpg" /></a>
        </div>
        <a href="#" class="cd-nav-toggle">
            <span class="fa fa-bars"></span>
        </a>
    </div>
</div>