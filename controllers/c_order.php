<?php
function dang_ky_khoa_hoc()
{
    if (isset($_GET['class_id'])) {
        include('view/client/v_order.php');
    }
}
