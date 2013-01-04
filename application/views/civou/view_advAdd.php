<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>اضافه اعلان </title>

        <!--begin jquery  and  css code  to make  drop down bompobox   ------------------------------------->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.2.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $('#loader').hide();
                $('#show_heading').hide();
             
                $('#search_category_id').change(function(){
                    $('#show_sub_categories').fadeOut();
                    $('#loader').show();
                    $('#show_heading').show();
                    
                    $.post("<?php echo site_url('js/get_chid_categories.php') ?>", {
                        parent_id: $('#search_category_id').val()
                    }, function(response){			
                        setTimeout("finishAjax('show_sub_categories', '"+escape(response)+"')", 400);
                    });
                    return false;
                });
            });

            function finishAjax(id, response){
                $('#loader').hide();
                $('#show_heading').show();
                $('#'+id).html(unescape(response));
                $('#'+id).fadeIn();
            } 

            function alert_id()
            {
                if($('#sub_category_id').val() == '')
                    alert('Please select a sub category.');
                else
                    alert($('#sub_category_id').val());
                return false;
            }

        </script>
        <style>
            .both h4{ font-family:Arial, Helvetica, sans-serif; margin:0px; font-size:14px;}
            #search_category_id{ padding:3px; width:200px;}
            #sub_category_id{ padding:3px; width:200px;}
            .both{ float:left; margin:0 15px 0 0; padding:0px;}
        </style>        
        <!--end of drop down compobox    -- ---------------------------------------------------------  -->


        <!--  Begining of upload form  ******************************************************-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function() { 
                //elements
                var progressbox 		= $('#progressbox'); //progress bar wrapper
                var progressbar 		= $('#progressbar'); //progress bar element
                var statustxt 			= $('#statustxt'); //status text element
                var submitbutton 		= $("#SubmitButton"); //submit button
                var myform 				= $("#UploadForm"); //upload form
                var output 				= $("#output"); //ajax result output element
                var completed 			= '0%'; //initial progressbar value
                var FileInputsHolder 	= $('#AddFileInputBox'); //Element where additional file inputs are appended
                var MaxFileInputs		= 20; //Maximum number of file input boxs

                // adding and removing file input box
                var i = $('#AddFileInputBox div').size() + 1;
                $('#AddMoreFileBox').live('click', function() {
                    if(i < MaxFileInputs)
                    {
                        $('<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="<?php echo base_url(); ?>images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder);
                        i++;
                    }
                    return false;
                });

                $('#removeFileBox').live('click', function() { 
                    if( i > 1 ) {
                        $(this).parents('span').remove();i--;
                    }
                    return false;
                });

                $("#ShowForm").click(function () {
                    $("#uploaderform").slideToggle(); //Slide Toggle upload form on click
                });
	
                $(myform).ajaxForm({
                    beforeSend: function() { //brfore sending form
                        submitbutton.attr('disabled', ''); // disable upload button
                        statustxt.empty();
                        progressbox.show(); //show progressbar
                        progressbar.width(completed); //initial value 0% of progressbar
                        statustxt.html(completed); //set status text
                        statustxt.css('color','#000'); //initial color of status text
		
                    },
	
                    uploadProgress: function(event, position, total, percentComplete) { //on progress
                        progressbar.width(percentComplete + '%') //update progressbar percent complete
                        statustxt.html(percentComplete + '%'); //update status text
                        if(percentComplete>50)
                        {
                            statustxt.css('color','#fff'); //change status text to white after 50%
                        }else{
                            statustxt.css('color','#000');
                        }
			
                    },
                    complete: function(response) { // on complete
                        output.html(response.responseText); //update element with received data
                        myform.resetForm();  // reset form
                        submitbutton.removeAttr('disabled'); //enable submit button
                        progressbox.hide(); // hide progressbar
                        $("#uploaderform").slideUp(); // hide form after upload
                    }
                });

            }); 
        </script> 
        <link href="<?php echo base_url(); ?>css/style_uploadform.css" rel="stylesheet" type="text/css" />

        <!-- end of upload form code **************************************************** -->

    </head>
    <?php include('dbcon.php'); ?>

    <body>


        <?php echo form_open_multipart('c_golden_adv/add_golden_adv'); ?>


        <form action="#" name="form" id="form" method="post" onsubmit="return alert_id();" enctype="multipart/form-data">

            <div class="both">
                <h4>Select Category</h4>
                <select name="search_category"  id="search_category_id">
                    <option value="" selected="selected"></option>
                    <?php
                    $query = "select * from dept";
                    $results = mysql_query($query);
                    while ($rows = mysql_fetch_assoc(@$results)) {
                        ?>
                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                    <?php }
                    ?>
                </select>		
            </div>

            <div class="both">
                <h4 id="show_heading">Select Sub Category</h4>
                <div id="show_sub_categories" align="center">
                    <img src="<?php echo base_url(); ?>images/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
                </div>
            </div>
            <br clear="all" /><br clear="all" />
        </form>


        <div>

            <?php
            echo "<br/><br/>";
            echo "الاسم   :   ";
            echo form_input('adv_name');
            echo "<br/><br/>";
            echo "الوصف  :   ";
            echo form_input('desc');
            echo "<br/><br/>";
            echo "النشاط   :  ";
            echo form_input('adv_nashat');
            echo "<br/><br/>";
            echo "العنوان   :  ";
            echo form_input('adv_address');
            echo "<br/><br/>";
            echo "التليفون   :  ";
            echo form_input('adv_phone');
            echo "<br/><br/>";

            echo "اسم دخول صاحب الاعلان    :  ";
            echo form_input('username');
            echo "<br/><br/>";

            echo "كلمه السر    :  ";
            echo form_input('pass');
            echo "<br/><br/>";
            ?>

        </div>


        <div id="uploaderform">
            <form  name="UploadForm" id="UploadForm">
                <label>  صور خاصه بالاعلان 
                    <span class="small"><a href="#" id="AddMoreFileBox">Add More Files</a></span>
                </label>
                <div id="AddFileInputBox">
                    <input id="fileInputBox" style="margin-bottom: 5px;" type="file"  name="file[]"/></div>
                <div class="sep_s"></div>

                <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
            </form>
        </div>

        <br/><br/>

        <?php
        echo form_submit('upload', 'حفظ');
        echo "<br/><br/>";
        echo form_close();
        ?>

    </body>  

</html>