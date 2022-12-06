<head>
    <style>
        .text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        /* td {
            white-space: nowrap;
            overflow-x: hidden;
            text-overflow: ellipsis;
        } */
    </style>
</head>
<div class="page-container">
    <!-- start sidebar menu -->
    <?php include('view/navbar.php'); ?>
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Danh Mục</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="index.php?url=danh_sach_danh_muc">Khoá Học</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active"> <a href="index.php?url=danh_sach_danh_muc">Danh Sách</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="card-box">
                        <div class="card-head">
                            <?php
                            if (isset($msg)) {
                                echo '<h3>' . $msg . '</h3>';
                            }
                            ?>
                            <header>Danh Sách Khoá Học</header>
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
                                        <a href="index.php?url=them_khoa_hoc" id="addRow" class="btn btn-primary">
                                            Thêm Mới <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Khoá Học</th>
                                        <th>Mã Danh Mục</th>
                                        <th>Thời Gian (Tuần)</th>
                                        <th>Thông Tin Khoá Học</th>
                                        <th>Kế Hoạch Học Tập</th>
                                        <th>Ảnh</th>
                                        <th>Học Phí</th>
                                        <th>Mức Độ</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($danh_sach_khoa_hoc as $khoa_hoc) : ?>
                                        <tr class="even">
                                            <td><?= $khoa_hoc['ma_khoa_hoc'] ?></td>
                                            <td><?= $khoa_hoc['ten_khoa_hoc'] ?></td>
                                            <td><?= $khoa_hoc['ma_loai'] ?></td>
                                            <td><?= $khoa_hoc['thoi_gian'] ?> Tuần</td>
                                            <td><?= $khoa_hoc['thong_tin_khoa_hoc'] ?></td>
                                            <td><?= $khoa_hoc['ke_hoach_hoc_tap'] ?></td>
                                            <td><img width="70%" src="../public/image/course/<?= $khoa_hoc['hinh'] ?>" alt=""></td>
                                            <td><?= $khoa_hoc['hoc_phi'] ?></td>
                                            <td><?= $khoa_hoc['level'] ?></td>
                                            <td>
                                                <a href="index.php?url=form_sua_khoa_hoc&course_id=<?= $khoa_hoc['ma_khoa_hoc'] ?>" class="tblEditBtn">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a onclick="return confirm('Bạn có muốn xoá không')" href="index.php?url=xoa_khoa_hoc&course_id=<?= $khoa_hoc['ma_khoa_hoc'] ?>" class="tblDelBtn">
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
    <!-- start chat sidebar -->

    <!-- end chat sidebar -->
</div>