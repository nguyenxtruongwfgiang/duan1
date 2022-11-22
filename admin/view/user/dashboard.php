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
                        <ul class="nav customtab nav-tabs" role="tablist">
                            <li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">List
                                    View</a></li>
                            <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                                    View</a></li>
                        </ul>
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
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="index.php?url=them_moi_hoc_vien" id="addRow" class="btn btn-primary">
                                                                Thêm Mới <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                    <img src="../public/image/user/<?= $user['hinh'] ?>" alt="">
                                                                </td>
                                                                <td>
                                                                    <a href="index.php?url=form_sua_nguoi_dung&ma_nguoi_dung=<?= $user['ma_nguoi_dung'] ?>" class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a class="tblDelBtn" href="index.php?url=xoa_nguoi_dung&ma_nguoi_dung=<?= $user['ma_nguoi_dung'] ?>">
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
                            <div class="tab-pane" id="tab2">
                                <div class="row">
                                    <?php foreach ($users as $user) : ?>
                                        <div class="col-md-4">
                                            <div class="card card-box">
                                                <div class="card-body no-padding ">
                                                    <div class="doctor-profile">
                                                        <img src="view/admin/assets/img/user/user10.jpg" class="doctor-pic" alt="">
                                                        <div class="profile-usertitle">
                                                            <div class="doctor-name">Pooja Patel </div>
                                                            <div class="name-center"> Science </div>
                                                        </div>
                                                        <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                        <div>
                                                            <p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                        </div>
                                                        <div class="profile-userbuttons">
                                                            <a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                                More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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