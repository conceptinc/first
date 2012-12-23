<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>دليل طنطا</title>

<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"  type="text/css" media="screen" />

    <link rel="stylesheet" href="<?php echo base_url();?>css/slider_style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/menu_style.css" type="text/css" media="screen" />
<!-- jquery ui custom build (for animation easing) -->

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/custom.js" ></script>
    
    
<script type="text/javascript">

  $(document).ready(function() {
        //move he last list item before the first item. The purpose of this is if the user clicks to slide left he will be able to see the last item.
        $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
        
        
        //when user clicks the image for sliding right        
        $('#right_scroll img').click(function(){
        
            //get the width of the items ( i like making the jquery part dynamic, so if you change the width in the css you won't have o change it here too ) '
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            
            //calculae the new left indent of the unordered list
            var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
            
            //make the sliding effect using jquery's anumate function '
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
                
                //get the first list item and put it after the last list item (that's how the infinite effects is made) '
                $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
                
                //and get the left indent to the default -210px
                $('#carousel_ul').css({'left' : '-210px'});
            }); 
        });
        
        //when user clicks the image for sliding left
        $('#left_scroll img').click(function(){
            
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            
            /* same as for sliding right except that it's current left indent + the item width (for the sliding right it's - item_width) */
            var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
            
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
            
            /* when sliding to left we are moving the last item before the first list item */            
            $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
            
            /* and again, when we make that change we are setting the left indent of our unordered list to the default -210px */
            $('#carousel_ul').css({'left' : '-210px'});
            });
            
            
        });
  });
</script>
	<style type="text/css">

#carousel_inner {
float:left; /* important for inline positioning */
width:890px; /* important (this width = width of list item(including margin) * items shown */ 
overflow: hidden;  /* important (hide the items outside the div) */
/* non-important styling bellow */
margin-top:10px;
margin-bottom:60px;
}

#carousel_ul {
position:relative;
left:-210px; /* important (this should be negative number of list items width(including margin) */
list-style-type: none; /* removing the default styling for unordered list items */
margin: 0px;
padding: 0px;
width:9999px; /* important */
/* non-important styling bellow */
padding-bottom:10px;
}

#carousel_ul li{
float: left; /* important for inline positioning of the list items */                                    
width:208px;  /* fixed width, important */
/* just styling bellow*/
padding:0px;
height:180px;

 
margin-left:px; 
margin-right:15px; 
}

#carousel_ul li img {
.margin-bottom:-4px; /* IE is making a 4px gap bellow an image inside of an anchor (<a href...>) so this is to fix that*/
/* styling */
cursor:pointer;
cursor: hand; 
border:0px; 
}
#left_scroll, #right_scroll{
float:left; 
height:130px; 
width:15px; 

}
#left_scroll{margin-right:20px;}
#right_scroll{margin-left:20px;}
#left_scroll img, #right_scroll img{
/*styling*/
cursor: pointer;
cursor: hand;
margin-top:70px;


}
#doc{float:right;padding:10px;width:680px; text-align:right;background:url(<?php echo base_url();?>images/doc.png) top left no-repeat;-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
border:1px solid #eeeeee;
margin-bottom:20px;
height:130px;

}
.doc{position:absolute; width:200px; height:100px;margin-left:-180px; margin-top:20px}
</style>
</head>
<body id="home" class="home blog cufon-enabled ie et_includes_sidebar">
	<div id="header">
		<div class="container clearfix">
			<a href="#">				<img src="<?php echo base_url();?>images/logo.png"  id="logo"/></a>
			
							<ul id="top-menu" class="nav superfish clearfix">
						
												
						
<li class="page_item page-item-275"><a href="#">اتصل بنا</a></li>
<li class="page_item page-item-"><a href="#">عن الموقع</a></li>
<li class="page_item page-item-"><a href="#">الاكثر مشاهده</a></li>
<li class="current_page_item"><a href="#">الرئيسيه</a></li>
									</ul> <!-- ul#nav -->
						
			<div id="search-bar">
				<form method="get" id="searchform1" action="#">
                <input type="image" src="<?php echo base_url();?>images/search-icon.png"  />
					<input type="text" placeHolder="....ابحث في الموقع" name="s" id="searchinput" />

					
				</form>
			</div> <!-- #search-bar -->
						
			<div id="menu">
            
				</div> <!-- #menu -->
			
		</div> <!-- .container -->
	</div> <!-- #header -->
		
	<!------------------------------------------ slider ---------------------------------------------------->
    
<div id="featured">
	<div id="slides">
					<div class="slide active"  style="background: #eb7f43  no-repeat top center; " >
                  
				<div class="container">
					<div class="description" style="height:100px">
						<div class="product">
														
                                                        <p class="info">
