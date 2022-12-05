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
                        <div class="page-title">Fees Collection</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Fees</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Fees Collection</a>&nbsp;
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Fees Collection</header>
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
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th class="center"> # </th>
                                        <th class="center"> Họ Tên </th>
                                        <th class="center"> Lớp </th>
                                        <th class="center"> Tên Khoá Học </th>
                                        <th class="center"> Giá Tiền </th>
                                        <th class="center"> Ngày Đăng Ký </th>
                                        <th class="center"> Trạng Thái </th>
                                        <th class="center"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($danh_sach_hoa_don as $hoa_don) : ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?= $hoa_don['ma_dk'] ?></td>
                                            <?php $nguoi_dung = lay_nguoi_dung_theo_id($hoa_don['ma_nguoi_dung']);
                                            $lop = get_class_by_id($hoa_don['ma_lop']);
                                            $khoa_hoc = lay_khoa_hoc_theo_id($lop['ma_khoa_hoc']);
                                            ?>
                                            <td class="center"><a href="index.php?url=form_sua_nguoi_dung&ma_nguoi_dung=<?= $nguoi_dung['ma_nguoi_dung'] ?>"><?= $nguoi_dung['ho_ten'] ?></a></td>
                                            <td class="center"><?= $lop['ten_lop'] ?></td>
                                            <td class="center"><?= $khoa_hoc['ten_khoa_hoc'] ?></td>
                                            <td class="center"><?= number_format($hoa_don['gia_tien']) ?> đ</td>
                                            <td class="center"><?= date("d/m/Y", strtotime($hoa_don['ngay_dk'])) ?></td>
                                            <?php if ($hoa_don['trang_thai'] == 0) { ?>
                                                <td class="center"><span class="label label-sm label-warning">Chưa thanh toán</span></td>
                                            <?php } elseif ($hoa_don['trang_thai'] == 1) { ?>
                                                <td class="center"><span class="label label-sm label-success">Đã thanh toán</span></td>
                                            <?php } ?>
                                            <td>
                                                <a href="index.php?url=form_sua_hoa_don&ma_hoa_don=<?= $hoa_don['ma_dk'] ?>" class="tblEditBtn">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="index.php?url=xoa_hoa_don&ma_hoa_don=<?= $hoa_don['ma_dk'] ?>" class="tblDelBtn">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- label-success, label-warning -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>