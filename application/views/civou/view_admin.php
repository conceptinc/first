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
                <h3> اداره  الاعلانات</h3>                                          
                <tr>                                                 
                   <td>
                       <a href="<?php echo site_url('civou/c_dept/load_dept_view'); ?>"  >   اداره الاقسام  الرئيسيه  </a>
                   </td>
                </tr>
            </table>                                               
        </div>

        <div id="footer">

        </div>

    </body>  

</html>