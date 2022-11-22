<div class="hero-banner hero-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">Trải Nghiệm <span class="color-secondary">2500+</span> <br>Khoá Học Tốt Nhất Từ EduBlink</h1>
                    <!-- <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.</p> -->
                    <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                        <a href="course-one.html" class="edu-btn">Tìm khoá học <i class="icon-4"></i></a>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="2" src="view/assets/images/about/shape-13.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-thumbnail">
                    <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                        <img src="view/assets/images/banner/girl-1.webp" alt="Girl Image">
                    </div>
                    <div class="instructor-info" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
                        <div class="inner">
                            <h5 class="title">Giảng Viên</h5>
                            <div class="media">
                                <div class="thumb">
                                    <img src="view/assets/images/banner/author-1.png" alt="Images">
                                </div>
                                <div class="content">
                                    <span>200+</span> Giảng Viên
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="1.5" src="view/assets/images/about/shape-15.png" alt="Shape">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="-1.5" src="view/assets/images/about/shape-16.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <span data-depth="3" class="circle-shape"></span>
                        </li>
                        <li class="shape-4" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="-1" src="view/assets/images/counterup/shape-02.png" alt="Shape">
                        </li>
                        <li class="shape-5 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="1.5" src="view/assets/images/about/shape-13.png" alt="Shape">
                        </li>
                        <li class="shape-6 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                            <img data-depth="-2" src="view/assets/images/about/shape-18.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-7">
        <img src="view/assets/images/about/h-1-shape-01.png" alt="Shape">
    </div>
</div>
<!--=====================================-->
<!--=       Features Area Start      =-->
<!--=====================================-->
<!-- Start Categories Area  -->
<div class="features-area-2">
    <div class="container">
        <div class="features-grid-wrap">
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="view/assets/images/animated-svg-icons/online-class.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>3020</span> Khoá Học Online</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="view/assets/images/animated-svg-icons/instructor.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>Top</span>Giảng Viên</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon certificate">
                    <img class="svgInject" src="view/assets/images/animated-svg-icons/certificate.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>Chứng Chỉ</span>Online</h5>
                </div>
            </div>
            <div class="features-box features-style-2 edublink-svg-animate">
                <div class="icon">
                    <img class="svgInject" src="view/assets/images/animated-svg-icons/user.svg" alt="animated icon">
                </div>
                <div class="content">
                    <h5 class="title"><span>6000</span>Học Viên</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories Area  -->
