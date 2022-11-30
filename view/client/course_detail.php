<div class="edu-breadcrumb-area breadcrumb-style-3">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="course-one.html">Courses</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Course Details</li>
            </ul>
            <div class="page-title">
                <h1 class="title"><?= $course['ten_khoa_hoc'] ?></h1>
            </div>
            <ul class="course-meta">
                <li><i class="icon-58"></i>by Edward Norton</li>
                <li><i class="icon-59"></i>English</li>
                <li class="course-rating">
                    <div class="rating">
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                    </div>
                    <span class="rating-count">(720 Rating)</span>
                </li>
            </ul>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1">
            <span></span>
        </li>
        <li class="shape-2 scene"><img data-depth="2" src="view/assets/images/about/shape-13.png" alt="shape"></li>
        <li class="shape-3 scene"><img data-depth="-2" src="view/assets/images/about/shape-15.png" alt="shape"></li>
        <li class="shape-4">
            <span></span>
        </li>
        <li class="shape-5 scene"><img data-depth="2" src="view/assets/images/about/shape-07.png" alt="shape"></li>
    </ul>
</div>

<!--=====================================-->
<!--=     Courses Details Area Start    =-->
<!--=====================================-->
<section class="edu-section-gap course-details-area">
    <div class="container">
        <div class="row row--30">
            <div class="col-lg-8">
                <div class="course-details-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="course-tab-content">
                                <div class="course-overview">
                                    <h3 class="heading-title">Thông Tin Khoá Học</h3>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc idid unt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exerec tation ullamco laboris nis aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur enim ipsam.</p>
                                            <p class="mb--60">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.</p> -->
                                    <p class="mb--60">
                                        <?= $course['thong_tin_khoa_hoc'] ?>
                                    </p>
                                    <h5 class="title">Kế Hoạch Học Tập</h5>
                                    <ul class="mb--60">
                                        <li><?= $course['ke_hoach_hoc_tap'] ?></li>

                                    </ul>

                                    <!-- <div class="table-responsive"> -->
                                    <table class="table cart-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="product-remove">Tên Lớp</th>
                                                <th scope="col" class="product-thumbnail">Thời Gian</th>
                                                <th scope="col" class="product-title">Ngày Khai Giảng</th>
                                                <th scope="col" class="product-price">Địa Điểm Học</th>
                                                <th scope="col" class="product-quantity">Giảng Viên</th>
                                                <th scope="col">Slot Còn Lại</th>
                                                <th scope="col" class="product-subtotal">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($classes as $class) : ?>
                                                <?php if (strtotime($class['ngay_khai_giang']) > time() - (24 * 3600 * 7)) : ?>
                                                    <tr>
                                                        <td class="product-remove">
                                                            <?= $class['ten_lop'] ?>
                                                        </td>
                                                        <td class="product-thumbnail">
                                                            <?= $class['ca_hoc'] ?>
                                                        </td>
                                                        <td class="">
                                                            <?= date("d/m/Y", strtotime($class['ngay_khai_giang'])); ?>
                                                        </td>
                                                        <td class="product-price" data-title="Price"><?= $class['dia_diem_hoc'] ?></td>
                                                        <td class="product-quantity" data-title="Qty">
                                                            <?php $teacher = select_one_teacher($class['ma_giang_vien']) ?>
                                                            <?= $teacher['ten_giang_vien'] ?>
                                                        </td>
                                                        <!-- nếu số chỗ còn lại > 0 thì hiển thị -->
                                                        <?php $slot_ordered = return_count_order($class['ma_lop']);
                                                        if ($class['so_cho'] - $slot_ordered['ordered'] > 0) {
                                                        ?>
                                                            <td>
                                                                <?= $class['so_cho'] - $slot_ordered['ordered'] ?>
                                                            </td>
                                                        <?php }
                                                        // nếu số chỗ = 0 hiển thị đã hết chỗ
                                                        if ($class['so_cho'] - $slot_ordered['ordered'] == 0) { ?>
                                                            <td class="product-subtotal" data-title="Subtotal">
                                                                <a class="edu-btn btn-secondary btn">Hết Chỗ</a>
                                                            </td>
                                                        <?php } ?>
                                                        <!-- check khi tồn tại user -->
                                                        <?php
                                                        if (isset($_SESSION['user'])) {
                                                            $is_order = return_oder($class['ma_lop'], $_SESSION['user']['ma_nguoi_dung']); ?>
                                                            <?php if ($is_order['KQ'] == 0 && $class['so_cho'] - $slot_ordered['ordered'] > 0) { ?>
                                                                <td class="product-subtotal" data-title="Subtotal">
                                                                    <a class="edu-btn btn-medium" href="index.php?url=order&class_id=<?= $class['ma_lop'] ?>">Đăng Ký</a>
                                                                </td>
                                                            <?php } else { ?>
                                                                <td class="product-subtotal" data-title="Subtotal">
                                                                    <a class="edu-btn btn-medium btn" style="font-size: 15px; width: 150px;">Đã đăng Ký</a>
                                                                </td>
                                                            <?php }  ?>
                                                            <!-- khi không tồn tại user -->
                                                        <?php } else { ?>
                                                            <?php if ($class['so_cho'] - $slot_ordered['ordered'] > 0) { ?>
                                                                <td class="product-subtotal" data-title="Subtotal">
                                                                    <a class="edu-btn btn-medium" href="index.php?url=order&class_id=<?= $class['ma_lop'] ?>">Đăng Ký</a>
                                                                </td>
                                                            <?php } ?>
                                                        <?php } ?>


                                                    </tr>
                                                <?php endif ?>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                            <div class="course-tab-content">
                                <div class="course-instructor">
                                    <div class="thumbnail">
                                        <img src="view/assets/images/course/author-01.png" alt="Author Images">
                                    </div>
                                    <div class="author-content">
                                        <h6 class="title">Edward Norton</h6>
                                        <span class="subtitle">Founder & CEO</span>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua enim minim veniam quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat. duis aute irure dolor in reprehenderit in voluptate.</p>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="course-tab-content">
                                <div class="course-review">
                                    <h3 class="heading-title">Course Rating</h3>
                                    <p>5.00 average rating based on 7 rating</p>
                                    <div class="row g-0 align-items-center">
                                        <div class="col-sm-4">
                                            <div class="rating-box">
                                                <div class="rating-number">5.0</div>
                                                <div class="rating">
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                    <i class="icon-23"></i>
                                                </div>
                                                <span>(7 Review)</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="review-wrapper">

                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        5 <i class="icon-23"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">7</span>
                                                </div>

                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        4 <i class="icon-23"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">0</span>
                                                </div>

                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        4 <i class="icon-23"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">0</span>
                                                </div>

                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        4 <i class="icon-23"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">0</span>
                                                </div>

                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        4 <i class="icon-23"></i>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="rating-value">0</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Start Comment Area  -->
                                    <div class="comment-area">
                                        <h3 class="heading-title">Reviews</h3>
                                        <div class="comment-list-wrapper">
                                            <!-- Start Single Comment  -->
                                            <div class="comment">
                                                <div class="thumbnail">
                                                    <img src="view/assets/images/blog/comment-01.jpg" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="rating">
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                    </div>
                                                    <h5 class="title">Haley Bennet</h5>
                                                    <span class="date">Oct 10, 2021</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                            <!-- End Single Comment  -->
                                            <!-- Start Single Comment  -->
                                            <div class="comment">
                                                <div class="thumbnail">
                                                    <img src="view/assets/images/blog/comment-02.jpg" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="rating">
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                    </div>
                                                    <h5 class="title">Simon Baker</h5>
                                                    <span class="date">Oct 10, 2021</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                            <!-- End Single Comment  -->
                                            <!-- Start Single Comment  -->
                                            <div class="comment">
                                                <div class="thumbnail">
                                                    <img src="view/assets/images/blog/comment-03.jpg" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="rating">
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                        <i class="icon-23"></i>
                                                    </div>
                                                    <h6 class="title">Richard Gere</h6>
                                                    <span class="date">Oct 10, 2021</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                            <!-- End Single Comment  -->
                                        </div>
                                    </div>
                                    <!-- End Comment Area  -->
                                    <div class="comment-form-area">
                                        <h3 class="heading-title">Write a Review</h3>
                                        <div class="rating-icon">
                                            <h6 class="title">Rating Here</h6>
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                        </div>
                                        <form class="comment-form">
                                            <div class="row g-5">
                                                <div class="form-group col-lg-6">
                                                    <input type="text" name="comm-title" id="comm-title" placeholder="Review Title">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <input type="text" name="comm-name" id="comm-name" placeholder="Reviewer name">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="email" name="comm-email" id="comm-email" placeholder="Reviewer email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <textarea name="comm-message" id="comm-message" cols="30" rows="5" placeholder="Review summary"></textarea>
                                                </div>
                                                <div class="form-group col-12">
                                                    <button type="submit" class="edu-btn submit-btn">Submit Review <i class="icon-4"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-sidebar-3 sidebar-top-position">
                    <div class="edu-course-widget widget-course-summery">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="public/image/course/<?= $course['hinh'] ?>" alt="Courses">
                                <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="play-btn video-popup-activation"><i class="icon-18"></i></a>
                            </div>
                            <div class="content">
                                <h4 class="widget-title">Course Includes:</h4>
                                <ul class="course-item">
                                    <li>
                                        <span class="label"><i class="icon-60"></i>Học Phí:</span>
                                        <span class="value price"><?= number_format($course['hoc_phi']) ?> đ</span>
                                    </li>

                                    <li>
                                        <span class="label"><i class="icon-61"></i>Thời Gian:</span>
                                        <span class="value"><?= $course['thoi_gian'] ?> weeks</span>
                                    </li>

                                    <li>
                                        <span class="label"><i class="icon-64"></i>Chứng Chỉ Sau Khi Học:</span>
                                        <span class="value">Yes</span>
                                    </li>
                                </ul>
                                <div class="read-more-btn">
                                    <!-- <a href="#" class="edu-btn">Start Now <i class="icon-4"></i></a> -->
                                </div>
                                <div class="share-area">
                                    <h4 class="title">Share On:</h4>
                                    <ul class="social-share">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=     More Courses Area Start    =-->
