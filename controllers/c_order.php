<?php
require_once('models/m_order.php');

function dang_ky_khoa_hoc()
{
    if (isset($_SESSION['user'])) {
        if (isset($_GET['class_id'])) {
            $class_id = $_GET['class_id'];
            $class = get_class_by_class_id($class_id);
            $course = get_course_by_class_id($class_id);
            include('view/client/v_order.php');
        }
    } else {
        // include('view/client/login.php');
        echo "<script>
            window.location.href='index.php?url=login'
        </script>";
    }
}

function complete_order()
{
    if (isset($_POST['complete_order'])) {
        $class_id = $_GET['class_id'];
    }
}
