<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from edublink.html.devsblink.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 08:46:22 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (isset($page_title)) { ?>
        <title><?= $page_title ?></title>
        ?>
    <?php } else { ?>
        <title>EduBlink</title>
    <?php } ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/assets/images/favicon.png">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="view/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="view/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="view/assets/css/vendor/magnifypopup.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/odometer.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/lightbox.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="view/assets/css/vendor/tipped.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="view/assets/css/app.css">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="edu-header header-style-1 header-fullwidth">
            <div class="header-top-bar">
                <div class="container-fluid">
                    <div class="header-top">
                        <div class="header-top-left">
                            <div class="header-notify">
                                Giảm giá 50% cho 20 học viên đầu tiên. <a href="#">Nhanh tay nào!</a>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                <?php if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user'])
                                ?>
                                    <li>Xin Chào: <a href="index.php?url=user_detail&user_id=<?= $ma_nguoi_dung ?>"><?= $ho_ten ?></a></li>
                                    <li><a href="index.php?url=user_detail&user_id=<?= $ma_nguoi_dung ?>"><img style="object-fit: cover;width: 35px;border-radius: 100%;height: 35px;" src="public/image/user/abcabc.jpg" alt=""></a></li>
                                    <?php if ($quyen == 1) { ?>
                                        <li><a href="admin" target="blank">Đến Trang Quản Trị</a></li>
                                    <?php } ?>
                                    <li><a href="index.php?url=logout">Đăng Xuất</a></li>
                                <?php } else { ?>
                                    <li><a href="index.php?url=login">Đăng nhập</a></li>
                                    <li><a href="index.php?url=register">Đăng ký</a></li>

                                    <li><a href="tel:+011235641231"><i class="icon-phone"></i>Call: 097 163 1797</a></li>
                                    <li><a href="mailto:giang03yn@gmail.com" target="_blank"><i class="icon-envelope"></i>Email: giang03yn@gmail.com</a></li>
                                <?php } ?>
                                <li class="social-icon">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edu-sticky-placeholder"></div>
            <div class="header-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-brand">
                            <div class="logo">
                                <a href="index.php?url=trang_chu">
                                    <img class="logo-light" src="view/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                    <img class="logo-dark" src="view/assets/images/logo/logo-white.png" alt="Corporate Logo">
                                </a>
                            </div>
                            <div class="header-category">
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                            <a href="#"><i class="icon-1"></i>Danh mục</a>
                                            <ul class="submenu">
                                                <li><a href="index.php?url=all_courses">Tất Cả</a></li>
                                                <?php foreach (danh_sach_danh_muc() as $category) : ?>
                                                    <li><a href="index.php?url=all_courses&category_id=<?= $category['ma_danhmuc'] ?>"><?= $category['ten_danhmuc'] ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-mainnav">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="has-droupdown"><a href="index.php?url=trang_chu">Trang chủ</a>
                                    </li>

                                    <li class="has-droupdown"><a href="#">Khoá học</a>
                                        <ul class="submenu">
                                            <li><a href="index.php?url=all_courses">Tất Cả</a></li>
                                            <?php foreach (danh_sach_danh_muc() as $category) : ?>
                                                <li><a href="index.php?url=all_courses&category_id=<?= $category['ma_danhmuc'] ?>"><?= $category['ten_danhmuc'] ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="header-action">
                                <li class="search-bar">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button class="search-btn" type="button"><i class="icon-2"></i></button>
                                    </div>
                                </li>
                                <li class="icon search-icon">
                                    <a href="javascript:void(0)" class="search-trigger">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                                <li class="header-btn">
                                    <a href="#" class="edu-btn btn-medium">Try for free <i class="icon-4"></i></a>
                                </li>
                                <li class="mobile-menu-bar d-block d-xl-none">
                                    <button class="hamberger-button">
                                        <i class="icon-54"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-mobile-menu">
                <div class="inner">
                    <div class="header-top">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="view/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                                <img class="logo-dark" src="view/assets/images/logo/logo-white.png" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="close-menu">
                            <button class="close-button">
                                <i class="icon-73"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="mainmenu">
                        <li class="has-droupdown"><a href="index.php">Home</a>
                        </li>
                        <li class="has-droupdown"><a href="index.php?url=all_courses">Courses</a>
                        </li>
                </div>
            </div>
            <!-- Start Search Popup  -->
            <div class="edu-search-popup">
                <div class="content-wrap">
                    <div class="site-logo">
                        <img class="logo-light" src="view/assets/images/logo/logo-dark.png" alt="Corporate Logo">
                        <img class="logo-dark" src="view/assets/images/logo/logo-white.png" alt="Corporate Logo">
                    </div>
                    <div class="close-button">
                        <button class="close-trigger"><i class="icon-73"></i></button>
                    </div>
                    <div class="inner">
                        <form class="search-form" action="index.php?url=search_courses" method="POST">
                            <input name="keyword" type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                            <button name="search" class="submit-button"><i class="icon-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Search Popup  -->
        </header>
        <!--=====================================-->
        <!--=       Hero Banner Area Start      =-->
        <!--=====================================-->