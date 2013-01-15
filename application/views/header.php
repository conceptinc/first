<div id="header">
		<div class="container clearfix">
			<a href="<?php echo base_url();?>site/"><img src="<?php echo base_url();?>images/logo.png"  id="logo"/></a>
			
							
						
			<div id="search-bar">
				<form method="get" id="searchform1" action="#">
                <input type="image" src="<?php echo base_url();?>images/search-icon.png"  />
					<input type="text" placeHolder="....ابحث في الموقع" name="s" id="searchinput" />

					
				</form>
			</div> <!-- #search-bar -->
						
			<div id="menu">
            <ul id="secondary-menu" class="nav superfish clearfix">
						
												
					<li  class="current_page_item"><a href="<?php echo base_url();?>site/"><strong>الرئيسيه</strong></a></li>	
                    <li class="page_item page-item-"><a href="#"><strong>مواعيد الاطباء</strong></a>
                    <ul class="sub-menu">
	<li id="menu-item-86" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=12.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=12">مواعيد الاطباء<span></span></a></li>
	<li id="menu-item-108" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=13.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=13">مواعيد الاطباء<span></span></a></li>
	<li id="menu-item-334" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=6.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=6">مواعيد الاطباء<span></span></a></li>
	<li id="menu-item-335" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=9.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=9">مواعيد الاطباء<span></span></a></li>
	<li id="menu-item-341" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=13.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=13">مواعيد الاطباء<span></span></a></li>
    <li id="menu-item-341" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=13.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=13">مواعيد الاطباء<span></span></a></li>
    <li id="menu-item-341" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=13.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=13">مواعيد الاطباء<span></span></a></li>
    <li id="menu-item-341" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="-cat=13.htm" tppabs="http://elegantthemes.com/preview/eStore/?cat=13">مواعيد الاطباء<span></span></a></li>
</ul>
                    </li>
                    <li class="page_item page-item-"><a href="#"><strong>مواعيد القطارات</strong></a></li>
<li class="page_item page-item-275"><a href="#"><strong>اتصل بنا</strong></a></li>
<li class="page_item page-item-"><a href="#"><strong>عن الموقع</strong></a></li>


									</ul> <!-- ul#nav -->
				</div> <!-- #menu -->
			
		</div> <!-- .container -->
	</div> <!-- #header -->
		
	<!------------------------------------------ slider ---------------------------------------------------->
    
<div id="featured">
	<div id="slides">
					<div class="slide active"  style="background: #eb7f43  no-repeat top center; " >
                  
				<div class="container">
					                   <div id="main_s" style="width:940px;margin-left:0px;"><!------------main slider----------------->
                    
                  <div id='wrapper'>
		
		<div id='body'>
			<div id="bigPic">
				 <?php if (isset($big_pics)) { ?>
                  <?php foreach ($big_pics as $pic) { ?>
				<a href="<?php echo $pic->link ; ?>">

   <img src="<?php echo base_url(); ?>public/uploads/slider/<?php echo $pic->pic_name; ?>" width="940" height="500"  /></a>

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
				
									<div class="item active">
						<a href="#" class="product">
							<img src="<?php echo base_url();?>images/feature-3-2-61784_109x109.jpg"alt='Richie Sambora Line' width='109' height='109' />															<span class="tag" style="min-width:20px;"><span >99</span></span>
													</a>
					</div> <!-- .item -->
									<div class="item">
						<a href="#" class="product">
							<img src="<?php echo base_url();?>images/feature-2-2-64365_109x109.jpg" alt='Designer Chairs' width='109' height='109' />															<span class="tag" style="min-width:20px;"><span>95</span></span>
													</a>
					</div> <!-- .item -->
                    
									<div class="item">
						<a href="#" class="product">
							<img src="<?php echo base_url();?>images/feature-1-2-65851_109x109.jpg" alt='Trendy New Clothes' width='109' height='109' />															<span class="tag" style="min-width:20px;"><span>99</span></span>
													</a>
					</div> <!-- .item -->
                    
					
			</div> <!-- #switcher -->
		</div> <!-- .container -->
	</div> <!-- #controllers -->

	<div id="top-shadow"></div>
	<div id="bottom-shadow"></div>
    
	
</div> <!-- end #featured -->	

