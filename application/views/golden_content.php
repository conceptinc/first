<div id="adv_content">
    <div class="boxLeft">

        <ul class="ads" style="text-align:right;font-size:15px;">

            <!------------------- ads details ------------------------->
            <?php foreach ($res as $s) { ?>
                <li class="level-1">

                    <table style="text-align:right;float:right">
                        <tbody>
                            <tr>
                                <td><h2 style="padding-top:10px;">
                                        <font color="#51adfe"><?php echo $s->name; ?> </font>
                                        <img src="<?php echo base_url(); ?>images/vcard.png"class="icon"></h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong><?php echo $s->nashat; ?></strong>
                                    <img src="<?php echo base_url(); ?>images/arrow-small.png"class="icon"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>عدد الزيارات : <?php echo $s->views; ?></strong>
                                    <img src="<?php echo base_url(); ?>images/arrow-small.png"class="icon">   
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="clear"></div>

                    <ul>
                        <li class="level-2">
                            <div class="top">
                                <b> معلومات عامة</b></span>
                                <span><img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon">

                                    </div>
                                    <br>

                                    <li class="line2" >

                                        الإسم : <span><?php echo $s->name; ?></span>
                                        <img class="icon" src="<?php echo base_url(); ?>images/bullet_red.png" width="16" height="16"></li><li class="line1">
                                        العنوان : <span><?php echo $s->address; ?></span>
                                        <img class="icon" src="<?php echo base_url(); ?>images/bullet_red.png"width="16" height="16"></li><li class="line2">
                                        النشاط : <span><?php echo $s->nashat; ?></span>
                                        <img class="icon" src="<?php echo base_url(); ?>images/bullet_red.png" width="16" height="16"></li><li class="line1">
                                        التليفون  : <span><?php echo $s->phone; ?></span>
                                        <img class="icon" src="<?php echo base_url(); ?>images/bullet_red.png" width="16" height="16"></li>

                                    </li>

                                    <!---------------->

                                    <li class="level-2" style="padding-top:15px;">
                                        <div class="top">
                                            <b>صور خاصة بالاعلان</b>
                                            <span>

                                                <img src="<?php echo base_url(); ?>/images/arrow-small.png" class="icon">

                                            </span>
                                        </div>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                            <center>
                                                <?php foreach ($photo as $value) { ?>
                                                    <img  class="img_gallery" src="<?php echo $value['url'] ?> "  style="margin:auto; width:700px; margin-top:20px;" >
                                                    <br>
                                                <?php } ?>
                                            </center> 
                                            </td>
                                            </tr>
                                            </tbody>
                                        </table>    


                                    </li>


                                    <!---------------->




                                    <!---------------->

                                    <li class="level-2" style="padding: 15px 0 15px 0">
                                        <div class="top" style="padding: 0px 0 15px 0">
                                            <span>مكتبة الصور<img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon"></span>
                                        </div>

                                        <ul class="gallery clearfix" id="gallery">
                                            <?php if(isset($gallery)){?>
                                            <?php foreach ($gallery as $im) { ?>
                                                <li class="photos" > 
                                                    <a href="<?php echo $im['url_ga'] ?> "  rel="prettyPhoto[gallery]"  > 
                                                        <img class="img_gallery" src="<?php echo $im['th_url'] ?> " width="120" height="120" />   
                                                    </a> 
                                                </li>
                                            <?php } ?>
                                             <?php } ?>
                                        </ul>
                                    </li>

                                    <!---------------->

                                    <li class="level-2" style="">
                                        <div class="top" style="padding: 0px 0 15px 0">
                                            <span>
                                                مكتبة الفيديو<img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon"></span>
                                        </div>



                                        <div class="clear"> </div>
                                        <iframe width='640' height='360'
                                                src='http://www.youtube.com/embed/<?php echo $s->vedio; ?>?feature=player_detailpage' 
                                                frameborder='0' allowfullscreen>
                                        </iframe>       <br />
                                        <br><br>




                                    </li>






                                    </ul>


                                    </li> <!-- End li.level-i -->






                                    <?php
                                }
                                ?>

                                </ul>
                        </div>


                        </div>