للمواطنين مدينه طنطاطنطا يم خدمات  مدينه طنطاطنطا هو اكبر موقع تقديم خدمات للمواطنين مدينه طنطاطنطا هو اكبر موقع تقديم خدمات للمواطنين مدينه طنطاطنطا هو اكبر موقع تقديم خدمات للمواطنين مدينه طنطاطنطا هو اكبر موقع تقديم خدمات للمواطنين مدينه طنطاطنطاخدمات للمواطنين مدينه 
                                                       </p>
							<a class="more" href="-p=20.htm" ><span style="float:left;">التفاصيل</span></a>
						</div> <!-- .product -->
					</div> <!-- .description -->
                   <div id="main_s" style="width:940px;margin-left:0px;"><!------------main slider----------------->
                    
                  <div id='wrapper'>
		
		<div id='body'>
			<div id="bigPic">
				
				<img src="<?php echo base_url();?>images/slide1.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide12.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide3.jpg" width="940" height="500"  />
                
				<img src="<?php echo base_url();?>images/slide1.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide12.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide3.jpg" width="940" height="500"  />
                
				<img src="<?php echo base_url();?>images/slide1.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide12.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide3.jpg" width="940" height="500"  />
                
				<img src="<?php echo base_url();?>images/slide1.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide12.jpg" width="940" height="500"  />
				<img src="<?php echo base_url();?>images/slide3.jpg" width="940" height="500"  />
                
				
				
				
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
	<div id="content" >
		<div class="container clearfix">	
        <p id="new"></p>


<!----------------------------------------------conetnt------------------------------------------------>


<div class="clear"></div>	
<div id="main-area">
	<div id="main-content" class="clearfix">
    
    <!---------------------------------------- left column the most view ------------------------------------------------------>
		<div id="left-column">
				
	  <div id="adv_content" style="">
     
  <div id="doc">
                    <ul class="ads" >

                         

                            <li class="doctors" style="float:right;margin-top:3px;margin-left:5px;" >
 <img src="<?php echo base_url();?>images/vcard.png" class="icon"style="float:right;margin-top:3px;margin-left:5px;" >
                                <h3 style="float:right"> محمود </h3>

                                <div class="clear"></div>
                              
                                    <table width="500px" style="text-align:right; font-size:14px;">
                                        <tbody>
                                            <tr>
                                                <td width="50%">
                                                    
                                                        الاسم:                                                            
                                                        <font color="#057de7">
                                                            محمود                                                        </font>
<img src="<?php echo base_url();?>images/bullet_red.png" width="16" height="16" class="icon">

                                                </td>
                                                <td width="50%">
                                                    
                                                        التيليفون:                                                              
                                                        <font color="#057de7">
                                                            055                                                        </font>
                                                            <img src="<?php echo base_url();?>images/bullet_red.png" width="16" height="16" class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="500px"style=" font-size:14px;">
                                        <tbody>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                   
                                                        التخصص :                                                               
                                                        <font color="#057de7">
                                                            جراح                                                        </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>

                                                <td width="50%">
                                                   
                                                        العنوان :                                                               
                                                        <font color="#057de7">
                                                            هناك                                                        </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16"
                                                         height="16"
                                                         class="icon">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="500px" style=" font-size:14px;">
                                        <tbody>

                                            <tr>

                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>

                                                <td width="50%">

                                                    
                                                        ايام التواجد :                                                               
                                                        <font color="#057de7">
                                                            كل يوم                                                        </font>
                                                            <img src="<?php echo base_url();?>images/bullet_red.png"

                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>
                                                <td width="50%">

                                                 
                                                        معادالتواجد  :                                                               
                                                        <font color="#057de7">
                                                            بب                                                        </font>
                                                                <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width="500px" style=" font-size:14px;">

                                        <tbody>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                   
                                                        حجز بالتليفون  :                                                               
                                                        <font color="#057de7">
                                                            لا يوجد                                                         </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16"
                                                         height="16" 
                                                         class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </li>

                                            </ul>

</div>

<!-- ---------------------------another doctor---------------------->

<div id="doc">
                    <ul class="ads" >

                         

                            <li class="doctors" style="float:right;margin-top:3px;margin-left:5px;" >
 <img src="<?php echo base_url();?>images/vcard.png" class="icon"style="float:right;margin-top:3px;margin-left:5px;" >
                                <h3 style="float:right"> محمود </h3>

                                <div class="clear"></div>
                              
                                    <table width="500px" style="text-align:right; font-size:14px;">
                                        <tbody>
                                            <tr>
                                                <td width="50%">
                                                    
                                                        الاسم:                                                            
                                                        <font color="#057de7">
                                                            محمود                                                        </font>
