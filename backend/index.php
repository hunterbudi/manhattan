<?php
session_start();
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Administrator Site | beacukai.go.id</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="index.php" method="post" name="login">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <input type="submit" class="btn bg-olive btn-block" name="submit" value="login">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                </div>
            </form>
        </div>
        
    <?php
    include 'lib/connection.php';
    include 'lib/antiinject.php';
    if(isset($_POST['submit'])){
           
    $username = antiinjection($_POST['username']);
    $password = antiinjection($_POST['password']);
        //query untuk mendapatkan record username
        $quser = mysql_query("select * from user where username='$username' ");
        $duser = mysql_fetch_array($quser);
        $a = mysql_num_rows($quser);
        if ($a > 0) {
            $pengacak = "AJWKXLAJSCLWLW";
            $acak=md5($pengacak . md5($password) . $pengacak);
            if ($acak == $duser['password']) {
                $_SESSION['id'] = $duser['id'];
                $_SESSION['nama'] = $duser['nama'];
                $_SESSION['nip'] = $duser['nip'];
                $_SESSION['username'] = $duser['username'];
                $_SESSION['password'] = $duser['password'];
                $_SESSION['usergroup'] = $duser['usergroup'];
                $_SESSION['avatar'] = $duser['avatar'];
                                
                $ip_user = $_SERVER['REMOTE_ADDR'];
                
                //Declare session for CKEDITOR and KCFINDER
                $_SESSION['KCFINDER']=array();
                $_SESSION['KCFINDER']['disabled'] = false;
                $_SESSION['KCFINDER']['uploadURL'] = "http://192.168.3.15/beacukai/upload";
                $_SESSION['KCFINDER']['uploadDir'] = "";       
            header('Location: home.php');  
            exit(); 
            }
            else {
            echo '<script type="text/javascript">window.location="index.php"</script>';
            }
        }    
    }?>        
    </body>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="js/AdminLTE/app.js" type="text/javascript"></script>
    <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    
</html>