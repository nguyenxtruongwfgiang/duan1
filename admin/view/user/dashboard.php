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
                        <div class="page-title">Danh Sách Học Viên</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Students List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>Danh Sách Học Viên</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <!-- <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="index.php?url=them_moi_hoc_vien" id="addRow" class="btn btn-primary">
                                                                Thêm Mới <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> # </th>
                                                            <th> Họ Tên </th>
                                                            <th> Email </th>
                                                            <th> Image </th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($users as $user) : ?>
                                                            <tr class="odd gradeX">
                                                                <td class="left"><?= $user['ma_nguoi_dung'] ?></td>
                                                                <td><?= $user['ho_ten'] ?></td>
                                                                <td><a href="mailto:<?= $user['email'] ?>">
                                                                        <?= $user['email'] ?> </a></td>
                                                                <td class="patient-img">
                                                                    <?php if (empty($user['hinh'])) { ?>
                                                                        <img style="width: 90px; height: 90px; border-radius: 100%; object-fit: cover;" src="../public/image/user/blank-profile-picture-973460_640.webp" alt="">
                                                                    <?php } else { ?>
                                                                        <img style="width: 90px; height: 90px; border-radius: 100%; object-fit: cover;" src="../public/image/user/<?= $user['hinh'] ?>" alt="">
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <a href="index.php?url=form_sua_nguoi_dung&ma_nguoi_dung=<?= $user['ma_nguoi_dung'] ?>" class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a onclick="return confirm('Bạn có muốn xoá không')" class="tblDelBtn" href="index.php?url=xoa_nguoi_dung&ma_nguoi_dung=<?= $user['ma_nguoi_dung'] ?>">
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
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>