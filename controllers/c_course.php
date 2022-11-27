<?php

function hien_thi_ds_khoa_hoc()
{
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $courses = get_courses_by_category($category_id);
    } else {
        $courses = danh_sach_khoa_hoc();
    }
    include('view/client/all_courses.php');
}

function course_detail()
{
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
        $course = get_course_by_id($course_id);
        $classes = get_class_by_class_id($course_id);
        include('view/client/course_detail.php');
    }
}
