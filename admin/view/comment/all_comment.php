<div class="page-container">
    <?php include('view/navbar.php'); ?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Danh Sách Bình Luận</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Bình Luận</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Danh Sách</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Danh Sách Bình Luận</header>
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
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nội Dung</th>
                                        <th>Người Bình Luận</th>
                                        <th>Khoá Học</th>
                                        <th>Ngày Bình Luận</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($danh_sach_binh_luan as $binh_luan) : ?>
                                        <?php $user = lay_nguoi_dung_theo_id($binh_luan['ma_nguoi_dung']);
                                        $course = lay_khoa_hoc_theo_id($binh_luan['ma_khoa_hoc']);
                                        ?>
                                        <tr class="odd">
                                            <td><?= $binh_luan['ma_binh_luan'] ?></td>
                                            <td><?= $binh_luan['noi_dung'] ?></td>
                                            <td><a href="index.php?url=form_sua_nguoi_dung&ma_nguoi_dung=<?= $user['ma_nguoi_dung'] ?>"><?= $user['ho_ten'] ?></a></td>
                                            <td><?= $course['ten_khoa_hoc'] ?></td>
                                            <td><?= date('d/m/Y', strtotime($binh_luan['ngay_binh_luan'])) ?></td>
                                            <td>
                                                <a onclick="return confirm('Bạn có muốn xoá không')" class="tblDelBtn" href="index.php?url=xoa_binh_luan&ma_binh_luan=<?= $binh_luan['ma_binh_luan'] ?>">
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
</div>