<!--=====================================-->
<!--=       Categories Area Start      =-->
<!--=====================================-->
<!-- Start Categories Area  -->
<div class="edu-categorie-area categorie-area-2 edu-section-gap">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <h2 class="title">Danh Mục Khoá Học</h2>
            <?php var_dump($danh_sach_danh_muc) ?>
            <span class="shape-line"><i class="icon-19"></i></span>
            <!-- <p>Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore</p> -->
        </div>

        <div class="row g-5">
            <?php foreach ($danh_sach_danh_muc as $danh_muc) : ?>
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-2 <?= $danh_muc['mau_nen'] ?> edublink-svg-animate">
                        <div class="icon">
                            <i class="<?= $danh_muc['icon'] ?>"></i>
                        </div>
                        <div class="content">
                            <a href="course-one.html">
                                <h5 class="title"><?= $danh_muc['ten_danhmuc'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-secondary-style">
                    <div class="icon">
                        <i class="icon-10 art-design"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Arts & Design</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra01-style">
                    <div class="icon">
                        <i class="icon-11 personal-development"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Personal Development</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-tertiary-style">
                    <div class="icon">
                        <i class="icon-12 health-fitness"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Health & Fitness</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra02-style">
                    <div class="icon">
                        <i class="icon-13 data-science"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Data Science</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra03-style">
                    <div class="icon">
                        <i class="icon-14"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Marketing</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra04-style">
                    <div class="icon">
                        <i class="icon-15"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Business & Finance</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra05-style">
                    <div class="icon">
                        <i class="icon-16 computer-science"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Computer Science</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-2 color-extra06-style">
                    <div class="icon">
                        <i class="icon-17 video-photography"></i>
                    </div>
                    <div class="content">
                        <a href="course-one.html">
                            <h5 class="title">Video & Photography</h5>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- End Categories Area  -->
<!--=====================================-->
<!--=       About Us Area Start      	=-->
<!--=====================================-->
<div class="gap-bottom-equal edu-about-area about-style-1">
    <div class="container edublink-animated-shape">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-image-gallery">
                    <img class="main-img-1" src="view/assets/images/about/about-01.webp" alt="About Image">
                    <div class="video-box" data-sal-delay="150" data-sal="slide-down" data-sal-duration="800">
                        <div class="inner">
                            <div class="thumb">
                                <img src="view/assets/images/about/about-02.webp" alt="About Image">
                                <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="popup-icon video-popup-activation">
                                    <i class="icon-18"></i>
                                </a>
                            </div>
                            <div class="loading-bar">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="award-status bounce-slide">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-21"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">29+</h6>
                                <span class="subtitle">Wonderful Awards</span>
                            </div>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="1" src="view/assets/images/about/shape-36.png" alt="Shape">
                        </li>
                        <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="-1" src="view/assets/images/about/shape-37.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                            <img data-depth="1" src="view/assets/images/about/shape-02.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content">
                    <div class="section-title section-left">
                        <span class="pre-title">Về Chúng Tôi</span>
                        <h2 class="title">Học Và Phát Triền Kĩ Năng <span class="color-secondary">Ở Bất Cứ Đâu</span></h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.</p> -->
                    </div>
                    <ul class="features-list">
                        <li>Giảng Viên Dày Dặn Kinh Nghiệm</li>
                        <li>Học Hoàn Toàn Trực Tuyến</li>
                        <li>Truy Cập Trọn Đời</li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1 circle scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                <span data-depth="-2.3"></span>
            </li>
        </ul>
    </div>
</div>
<!--=====================================-->
<!--=       Course Area Start      		=-->
<!--=====================================-->
<!-- Start Course Area  -->
<div class="edu-course-area course-area-1 edu-section-gap bg-lighten01">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Popular Courses</span>
            <h2 class="title">Pick A Course To Get Started</h2>
            <?php var_dump($danh_sach_khoa_hoc) ?>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <?php foreach ($danh_sach_khoa_hoc as $khoa_hoc) : ?>
                <!-- Start Single Course  -->
                <div class="col-md-6 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="public/image/course/<?= $khoa_hoc['hinh'] ?>" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i><?= $khoa_hoc['thoi_gian'] ?> Tuần</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level"><?= $khoa_hoc['level'] ?></span>
                                <h6 class="title">
                                    <a href="#"><?= $khoa_hoc['ten_khoa_hoc'] ?></a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /8 Rating)</span>
                                </div>
                                <div class="course-price"><?= number_format($khoa_hoc['hoc_phi']) ?>đ</div>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i><?= $khoa_hoc['thoi_gian'] ?> Tuần</li>
                                    <li><i class="icon-25"></i>28 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content">
                            <div class="content">
                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                <span class="course-level"><?= $khoa_hoc['level'] ?></span>
                                <h6 class="title">
                                    <a href="index.php?url=course_detail&course_id=<?= $khoa_hoc['ma_khoa_hoc'] ?>"><?= $khoa_hoc['ten_khoa_hoc'] ?></a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /8 Rating)</span>
                                </div>
                                <div class="course-price"><?= number_format($khoa_hoc['hoc_phi']) ?>đ</div>
                                <p><?= $khoa_hoc['thong_tin_khoa_hoc'] ?></p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i><?= $khoa_hoc['thoi_gian'] ?> Tuần</li>
                                    <li><i class="icon-25"></i>28 Students</li>
                                </ul>
                                <a href="index.php?url=course_detail&course_id=<?= $khoa_hoc['ma_khoa_hoc'] ?>" class="edu-btn btn-secondary btn-small">Xem Chi Tiết <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            <?php endforeach; ?>
            
        </div>
        <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
            <a href="index.php?url=khoa_hoc" class="edu-btn">Browse more courses <i class="icon-4"></i></a>
        </div>
    </div>
