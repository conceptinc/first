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
                var m=1;
                // adding and removing file input box
                var i = $('#AddFileInputBox div').size() + 1;
                $('#AddMoreFileBox').live('click', function() {
                    if(i < MaxFileInputs)
                    {
                        $('<span><input type="file" id="fileInputBox" size="20" name="file'+m+'"  class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="<?php echo base_url(); ?>images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder);
                        i++;
                        m++;
                    }
                    return false;
                });

                $('#removeFileBox').live('click', function() { 
                    if( i > 1 ) {
                        $(this).parents('span').remove();i--;
                    }
                    return false;
                });
                // congiguration to  uploadform2  div 

                var progressbox 		= $('#progressbox'); //progress bar wrapper
                var progressbar 		= $('#progressbar'); //progress bar element
                var statustxt 			= $('#statustxt'); //status text element
                var submitbutton 		= $("#SubmitButton"); //submit button
                var myform 				= $("#UploadForm2"); //upload form
                var output 				= $("#output"); //ajax result output element
                var completed 			= '0%'; //initial progressbar value
                var FileInputsHolder2 	= $('#AddFileInputBox2'); //Element where additional file inputs are appended
                var MaxFileInputs2		= 20; //Maximum number of file input boxs
                var mm=1;
                // adding and removing file input box
                var i = $('#AddFileInputBox2 div').size() + 1;
                $('#AddMoreFileBox2').live('click', function() {
                    if(i < MaxFileInputs2)
                    {
                        $('<span><input type="file" id="fileInputBox" size="20" name="gallery'+mm+'"  class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="<?php echo base_url(); ?>images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder2);
                        i++;
                        mm++;
                    }
                    return false;
                });

                $('#removeFileBox').live('click', function() { 
                    if( i > 1 ) {
                        $(this).parents('span').remove();i--;
                    }
                    return false;
                });

                //////////////// end of  upload formdiv2 ////////////////////////////

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
    <style type="text/css">
        .error{color:#F00;font-size:18px}

    </style>
    <body>


        <?php
        if (!$customer) {
            include('view_menu.php');
        }
        ?>

        <br/><br/>
        <?php
        if (isset($error)) {
            echo '<p class="error">' . $error . '</p>';
        }
        ?>
        <br/><br/>

        <div class="error"><?php echo validation_errors(); ?></div>
        <?php echo form_open_multipart('civou/c_adv/updateAdv'); ?>



        <?php
        foreach ($res as $value) {


            echo "<br/><br/>";
            echo "الاسم   :   ";
            echo form_input('adv_name', $value->name);
            echo "<br/><br/>";
            echo "الوصف  :   ";
            echo form_input('desc', $value->desc);
            echo "<br/><br/>";
            echo "النشاط   :  ";
            echo form_input('adv_nashat', $value->nashat);
            echo "<br/><br/>";
            echo "العنوان   :  ";
            echo form_input('adv_address', $value->address);
            echo "<br/><br/>";
            echo "التليفون   :  ";
            echo form_input('adv_phone', $value->phone);
            echo "<br/><br/>";

            if (isset($value->username)) {
                echo " <div id='user' >";
                echo "  صاحب الاعلان    :  ";
                echo form_input('username', $value->username);
                echo "<br/><br/>";

                echo "كلمه السر    :  ";
                echo form_input('pass', $value->password);
                echo "<br/><br/>";
                echo "</div>";
            }

            if (isset($value->vedio)) {
                echo " <div id='vedio' >";
                echo "  الفيديو :   ";
                echo form_input('vedio');
                echo "<br/><br/>";
                echo "</div>";
            }
            ?>


            <div id="uploaderform">
                <!--            <form  name="UploadForm" id="UploadForm">-->
                <label>  صور خاصه بالاعلان 
                    <span class="small"><a href="#" id="AddMoreFileBox">Add More Files</a></span>
                </label>
                <div id="AddFileInputBox">
                    <table border="1" > 
                        <?php
                        foreach ($photo as $ph) {
                            $i = 0;
                            ?>
                            <tr>
                                <td>
                                    <input id="fileInputBox" style="margin-bottom: 5px;" type="file"  name="<?php echo "file.$i."; ?>"/>
                                </td>
                                <td>
                                    <img src="<?php echo $ph['th_url_photo'] ?>"  >
                                </td>     
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </table>
                </div>

                <div class="sep_s"></div>
                <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
                <!--            </form>-->
            </div>

            <?php if (isset($gallery)) { ?>

                <div id="uploaderform2">
                    <!--            <form  name="UploadForm" id="UploadForm">-->
                    <label>  صور خاصه بالبوم الصور للاعلان الذهبى  
                        <span class="small"><a href="#" id="AddMoreFileBox2">Add More Files</a></span>
                    </label>
                    <div id="AddFileInputBox2">
                        <table border="1" >
                            <?php
                            foreach ($gallery as $value) {
                                $i = 0;
                                ?> 
                                <tr>
                                    <td>
                                        <input id="fileInputBox" style="margin-bottom: 5px;" type="file"  name="<?php echo "gallery.$i."; ?>"/>
                                    </td><td>
                                        <img src="<?php echo $value['th_url'] ?>"  >                     
                                    </td>  
                                    <?php
                                    $i++;
                                }
                                ?>
                        </table>
                    </div>
                    <div class="sep_s"></div>
                    <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
                    <!--            </form>-->
                </div>
            <?php } ?>
            <br/><br/>

            <?php
        }
        echo form_submit('upload', 'حفظ');

        echo "<br/><br/>";

        echo form_close();
        ?>
        <script src="<?php echo base_url(); ?>js/jquery.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>js/jquery.js" type="text/javascript" ></script>
        <script type="text/javascript">
            
            $(document).ready(function() {$('#uploaderform2').hide();
                $('#type').change( 
                function(){
                    var list_value=$('#type').val();
                
                    if(list_value=='1'){
                        $('#uploaderform2').show();
                        $('#uploaderform').show();
                        $('#vedio').show();
                        $('#user').show();
                        $('#pass').show();
                    }
                
                    else if(list_value=='2'){
                        $('#uploaderform2').hide();
                        $('#uploaderform').show();
                        $('#vedio').hide();
                        $('#user').show();
                        $('#pass').show();
                    }
                
                    else if(list_value=='3'){
                        $('#uploaderform2').hide();
                        $('#uploaderform').hide();
                        $('#vedio').hide();
                        $('#user').hide();
                        $('#pass').hide();
                    }
                }
            );
    
        </script> 

    </body>  

</html>