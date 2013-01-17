<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Home Page</title>

        <style>
            h3{
                text-align: center;
            }
            table{
                margin: 0 auto;
            }
            td{
                height: 45px;
                padding-left: 8px;
                text-align:center;
            }
            a{
                text-decoration: none;
                color:#600;
            }
            a:hover{text-decoration:underline; color:#C00}			
        </style>
    </head>
    <body>
        <div id="header" >
        </div>
        <div id="content">
            <table border="1" width="900" >
                <h3> اداره  الاقسام 
                </h3>                                          
                <tr>                                                 
                    <td>
                        <a href="<?php echo site_url('civou/c_dept/load_dept_view'); ?>"  >   اداره الاقسام  الرئيسيه  </a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('civou/c_dept/loadSubDeptView'); ?>"  >   اداره الاقسام  الفرعيه   </a>
                    </td>

                </tr>
                <tr>
                    <td>
                        <a href="<?php echo site_url('civou/add_panners'); ?>" > اضافه بنر رئيسي </a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('civou/c_adv/load_adv_add'); ?>" > اداره الاعلانات </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="<?php echo site_url('civou/c_adv/load_adv_edit'); ?>" >   التعديل على الاعلانات </a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('civou/c_doctor/load_doctor'); ?>" >     اداره الاطباء  </a>
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <a href="<?php echo site_url('civou/c_doctor/load_doctorDeptAdd'); ?>" >     اضافه قسم الاطباء  </a>
                    </td>
                    <td><a href="<?php echo site_url('site/logout'); ?>" >خروج </a> </td>
                </tr>
            </table>                                               
        </div>

        <div id="footer">

        </div>

    </body>  

</html>