</div>
<!-- End Course Area -->
<!--=====================================-->
<!--=       CounterUp Area Start      	=-->
<!--=====================================-->
<div class="counterup-area-2">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <div class="counterup-box-wrap">
                    <div class="counterup-box counterup-box-1">
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number primary-color">
                                <span class="odometer" data-odometer-final="45.2">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Student Enrolled</h6>
                        </div>
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number secondary-color">
                                <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                            </h2>
                            <h6 class="title">Class Completed</h6>
                        </div>
                    </div>
                    <div class="counterup-box counterup-box-2">
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number extra05-color">
                                <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                            </h2>
                            <h6 class="title">Top Instructors</h6>
                        </div>
                        <div class="edu-counterup counterup-style-2">
                            <h2 class="counter-item count-number extra02-color">
                                <span class="odometer" data-odometer-final="99.9">.</span><span>%</span>
                            </h2>
                            <h6 class="title">Satisfaction Rate</h6>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-1 scene">
                            <img data-depth="-2" src="view/assets/images/about/shape-13.png" alt="Shape">
                        </li>
                        <li class="shape-2">
                            <img class="rotateit" src="view/assets/images/counterup/shape-02.png" alt="Shape">
                        </li>
                        <li class="shape-3 scene">
                            <img data-depth="1.6" src="view/assets/images/counterup/shape-04.png" alt="Shape">
                        </li>
                        <li class="shape-4 scene">
                            <img data-depth="-1.6" src="view/assets/images/counterup/shape-05.png" alt="Shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=       Testimonial Area Start      =-->
<!--=====================================-->
<!-- Start Testimonial Area  -->
<div class="testimonial-area-1 section-gap-equal">
    <div class="container">
        <div class="row g-lg-5">
            <div class="col-lg-5">
                <div class="testimonial-heading-area">
                    <div class="section-title section-left" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Testimonials</span>
                        <h2 class="title">What Our Students Have To Say</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt labore dolore magna aliquaenim ad minim.</p>
                        <a href="#" class="edu-btn btn-large">View All<i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="home-one-testimonial-activator swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="view/assets/images/testimonial/testimonial-01.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Ray Sanchez</h5>
                                    <span class="subtitle">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="view/assets/images/testimonial/testimonial-02.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Thomas Lopez</h5>
                                    <span class="subtitle">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="view/assets/images/testimonial/testimonial-03.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Amber Page</h5>
                                    <span class="subtitle">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-grid">
                                <div class="thumbnail">
                                    <img src="view/assets/images/testimonial/testimonial-04.png" alt="Testimonial">
                                    <span class="qoute-icon"><i class="icon-26"></i></span>

                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor amet consec tur elit adicing sed do usmod zx tempor enim minim veniam quis nostrud exer citation.</p>
                                    <div class="rating-icon">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <h5 class="title">Robert Tapp</h5>
                                    <span class="subtitle">Content Creator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area  -->
<!--=====================================-->
<!--=      Call To Action Area Start   	=-->
<!--=====================================-->
<!-- Start CTA Area  -->
<div class="home-one-cta-two cta-area-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="home-one-cta edu-cta-box bg-image">
                    <div class="inner">
                        <div class="content text-md-end">
                            <span class="subtitle">Liên Lạc Qua:</span>
                            <h3 class="title"><a href="mailto:giang03yn@gmail.com">giang03yn@gmail.com</a></h3>
                        </div>
                        <div class="sparator">
                            <span>hoặc</span>
                        </div>
                        <div class="content">
                            <span class="subtitle">Phone Number:</span>
                            <h3 class="title"><a href="tel:+840971631797">+84 097 163 1797</a></h3>
                        </div>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-01 scene">
                            <img data-depth="2" src="view/assets/images/cta/shape-06.png" alt="shape">
                        </li>
                        <li class="shape-02 scene">
                            <img data-depth="-2" src="view/assets/images/cta/shape-12.png" alt="shape">
                        </li>
                        <li class="shape-03 scene">
                            <img data-depth="-3" src="view/assets/images/cta/shape-04.png" alt="shape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End CTA Area  -->
<!--=====================================-->
<!--=      		Team Area Start   		=-->
<!--=====================================-->
<!-- Start Team Area  -->
<div class="edu-team-area team-area-1 gap-tb-text">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Instructors</span>
            <h2 class="title">Course Instructors</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-team-grid team-style-1">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="view/assets/images/team/team-01.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Jane Seymour</a></h5>
                            <span class="designation">UI Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-team-grid team-style-1">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="view/assets/images/team/team-02.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Edward Norton</a></h5>
                            <span class="designation">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-team-grid team-style-1">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="view/assets/images/team/team-03.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">Penelope Cruz</a></h5>
                            <span class="designation">Digital Marketer</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
            <!-- Start Instructor Grid  -->
            <div class="col-lg-3 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-team-grid team-style-1">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="team-details.html">
                                    <img src="view/assets/images/team/team-04.webp" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="team-details.html">John Travolta</a></h5>
                            <span class="designation">WordPress Expert</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instructor Grid  -->
        </div>
    </div>
