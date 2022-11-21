<div class="page-container">
    <!-- start sidebar menu -->
    <?php include('view/navbar.php'); ?>
    <!-- end sidebar menu -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Professors List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Professors List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-bs-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-bs-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
                        <!-- <ul class="nav customtab nav-tabs" role="tablist">
                            <li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">List
                                    View</a></li>
                            <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                                    View</a></li>
                        </ul> -->
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>Danh Sách Giảng Viên</header>
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
                                                            <a href="index.php?url=them_giang_vien" id="addRow" class="btn btn-primary">
                                                                Thêm Mới <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> # </th>
                                                            <th> Tên </th>
                                                            <th> Ảnh </th>
                                                            <th> Thông Tin </th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($danh_sach_giang_vien as $giang_vien) : ?>
                                                            <tr class="odd gradeX">
                                                                <td><?= $giang_vien['ma_giang_vien'] ?></td>
                                                                <td><?= $giang_vien['ten_giang_vien'] ?></td>
                                                                <td class="patient-img"><img style="height: 100px; width: 100px; border-radius: 50%;object-fit: cover;" src="../public/image/teacher/<?= $giang_vien['hinh'] ?>" alt=""></td>
                                                                <td><?= $giang_vien['thong_tin_gv'] ?></td>
                                                                <!-- <td class="patient-img">
                                                                    <img src="../assets/img/user/user1.jpg" alt="">
                                                                </td> -->
                                                                <td>
                                                                    <a href="index.php?url=form_sua_giang_vien&teacher_id=<?= $giang_vien['ma_giang_vien'] ?>" class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="index.php?url=xoa_giang_vien&teacher_id=<?= $giang_vien['ma_giang_vien'] ?>" class="tblDelBtn">
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
</div>