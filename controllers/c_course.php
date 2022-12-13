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
        $classes = get_classes_by_class_id($course_id);
        $courses = get_courses_by_category_id($course['ma_loai'], $course['ma_khoa_hoc']);
        $category = get_category_by_course($course['ma_loai']);
        $comments = get_comments_by_course_id($course_id);
        include('view/client/course_detail.php');
    }
}

function search_courses()
{
    if (isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
    }
    $courses = search_courses_by_name($keyword);
    include('view/client/all_courses.php');
}
