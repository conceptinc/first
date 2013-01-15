<div id="adv_content">

    <ul class="ads">

        <!--        golden adv  data  -->   
<?php if(isset($result_num)){?>
                            <?php echo '<p class="result"> ' .$result_num .'</p> ';?>
                            <?php }?>
                            
                            <?php if(isset($error)){?>
                                   <?php echo '<p class="error"> '.$error.'</p> ';?>
                            <?php }?>
                            
                            
       <?php if(isset($results)){ 
    foreach ($results as $result ) { ?>
    
         <li class="gold">  
                <table><tbody><tr>
                            <td width="40%"><h2><?php echo $address; ?></h2></td>
                            <td><h2>  <?php echo $name; ?></h2>  </td>
                        </tr> <tr>
                            <td><h2> <?php echo $phone; ?> 
                                    <a  href="<?php echo site_url('site/showGoldenAdvDetail/' . $id . ''); ?>"title="التفاصيل" class="moree">التفاصيل</a></h2></td>
                            <td width="40%"><h2> <?php echo $address; ?></h2>  </td>
                        </tr></tbody></table>  
            </li>
	<?php }}?>
        


        <!--            sliver adv data -->




        <!--        normal adv -->


      

    </ul>

</div>