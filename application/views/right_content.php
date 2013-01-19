<div id="login">
    <div id="main" class="form-4">
        <?php echo form_open(''); ?> 
        <span>دخول العملاء للتعديل علي اعلانتهم</span>
        <p>
            <label for="login">البريد الالكتروني</label>
           
            
             <?php echo form_input(array('id' => '', 'name' => 'login','value'=>'....اسم العميل',
			'onblur'=>"if(this.value=='') this.value='....اسم العميل'" ,'onfocus'=>"if(this.value =='....اسم العميل' ) this.value=''"
			)); ?>
        </p>
        <p>
            <label for="password">كلمه المرور</label>
            <?php echo form_password(array('id' => '', 'name' => 'password','value'=>'....اسم العميل',
			'onblur'=>"if(this.value=='') this.value='....اسم العميل'" ,'onfocus'=>"if(this.value =='....اسم العميل' ) this.value=''"
			)); ?>
        </p>

        <p>
            <input type="submit" name="submit" value="دخول">

        </p>       
        <?php echo form_close(); ?>
    </div>
</div>

<!----------------------------------------------- main menu ----------------------------------------------->        
<div class="main_menu" >

    <ul class="nav2" style="margin-top:-10px">



        <?php
        $v = "";
        foreach ($result as $row) {
            if ($v != $row->d_name) {
                $v = $row->d_name;
                echo "<li><a style=\"color:\"> " . $v . " </a></li>";
                echo "<div class=\"sub_links\" style=\"display: none; \">";

                foreach ($result as $r) {
                    if ($r->d_name == $v) {
                        if ($r->d_id != 1) {
                            echo "<p><a href=" . site_url() . "site/showBySubId/" . $r->sd_id . "  style=\"color:0\">" . $r->sd_name . "</a></p>";
                        } else {
                            echo "<p><a href=" . site_url() . "site/showDoctor/" . $r->sd_id . "  style=\"color:0\">" . $r->sd_name . "</a></p>";
                        }
                    }
                }
                echo " </div>";
            }
        }
        ?>                  

    </ul>    
</div>
