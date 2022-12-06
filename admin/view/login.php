<?php
require('models/m_user.php');
require('../db.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_user = check_user_admin($email, $password);
    if(is_array($check_user)){
        $_SESSION['user'] = $check_user;

        echo "<script>
            window.location.href='index.php'
        </script>";
    }
    else{
        // header('location:login.php');
        echo "<script>
            window.location.href='index.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 11:25:54 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>EduBlink | Admin</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link rel="stylesheet" href="view/admin/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="view/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="view/admin/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="view/admin/assets/css/pages/login.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="view/admin/assets/img/favicon.png" />
</head>

<body>
    <div class="main" style="background-color: #222736;">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style="background-color: #2a3042;">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="view/admin/assets/img/pages/signin.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title" style="color: white;">Login</h2>
                        <form class="register-form" id="login-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <div class="">
                                    <input name="email" type="text" placeholder="Email" form-control input-height" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input name="password" type="password" placeholder="Password" class="form-control input-height" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <button class="btn btn-round btn-primary" name="login" id="signin">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2022 11:25:54 GMT -->

</html>