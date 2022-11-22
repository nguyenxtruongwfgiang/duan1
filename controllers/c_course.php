<?php

function hien_thi_ds_khoa_hoc()
{
}

function course_detail()
{
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
        $course = get_course_by_id($course_id);
        include('view/client/course_detail.php');
    }
}
