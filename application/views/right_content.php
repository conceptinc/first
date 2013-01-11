<div id="login">
    <div id="main" class="form-4">
        <?php echo form_open(''); ?> 
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
        <?php echo form_close(); ?>
    </div>
</div>

<!----------------------------------------------- main menu ----------------------------------------------->        
<div class="main_menu" >

    <ul class="nav2" style="margin-top:-10px">


        <li> 
            <a > خدمات الكمبيوتر </a>
        </li>
        <div class="sub_links" style="display: none; ">
            <p><a href="#"  >بيع</a></p>
            <p><a href="#" >تصليح</a></p>
        </div>

        <?php
        $v = "";
        foreach ($result as $row) {
            if ($v != $row->d_name) {
                $v = $row->d_name;
                echo "<li><a style=\"color:\"> " . $v . " </a></li>";
                echo "<div class=\"sub_links\" style=\"display: none; \">";

                foreach ($result as $r) {
                    if ($r->d_name == $v) {
                        echo "<p><a href=" . site_url() . "site/showBySubId/" . $r->sd_id . "  style=\"color:0\">" . $r->sd_name . "</a></p>";
                    }
                }
                echo " </div>";
            }
        }
        ?>                  

    </ul>    
</div>