<!--=====================================-->
<!-- Start Course Area  -->
<div class="gap-bottom-equal">
    <div class="container">
        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <h3 class="title">Các Khoá Học Cùng Loại</h3>
        </div>
        <div class="row g-5">
            <!-- Start Single Course  -->
            <?php foreach ($courses as $course) : ?>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-5 inline" data-tipped-options="inline: 'inline-tooltip-1'">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="index.php?url=course_detail&course_id=<?= $course['ma_khoa_hoc'] ?>">
                                    <img src="public/image/course/<?= $course['hinh'] ?>" alt="Course Meta">
                                </a>
                            </div>
                            <div class="content">
                                <!-- <div class="course-price price-round"><?= $course['level'] ?></div> -->
                                <span class="course-level"><?= $category['ten_danhmuc'] ?></span>
                                <h5 class="title">
                                    <a href="index.php?url=course_detail&course_id=<?= $course['ma_khoa_hoc'] ?>"><?= $course['ten_khoa_hoc'] ?></a>
                                </h5>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5)</span>
                                </div>
                                <p style="text-overflow: ellipsis; width: 100%; white-space: nowrap;overflow: hidden"><?= $course['thong_tin_khoa_hoc'] ?></p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i><?= $course['thoi_gian'] ?> tuần</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Single Course  -->
        </div>
    </div>
</div>
<!-- End Course Area -->
<!--=====================================-->