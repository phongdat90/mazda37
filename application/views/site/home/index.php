<div class="main group">
    <div class="container row group">
        <?php if(!empty($info_1)): ?>
            <div class="box group">
            <div class="box-header">
                <h2 class="box-title"><?php echo $info_1->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
            </div>
            <div class="box-content group">
                <?php if(!empty($list_1)):?>
                <div class="section group">
                <?php foreach($list_1 as $row) : ?>
                    <div class="col col_4">
                        <div class="product">
                            <div class="product-image">
                                <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
        </div>
        <?php endif;?>

        <?php if(!empty($info_2)): ?>
            <div class="box group">
                <div class="box-header">
                    <h2 class="box-title"><?php echo $info_2->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
                </div>
                <div class="box-content group">
                    <?php if(!empty($list_2)):?>
                        <div class="section group">
                            <?php foreach($list_2 as $row) : ?>
                                <div class="col col_4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
            </div>
        <?php endif;?>

        <?php if(!empty($info_3)): ?>
            <div class="box group">
                <div class="box-header">
                    <h2 class="box-title"><?php echo $info_3->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
                </div>
                <div class="box-content group">
                    <?php if(!empty($list_3)):?>
                        <div class="section group">
                            <?php foreach($list_3 as $row) : ?>
                                <div class="col col_4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
            </div>
        <?php endif;?>

        <?php if(!empty($info_4)): ?>
            <div class="box group">
                <div class="box-header">
                    <h2 class="box-title"><?php echo $info_4->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
                </div>
                <div class="box-content group">
                    <?php if(!empty($list_4)):?>
                        <div class="section group">
                            <?php foreach($list_4 as $row) : ?>
                                <div class="col col_4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
            </div>
        <?php endif;?>

        <?php if(!empty($info_5)): ?>
            <div class="box group">
                <div class="box-header">
                    <h2 class="box-title"><?php echo $info_5->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
                </div>
                <div class="box-content group">
                    <?php if(!empty($list_5)):?>
                        <div class="section group">
                            <?php foreach($list_5 as $row) : ?>
                                <div class="col col_4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
            </div>
        <?php endif;?>
        <?php if(!empty($info_6)): ?>
            <div class="box group">
                <div class="box-header">
                    <h2 class="box-title"><?php echo $info_6->name;?> - 0<?php echo number_format($homepage->hotline,0,',','.')?> - <?php echo $homepage->page_face;?></h2>
                </div>
                <div class="box-content group">
                    <?php if(!empty($list_6)):?>
                        <div class="section group">
                            <?php foreach($list_6 as $row) : ?>
                                <div class="col col_4">
                                    <div class="product">
                                        <div class="product-image">
                                            <a title="<?php echo $row->name;?>" href="<?php echo base_url($row->slug).'-'.$row->id.'.html'?>"><img class="img-responsive" alt="<?php echo $row->name;?>" src="<?php echo $row->image_link;?>" /></a>
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
            </div>
        <?php endif;?>