</div>
<!-- End Team Area  -->
<!--=====================================-->
<!--=      CTA Banner Area Start   		=-->
<!--=====================================-->
<!-- Start Ad Banner Area  -->
<div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
    <div class="container">
        <div class="edu-cta-banner">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h2 class="title">Get Your Quality Skills <span class="color-secondary">Certificate</span> Through EduBlink</h2>
                        <a href="contact-us.html" class="edu-btn">Get started now <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-01 scene">
                    <img data-depth="2.5" src="view/assets/images/cta/shape-10.png" alt="shape">
                </li>
                <li class="shape-02 scene">
                    <img data-depth="-2.5" src="view/assets/images/cta/shape-09.png" alt="shape">
                </li>
                <li class="shape-03 scene">
                    <img data-depth="-2" src="view/assets/images/cta/shape-08.png" alt="shape">
                </li>
                <li class="shape-04 scene">
                    <img data-depth="2" src="view/assets/images/about/shape-13.png" alt="shape">
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Ad Banner Area  -->
<!--=====================================-->
<!--=      		Brand Area Start   		=-->
<!--=====================================-->
<!-- Start Brand Area  -->
<div class="edu-brand-area brand-area-1 gap-top-equal">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="brand-section-heading">
                    <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Our Partners</span>
                        <h2 class="title">Learn with Our Partners</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="brand-grid-wrap">
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-01.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-02.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-03.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-04.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-05.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-06.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-07.png" alt="Brand Logo">
                    </div>
                    <div class="brand-grid">
                        <img src="view/assets/images/brand/brand-08.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area  -->
<!--=====================================-->
<!--=      		Blog Area Start   		=-->
<!--=====================================-->
<!-- Start Blog Area  -->
<div class="edu-blog-area blog-area-1 edu-section-gap">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <span class="pre-title">Latest Articles</span>
            <h2 class="title">Get News with EduBlink</h2>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <!-- Start Blog Grid  -->
            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="blog-details.html">
                                <img src="view/assets/images/blog/blog-01.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content position-top">
                            <div class="read-more-btn">
                                <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                            </div>
                            <div class="category-wrap">
                                <a href="#" class="blog-category">ONLINE</a>
                            </div>
                            <h5 class="title"><a href="blog-details.html">Become a Better Blogger: Content Planning</a></h5>
                            <ul class="blog-meta">
                                <li><i class="icon-27"></i>Oct 10, 2021</li>
                                <li><i class="icon-28"></i>Com 09</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->
            <!-- Start Blog Grid  -->
            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="blog-details.html">
                                <img src="view/assets/images/blog/blog-02.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content position-top">
                            <div class="read-more-btn">
                                <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                            </div>
                            <div class="category-wrap">
                                <a href="#" class="blog-category">LECTURE</a>
                            </div>
                            <h5 class="title"><a href="blog-details.html">How to Keep Workouts Fresh in the Morning</a></h5>
                            <ul class="blog-meta">
                                <li><i class="icon-27"></i>Oct 10, 2021</li>
                                <li><i class="icon-28"></i>Com 09</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed do eiusmod ux tempor incid idunt labore dol oremagna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->
            <!-- Start Blog Grid  -->
            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="blog-details.html">
                                <img src="view/assets/images/blog/blog-03.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="content position-top">
                            <div class="read-more-btn">
                                <a class="btn-icon-round" href="blog-details.html"><i class="icon-4"></i></a>
                            </div>
                            <div class="category-wrap">
                                <a href="#" class="blog-category">BUSINESS</a>
                            </div>
                            <h5 class="title"><a href="blog-details.html">Four Ways to Keep Your Workout Routine Fresh</a></h5>
                            <ul class="blog-meta">
                                <li><i class="icon-27"></i>Oct 10, 2021</li>
                                <li><i class="icon-28"></i>Com 09</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet cons tetur adipisicing sed do eiusmod ux tempor incid idunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Grid  -->
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1 scene">
            <img data-depth="-1.4" src="view/assets/images/about/shape-02.png" alt="Shape">
        </li>
        <li class="shape-2 scene">
            <span data-depth="2.5"></span>
        </li>
        <li class="shape-3 scene">
            <img data-depth="-2.3" src="view/assets/images/counterup/shape-05.png" alt="Shape">
        </li>
    </ul>
</div>
<!-- End Blog Area  -->
<!--=====================================-->
<!--=        Footer Area Start       	=-->
<!--=====================================-->
<!-- Start Footer Area  -->