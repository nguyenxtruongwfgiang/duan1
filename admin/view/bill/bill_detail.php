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
                        <div class="page-title">Bill Details</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Trang Chủ</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Hoá đơn</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Chi tiết hoá đơn</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Chi tiết hoá đơn</header>
                            <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul>
                        </div>
                        <div class="card-body" id="bar-parent">
                            <form class="form-horizontal" action="index.php?url=sua_hoa_don" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Họ tên
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <a><?= $nguoi_dung['ho_ten'] ?></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Khoá học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <a><?= $course['ten_khoa_hoc'] ?></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Lớp
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <a><?= $class['ten_lop'] ?></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Học Phí
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <p><?= number_format($chi_tiet_hoa_don['gia_tien']) ?> đ</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Ngày đăng ký
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <p><?= date("d/m/Y", strtotime($chi_tiet_hoa_don['ngay_dk'])) ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Trạng Thái
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="trang_thai">
                                                <option value="0" <?= ($chi_tiet_hoa_don['trang_thai'] == 0) ? 'selected' : '' ?>>Chưa thanh toán</option>
                                                <option value="1" <?= ($chi_tiet_hoa_don['trang_thai'] == 1) ? 'selected' : '' ?>>Đã thanh toán</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <input type="hidden" name="ma_dk" value="<?= $chi_tiet_hoa_don['ma_dk'] ?>">
                                            <button type="submit" name="cap_nhat_trang_thai_don_hang" class="btn btn-info m-r-20">Cập nhật</button>
                                            <button type="button" class="btn btn-default"><a href="index.php?url=danh_sach_hoa_don">Trở về</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>