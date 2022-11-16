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
                        <li><a class="parent-item" href="index.php?url=danh_sach_danh_muc">Danh Mục</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                            <header>Danh Sách Danh Mục</header>
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
                                        <a href="index.php?url=them_danh_muc" id="addRow" class="btn btn-primary">
                                            Thêm Mới <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Style</th>
                                        <th>Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($danh_sach_danh_muc as $danh_muc) : ?>
                                        <tr class="even">
                                            <td><?= $danh_muc['ma_danhmuc'] ?></td>
                                            <td><?= $danh_muc['ten_danhmuc'] ?></td>
                                            <td><?= $danh_muc['mau_nen'] ?></td>
                                            <td><?= $danh_muc['icon'] ?></td>
                                            <td>
                                                <a href="index.php?url=form_sua_danhmuc&category_id=<?= $danh_muc['ma_danhmuc'] ?>" class="tblEditBtn">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="index.php?url=xoa_danhmuc&category_id=<?= $danh_muc['ma_danhmuc'] ?>" class="tblDelBtn">
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