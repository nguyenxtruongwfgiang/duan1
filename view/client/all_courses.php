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
                        <h6 class="showing-text">We found <span><?= count($courses); ?></span> courses available for you</h6>
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
                                    <li><i class="icon-24"></i><?= $course['thoi_gian'] ?> tuần</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>


    </div>
</div>