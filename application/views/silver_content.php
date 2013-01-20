<div id="adv_content">
    <div class="boxLeft">

        <ul class="ads" style="text-align:right;font-size:15px;">

            <!------------------- ads details ------------------------->
            <?php foreach ($res as $s) { ?>
                <li class="level-1">

                    <table id="gold_table" style="text-align:right;float:right">
                        <tbody>
                            <tr>
                                <td><h2 style="padding-top:10px;">
                                        <font color="#51adfe"><?php echo $s->name; ?> </font>
                                        <img src="<?php echo base_url(); ?>images/vcard.png"class="icon"></h2>
                                </td>
                            </tr>
                            <tr>
                         
                            <td>
                                    عدد الزيارات : <?php echo $s->views; ?>
                                    <img src="<?php echo base_url(); ?>images/arrow-small.png"class="icon">   
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                               الاسم :
                                   <?php echo $s->name; ?>
                                    <img src="<?php echo base_url(); ?>images/arrow-small.png"class="icon"> 
                                </td> 
                            </tr>
                        </tbody>
                    </table>

                    <div class="clear"></div>

                    <ul>
                        <li class="level-2">
                          
                                    <li class="line1">
                                        العنوان : <span><?php echo $s->address; ?></span>
                                       <img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon">
                                       </li><li class="line1">
                                        النشاط : <span><?php echo $s->nashat; ?></span>
                                       <img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon">
                                       </li><li class="line1">
                                        التليفون  : <span><?php echo $s->phone; ?></span>
                                       <img src="<?php echo base_url(); ?>images/arrow-small.png" class="icon">
                                       </li>

                                    </li>

                                    <!---------------->

                                    <li class="level-2" style="padding-top:15px;">
                                        <div class="top">
                                            <b>صور خاصة بالاعلان</b>
                                            <span><img src="<?php echo base_url(); ?>/images/arrow-small.png" class="icon"></span>
                                        </div>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                            <center>
                                                <?php foreach ($photo as $value) { ?>
                                                    <img  class="img_gallery" src="<?php echo $value['url'] ?>"  style="margin:auto; width:700px; margin-top:20px;" >
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
                                    </ul>
                                    </li> <!-- End li.level-i -->

                                    <?php
                                }
                                ?>

                                </ul>
                        </div>


                        </div>

                        <div class="clear"></div>			<div class='wp-pagenavi'>