<!--        <div class="box group">-->
<!--            <div class="box-header">-->
<!--                <h2 class="box-title">Sản Phẩm Hót - 0--><?php //echo number_format($homepage->hotline,0,',','.')?><!-- - --><?php //echo $homepage->page_face;?><!--</h2>-->
<!--            </div>-->
<!--            <div class="box-content group">-->
<!---->
<!--                <div class="section group">-->
<!--                    --><?php //if(!empty($product_newest)):?>
<!--                        --><?php //foreach ($product_newest as $row):?>
<!--                            <div class="col col_4">-->
<!--                        <div class="product">-->
<!--                            <div class="product-image">-->
<!--                                <a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--"><img class="img-responsive" alt="--><?php //echo $row->name;?><!--" src="--><?php //echo $row->image_link;?><!--" /></a>-->
<!--                            </div>-->
<!--                            <div class="caption">-->
<!--                                <h3 class="name"><a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--">--><?php //echo $row->name;?><!--</a></h3>-->
<!--                                <div class="content-price">-->
<!--                                    <span class="price">--><?php //echo number_format($row->price,0,',','.');?><!-- VND</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                        --><?php //endforeach;?>
<!--                    --><?php //endif;?>
<!--                </div>-->
<!--                <div class="section group">-->
<!--                    --><?php //if(!empty($product_newest_3)):?>
<!--                        --><?php //foreach ($product_newest_3 as $row):?>
<!--                            <div class="col col_4">-->
<!--                                <div class="product">-->
<!--                                    <div class="product-image">-->
<!--                                        <a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--"><img class="img-responsive" alt="--><?php //echo $row->name;?><!--" src="--><?php //echo $row->image_link;?><!--" /></a>-->
<!--                                    </div>-->
<!--                                    <div class="caption">-->
<!--                                        <h3 class="name"><a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--">--><?php //echo $row->name;?><!--</a></h3>-->
<!--                                        <div class="content-price">-->
<!--                                            <span class="price">--><?php //echo number_format($row->price,0,',','.');?><!-- VND</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach;?>
<!--                    --><?php //endif;?>
<!--                </div>-->
<!--                <div class="section group">-->
<!--                    --><?php //if(!empty($product_newest_6)):?>
<!--                        --><?php //foreach ($product_newest_6 as $row):?>
<!--                            <div class="col col_4">-->
<!--                                <div class="product">-->
<!--                                    <div class="product-image">-->
<!--                                        <a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--"><img class="img-responsive" alt="--><?php //echo $row->name;?><!--" src="--><?php //echo $row->image_link;?><!--" /></a>-->
<!--                                    </div>-->
<!--                                    <div class="caption">-->
<!--                                        <h3 class="name"><a title="--><?php //echo $row->name;?><!--" href="--><?php //echo base_url($row->slug).'-'.$row->id.'.html'?><!--">--><?php //echo $row->name;?><!--</a></h3>-->
<!--                                        <div class="content-price">-->
<!--                                            <span class="price">--><?php //echo number_format($row->price,0,',','.');?><!-- VND</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach;?>
<!--                    --><?php //endif;?>
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->

        <div class="box group">
            <div class="box-header">
                <h2 class="box-title">Tin Tức</h2>
            </div>
        <?php if(!empty($news_list)):?>
            <div class="box-content group">

                <div class="col col_first_news">
                    <div class="first-news">
                        <div class="image-wrapper">
                            <a title="<?php echo $news_list[0]->title;?>" href="<?php echo base_url('tin-tuc').'/'.$news_list[0]->slug.'.html'?>">
                                <img class="img-responsive" alt="<?php echo $news_list[0]->title;?>" src="<?php echo $news_list[0]->image_link;?>" />
                                <span class="style-news">
                                	    <span class="viewmore" lang="master_readmore">ReadMore</span>
                                </span>
                            </a>
                        </div>
                        <h3 class="title"><a title="<?php echo $news_list[0]->title;?>" href="<?php echo base_url('tin-tuc').'/'.$news_list[0]->slug.'.html'?>"><?php echo $news_list[0]->title;?></a></h3>
                    </div>
                </div>

                <div class="col col_other_news">
                    <?php foreach ($news_list as $row) : ?>
                        <div class="block block-border-top group">
                        <div class="block-img">
                            <a class="image-wrapper" title="<?php echo $row->title;?>" href="<?php echo base_url('tin-tuc').'/'.$row->slug.'.html';?>">
                                <img class="img-news" alt="<?php echo $row->title;?>" src="<?php echo $row->image_link;?>" />
                                <span class="style-news"></span>
                            </a>
                        </div>
                        <div class="block-caption">
                            <h3 class="block-title title-other-news"><a title="<?php echo $row->title;?>" href="<?php echo base_url('tin-tuc').'/'.$row->slug.'.html'?>"><?php echo $row->title;?></a></h3>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

            </div>
        <?php endif;?>
        </div>

    </div>
</div>