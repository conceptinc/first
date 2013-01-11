<div id="adv_content">

    <ul class="ads">


        <!--        golden adv  data  -->   

        <?php foreach ($golden as $value) { ?>
            <li class="gold">  
                <table><tbody><tr>
                            <td width="40%"><h2><?php echo $value->address; ?></h2></td>
                            <td><h2>  <?php echo $value->name; ?></h2>  </td>
                        </tr> <tr>
                            <td><h2> <?php echo $value->phone; ?> 
                                    <a  href="<?php echo site_url('site/showGoldenAdvDetail/' . $value->id . ''); ?>"title="التفاصيل" class="moree">التفاصيل</a></h2></td>
                            <td width="40%"><h2> <?php echo $value->address; ?></h2>  </td>
                        </tr></tbody></table>  
            </li>
        <?php } ?>


        <!--            sliver adv data -->

        <?php foreach ($sliver as $value) { ?>
            <li class="silver">  
                <table><tbody><tr>
                            <td width="40%"><h2> <?php echo $value->nashat; ?> </h2></td>
                            <td ><h2> <?php echo $value->name; ?> </h2>  </td>
                        </tr> <tr>
                            <td><h2> <?php echo $value->phone; ?> <a  href="<?php echo site_url('site/showSliverAdvDetail/' . $value->id . ''); ?>"  title="التفاصيل" class="moree">التفاصيل</a></h2></td>
                            <td width="40%"><h2> <?php echo $value->address; ?></h2>  </td>
                        </tr></tbody></table>  
            </li>                
        <?php } ?>



        <!--        normal adv -->


        <?php foreach ($normal as $value) { ?>
            <li class="bronz">  
                <table><tbody><tr>
                            <td width="40%"><h2> <?php echo $value->nashat; ?> </h2></td>
                            <td ><h2>  </h2>  <?php echo $value->name; ?></td>
                        </tr> <tr>
                            <td><h2> <?php echo $value->phone; ?> </h2></td>
                            <td width="40%"><h2> <?php echo $value->address; ?></h2>  </td>
                        </tr></tbody></table>  
            </li>   
        <?php } ?>


    </ul>

</div>