<div class="page-container">
    <!-- start sidebar menu -->
    <?php include('view/navbar.php'); ?>
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Danh Sách Lớp</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Department</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Department List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Danh Sách Lớp</header>
                            <button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="sdntmenu">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="index.php?url=add_class" id="addRow" class="btn btn-primary">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Lớp</th>
                                        <th>Ca Học</th>
                                        <th>Ngày Khai Giảng</th>
                                        <th>Địa Điểm Học</th>
                                        <th>Tên Khoá Học</th>
                                        <th>Giảng Viên</th>
                                        <th>Số Chỗ</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($class_list as $class) : ?>
                                        <tr class="odd">
                                            <td><?= $class['ma_lop'] ?></td>
                                            <td><?= $class['ten_lop'] ?></td>
                                            <td><?= $class['ca_hoc'] ?></td>
                                            <td><?= date("d/m/Y", strtotime($class['ngay_khai_giang'])) ?></td>
                                            <td><?= $class['dia_diem_hoc'] ?></td>
                                            <?php $khoa_hoc = lay_khoa_hoc_theo_id($class['ma_khoa_hoc']) ?>
                                            <td><?= $khoa_hoc['ten_khoa_hoc'] ?></td>
                                            <td><?= $class['ma_giang_vien'] ?></td>
                                            <td><?= $class['so_cho'] ?></td>
                                            <td>
                                                <a href="index.php?url=edit_class_form&class_id=<?= $class['ma_lop'] ?>" class="tblEditBtn">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a onclick="return confirm('Bạn có muốn xoá không')" class="tblDelBtn" href="index.php?url=delete_class&class_id=<?= $class['ma_lop'] ?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>