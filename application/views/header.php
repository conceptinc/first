<div id="header">
    <div class="container clearfix">
        <a href="<?php echo base_url(); ?>site/"><img src="<?php echo base_url(); ?>images/logo.png"  id="logo"/></a>



        <div id="search-bar">
            <?php echo form_open_multipart('search/'); ?>
            <input type="image" src="<?php echo base_url(); ?>images/search-icon.png"  />

            <?php echo form_input(array('id' => 'searchinput', 'name' => 'keywords','value'=>'....ابحث في الموقع',
			'onblur'=>"if(this.value=='') this.value='....ابحث في الموقع'" ,'onfocus'=>"if(this.value =='....ابحث في الموقع' ) this.value=''"
			)); ?>


            <?php echo form_close(); ?>
        </div> <!-- #search-bar -->
        
        

        <div id="menu">
            <ul id="secondary-menu" class="nav superfish clearfix">


                <li  class="current_page_item"><a href="<?php echo base_url(); ?>site/"><strong>الرئيسيه</strong></a></li>	
                <li class="page_item page-item-"><a href="#"><strong>مواعيد الاطباء</strong></a>
                    <ul class="sub-menu">

                        <?php
                        foreach ($result as $r) {
                            if ($r->d_id == 1) {
                                ?>
                                <li id="menu-item-86" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="<?php echo site_url("site/showDoctor/$r->sd_id") ?>" tppabs=""> <?php echo $r->sd_name; ?><span></span></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="page_item page-item-"><a href="<?php echo base_url(); ?>site/load_trains/"><strong>مواعيد القطارات</strong></a></li>
                <li class="page_item page-item-275"><a href="#"><strong>اتصل بنا</strong></a></li>
                <li class="page_item page-item-"><a href="<?php  echo site_url('site/load_whoAre') ?>"><strong>عن الموقع</strong></a></li>


            </ul> <!-- ul#nav -->
        </div> <!-- #menu -->

    </div> <!-- .container -->
</div> <!-- #header -->

<!------------------------------------------ slider ---------------------------------------------------->

<div id="featured">
    <div id="slides">
        <div class="slideactive" >

            <div class="container">
                <div id="main_s" style="width:940px;margin-left:0px;"><!------------main slider----------------->

                    <div id='wrapper'>

                        <div id='body'>
                            <div id="bigPic">
                                <?php if (isset($big_pics)) { ?>
                                    <?php foreach ($big_pics as $pic) { ?>
                                        <a href="<?php echo $pic->link; ?>">

                                            <img src="<?php echo base_url(); ?>public/uploads/slider/<?php echo $pic->pic_name; ?>" width="930" height="420"  /></a>

                                    <?php } ?>
                                <?php } ?>



                            </div>

                        </div>

                    </div>

                </div><!------------ end of main slider----------------->
            </div> <!-- .container -->			

        </div> <!-- .slide -->
    </div> <!-- #slides-->


    <div id="controllers" >
        <div class="container">
            <div id="switcher" >

                <?php if (isset($slider1_pics_toop)) { ?>
                    <?php foreach ($slider1_pics_top as $pic) { ?>	

                        <div class="item">
                            <?php if ($pic->type == 'g') { ?>
                                <a href="<?php echo base_url(); ?>site/showGoldenAdvDetail/<?php echo $pic->adv_id; ?>" class="product">
                                    <img src="<?php echo base_url(); ?>public/original/thumbs/<?php echo $pic->main_photo; ?>"  width='109' height='109' />															<span class="tag" style="min-width:20px;"><span><?php echo $pic->views; ?></span></span>
                                </a>
                            <?php } else { ?>
                                <a href="<?php echo base_url(); ?>site/showSliverAdvDetail/<?php echo $pic->adv_id; ?>" class="product">
                                    <img src="<?php echo base_url(); ?>public/original/thumbs/<?php echo $pic->main_photo; ?>"  width='109' height='109' />															<span class="tag" style="min-width:20px;"><span><?php echo $pic->views; ?></span></span>
                                </a>
                            <?php } ?>
                        </div> <!-- .item -->
                    <?php } ?>
                <?php } ?>


            </div> <!-- #switcher -->
        </div> <!-- .container -->
    </div> <!-- #controllers -->

    <div id="top-shadow"></div>
    <div id="bottom-shadow"></div>


</div> <!-- end #featured -->	