<img src="<?php echo base_url();?>images/bullet_red.png" width="16" height="16" class="icon">

                                                </td>
                                                <td width="50%">
                                                    
                                                        التيليفون:                                                              
                                                        <font color="#057de7">
                                                            055                                                        </font>
                                                            <img src="<?php echo base_url();?>images/bullet_red.png" width="16" height="16" class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="500px"style=" font-size:14px;">
                                        <tbody>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                   
                                                        التخصص :                                                               
                                                        <font color="#057de7">
                                                            جراح                                                        </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>

                                                <td width="50%">
                                                   
                                                        العنوان :                                                               
                                                        <font color="#057de7">
                                                            هناك                                                        </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16"
                                                         height="16"
                                                         class="icon">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="500px" style=" font-size:14px;">
                                        <tbody>

                                            <tr>

                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>

                                                <td width="50%">

                                                    
                                                        ايام التواجد :                                                               
                                                        <font color="#057de7">
                                                            كل يوم                                                        </font>
                                                            <img src="<?php echo base_url();?>images/bullet_red.png"

                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>
                                                <td width="50%">

                                                 
                                                        معادالتواجد  :                                                               
                                                        <font color="#057de7">
                                                            بب                                                        </font>
                                                                <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16" height="16" 
                                                         class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table width="500px" style=" font-size:14px;">

                                        <tbody>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                <td width="50%">
                                                   
                                                        حجز بالتليفون  :                                                               
                                                        <font color="#057de7">
                                                            لا يوجد                                                         </font>
                                                             <img src="<?php echo base_url();?>images/bullet_red.png"
                                                         width="16"
                                                         height="16" 
                                                         class="icon">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </li>

                                            </ul>

</div>


<!-- ------------------------------------------------------------------->
      
      
      </div>
	
	<div class="clear"></div>			<div class='wp-pagenavi'>

</div>	
		</div> <!-- #left-column -->
<!----------------------------------- the right column site menu ----------------------------------------------------------->
		<div id="sidebar">
	<div id="eshopw_cart-4" class="widget eshop-widget eshopcart_widget">
    <div id="login">
        <div id="main" class="form-4">
				<?php echo form_open('');?> 
                <span>دخول العملاء للتعديل علي اعلانتهم</span>
				    <p>
				        <label for="login">البريد الالكتروني</label>
				        <input type="text" name="login" placeholder="اسم العميل" requried />
				    </p>
				    <p>
				        <label for="password">كلمه المرور</label>
				        <input type="password" name='password' placeholder="كلمه المرور"  /> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="دخول">
                        
				    </p>       
				<?php echo form_close();?>
			</div>
        </div>
        
<!----------------------------------------------- main menu ----------------------------------------------->        
 <div class="main_menu" >
        <ul class="nav2" style="margin-top:-10px">
                                                                                           
                             
							<li><a > خدمات الكمبيوتر </a></li>
                            <div class="sub_links" style="display: none; ">
                            <p><a href="#"  >بيع</a></p>
                            <p><a href="#" >تصليح</a></p>
                             </div>
                             
                             <li><a > مدارس </a></li>
                             
                             <div class="sub_links" style="display: none; ">
                             
                             <p><a href="#"  >مدارس الملاح</a></p>
                             <p><a href="#"  >temraz</a></p>
                              </div>
                              
                              <li><a >  الاطباء   </a></li>
                              
                              <div class="sub_links" style="display: none; ">
                              <p><a href="" > جراحه </a></p>
                              <p><a href="" > اسنان </a></p>
                              <p><a href="" > عيون </a></p>
                               </div>
                               
                                <li><a style="color:">  الاطباء   </a></li>
                              
                              <div class="sub_links" style="display: none; ">
                              <p><a href="" > جراحه </a></p>
                              <p><a href="" > اسنان </a></p>
                              <p><a href="" > عيون </a></p>
                               </div>
                                <li><a style="color:">  الاطباء   </a></li>
                              
                              <div class="sub_links" style="display: none; ">
                              <p><a href="" > جراحه </a></p>
                              <p><a href="" > اسنان </a></p>
                              <p><a href="" > عيون </a></p>
                               </div>

                    </ul>    
                </div>

               
<!-- End css3menu.com BODY section -->
  </div> <!-- end .widget -->		
    
    
</div> <!-- end #sidebar -->			
				</div> <!-- #main-content -->
			</div> <!-- #main-area -->
			<div id="main-area-bottom"></div>
            
	<!---------------------------------------- footer ------------------------------------------------------>
			<div id="footer">
				<p id="copyright">
                 <a href="#">copyright &copy; 2013 daliltanta.com</a> | 
                Developed by <a href="#"  title="For web design and development"> Concept company</a></p>
			</div> <!-- #footer-->
			
		</div> <!-- .container -->
	</div> <!-- #content -->
	

		
	 
<script type="text/javascript">
	var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
        	var indexImage = $('#bigPic img')[index]
            if(currentImage){   
            	if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(0, function() {
					    myTimer = setTimeout("showNext()", 4000);
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
           
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    
    var myTimer;
    
    $(document).ready(function() {
	    myTimer = setTimeout("showNext()",0);
		showNext(); //loads first image
       
	});
    
	
	</script>	
</body>

</html>			