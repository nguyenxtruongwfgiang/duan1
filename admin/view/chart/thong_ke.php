<div class="page-container">
    <!-- start sidebar menu -->
    <?php include('view/navbar.php'); ?>
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Sản Phẩm</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="index.php?url=danh_sach_san_pham">Sản Phẩm</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active"> <a href="index.php?url=thong_ke_sp">Thống Kê</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="card-box">
                        <div class="card-head">
                            
                            <header>Thống Kê Sản Phẩm</header>
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
                                            Biểu Đồ Thống Kê <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Số Lượng</th>
                                        <th>Giá Cao Nhất</th>
                                        <th>Giá Thấp Nhất</th>
                                        <th>Trung Bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php var_dump($danh_sach_thong_ke) ?> -->
                                    <?php foreach ($danh_sach_thong_ke as $thong_ke) : ?>
                                        <tr class="even">
                                            <td><?= $thong_ke['ma_danhmuc'] ?></td>
                                            <td><?= $thong_ke['ten_danhmuc'] ?></td>
                                            <td><?= $thong_ke['count_course'] ?></td>
                                            <td><?= number_format($thong_ke['min_price']) ?></td>
                                            <td><?= number_format($thong_ke['max_price']) ?></td>
                                            <td><?= number_format($thong_ke['avg_price']) ?></td>
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