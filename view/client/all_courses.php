<div class="edu-course-area course-area-1 section-gap-equal">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 order-lg-2">
                <div class="course-sidebar-2">
                    <div class="edu-course-widget widget-category">
                        <div class="inner">
                            <h5 class="widget-title widget-toggle">Categories</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <a href="index.php?url=all_courses">Tất Cả</a>
                                </div>
                                <?php foreach (danh_sach_danh_muc() as $category) : ?>
                                    <div class="edu-form-check">
                                        <!-- <input type="checkbox" id="cat-check1" checked> -->
                                        <!-- <label for="cat-check1">Art &amp; Design <span>(7)</span></label> -->
                                        <a href="index.php?url=all_courses&category_id=<?= $category['ma_danhmuc'] ?>"><?= $category['ten_danhmuc'] ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-pr--35 order-lg-1">


                <div class="edu-sorting-area">
                    <div class="sorting-left">
                        <h6 class="showing-text">We found <span>71</span> courses available for you</h6>
                    </div>
                    <div class="sorting-right">
                        <div class="layout-switcher">
                            <label>Grid</label>
                            <ul class="switcher-btn">
                                <li><a href="course-one.html" class=""><i class="icon-53"></i></a></li>
                                <li><a href="course-four.html" class="active"><i class="icon-54"></i></a></li>
                            </ul>
                        </div>
                        <div class="edu-sorting">
                            <div class="icon"><i class="icon-55"></i></div>
                            <select class="edu-select">
                                <option>Filters</option>
                                <option>Low To High</option>
                                <option>High Low To</option>
                                <option>Last Viewed</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php foreach ($courses as $course) : ?>
                    <div class="edu-course course-style-4 course-style-9">
                        <div class="inner">
                            <div class="thumbnail" style="width:150px;">
                                <a href="index.php?url=course_detail&course_id=<?= $course['ma_khoa_hoc'] ?>">
                                    <img src="public/image/course/<?= $course['hinh'] ?>" alt="Course Meta" width="50%">
                                </a>
                            </div>
                            <div class="content">
                                <div class="course-price"><?= number_format($course['hoc_phi']) ?> đ</div>
                                <h6 class="title">
                                    <a href="index.php?url=course_detail&course_id=<?= $course['ma_khoa_hoc'] ?>"><?= $course['ten_khoa_hoc'] ?></a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /7 Rating)</span>
                                </div>
                                <p><?= $course['thong_tin_khoa_hoc'] ?></p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i><?= $course['thoi_gian'] ?></li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="hover-content-aside">
                        <div class="content">
                            <span class="course-level">Engineering</span>
                            <h5 class="title">
                                <a href="course-details.html">Java Programming Masterclass for Software Developers</a>
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
                            <ul class="course-meta">
                                <li>8 Lessons</li>
                                <li>20 hrs</li>
                                <li>All Levels</li>
                            </ul>
                            <div class="course-feature">
                                <h6 class="title">What You’ll Learn?</h6>
                                <ul>
                                    <li>Learn to use Python professionally, learning both Python 2 & Python 3!</li>
                                    <li>Build 6 beautiful real-world projects for your portfolio (not boring toy </li>
                                    <li>Understand the Theory behind Vue.js and use it in Real Projects</li>
                                </ul>
                            </div>
                            <div class="button-group">
                                <a href="#" class="edu-btn btn-medium">Add to Cart</a>
                                <a href="#" class="wishlist-btn btn-outline-dark"><i class="icon-22"></i></a>
                            </div>
                        </div>
                    </div> -->
                    </div>
                <?php endforeach; ?>

            </div>
        </div>


        <ul class="edu-pagination ">
            <li><a href="#" aria-label="Previous"><i class="icon-west"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="more-next"><a href="#"></a></li>
            <li><a href="#">8</a></li>
            <li><a href="#" aria-label="Next"><i class="icon-east"></i></a></li>
        </ul>

    </div>
</div>