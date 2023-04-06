<?php echo (!empty($homepage->analytic_2)) ? $homepage->analytic_2: '';?>
<nav class="cd-nav">
    <ul id="cd-primary-nav" class="cd-primary-nav">
        <li class="has-children"><a title="Giới thiệu" href="gioi-thieu-328419s.html" target="">Giới thiệu</a>
            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a title="Giới thiệu" href="javasript:;">Giới thiệu</a></li>
                <!--<li class="see-all"><a title="All Giới thiệu" href="">All Giới thiệu</a></li>-->
                <?php foreach($list_tuyendung1 as $row):?>
                    <li>
                        <a title="<?php echo $row->title;?>" href="<?php echo base_url('gioi-thieu').'/'.$row->slug.'.html'?>" target="">
                            <center><img style="max-width:100%;" src="<?php echo $row->image_link;?>" /></center>
                            <h2 class="sub-title-menu center"><?php echo $row->title;?></h2></a>
                    </li>
                <?php endforeach;?>
            </ul>
        </li>
        <li><a title="Bảng giá xe Mazda" href="<?php echo base_url('bang-gia-xe-mazda.html')?>" target="">Bảng giá xe Mazda</a></li>
        <li class="has-children"><a title="Sản phẩm" href="san-pham.html" target="">Sản phẩm</a>
            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a title="Sản phẩm" href="javasript:;">Sản phẩm</a></li>
                <!--                <li class="see-all"><a title="All Sản phẩm" href="san-pham.html">All Sản phẩm</a></li>-->
                <?php foreach($catalog_list as $row):?>
                    <li>
                        <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'/';?>" target="">
                            <center><img style="max-width:100%;" src="<?php echo $row->image_link;?>" /></center>
                            <h2 class="sub-title-menu center"><?php echo $row->name?></h2></a>
                    </li>
                <?php endforeach;?>
            </ul>
        </li>
        <li><a title="Dịch vụ" href="<?php echo base_url('dich-vu');?>" target="">Dịch vụ</a></li>
        <li><a title="Tin tức" href="<?php echo base_url('tin-tuc')?>" target="">Tin tức</a></li>
        <li><a title="Đăng ký lái thử" href="<?php echo base_url('lien-he');?>" target="">Đăng ký lái thử</a></li>
    </ul>
</nav>