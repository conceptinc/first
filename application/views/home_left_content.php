 <?php if (isset($last_views)) { ?> 
<?php foreach ($last_views->result() as $last_view) { ?>
<div class="product">
		<div class="product-content clearfix">
			<a href="<?php echo base_url(); ?>site/showGoldenAdvDetail/<?php echo $last_view->adv_id; ?>"  class="image">
				<span class="rounded" ><img src="<?php echo base_url(); ?>public/original/<?php echo $last_view->main_photo ;?>" width="192" height="189" /></span>
									<span class="tag" style="left: -9px;"><span><?php echo $last_view->views; ?></span></span>
							</a>
			
			<h5><?php echo $last_view->name; ?></h5>
			<p style="height:72px;">
           <?php echo $last_view->desc; ?>
            </p>
			
			<a href="<?php echo base_url(); ?>site/showGoldenAdvDetail/<?php echo $last_view->adv_id; ?>"  class="more"><span>التفاصيل</span></a>
			
							<span class="band buygetone"></span>
					</div> <!-- .product-content -->
	</div> <!-- .product -->
	
			<?php } ?>  
<?php } ?>  
	
	
	<div class="clear"></div>			<div class='wp-pagenavi'>

</div>	