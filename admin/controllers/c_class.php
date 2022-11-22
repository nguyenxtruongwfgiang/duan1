<?php
require('models/m_class.php');

function class_list(){
    $class_list = get_class_list();
    include('view/class/all_class.php');
}

function add_class_form(){
    include('view/class/add_class.php');
    add_class();
}

function delete_class(){
    if(isset($_GET['class_id'])){
        $class_id = $_GET['class_id'];
        delete_class_by_id($class_id);
    }
}

function edit_class_form(){
    if(isset($_GET['class_id'])){
        $class_id = $_GET['class_id'];
        $class = get_class_by_id($class_id);
        include('view/class/edit_class.php');   
    }
}

function update_class(){
    edit_class();
}
?>