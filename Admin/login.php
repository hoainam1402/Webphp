<?php
    session_start();
    if(isset($_SESSION['username']) != "")
    {
        header("Location: index.php");
    }

    require_once("../Admin/Entities/admin.class.php");

    if (isset($_POST["submit"]))
    {
        $user = $_POST["user"];
        $password      = $_POST["password"];
        $result = admin::check_login($user,base64_encode($password));
        /*----- Kiem Tra Gia Tri Null -----*/
        if (empty($user && $password))
        {
            ?>
            <script>alert("Tên tài khoản hoặc mật khẩu không được rỗng!");</script>
            <?php
        }
        else
        {
            $row_cnt = mysqli_num_rows($result);
            if ($row_cnt == 1)
            {
                $_SESSION['username'] = $user;
                header("Location: index.php");
            }
            else
            {
                ?>
                <script>alert("Sai tên tài khoản hoặc mật khẩu!");</script>
                <?php
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <link href="http://localhost/WebPhP/Content/img/logo-home.jpg" rel="icon">
    <!-- Title Page-->
    <title>Login An Nam Shop</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../Content/img/Logo-shop.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input class="au-input au-input--full" required type="text" name="user" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Nhập tài khoản">
                                </div>
                                <div class="fouseroup">
                                    <label>Mật Khẩu</label>
                                    <input class="au-input au-input--full" required type="password" name="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id = "remember"<?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> >Nhớ tài khoản
                                    </label>
                                    <label>
                                        <a href="forgot-pass.php">Quên mật khẩu của bạn?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name = "submit">Đăng Nhập</button>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" onclick="window.location.href='../index.php'" >Quay lại</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
