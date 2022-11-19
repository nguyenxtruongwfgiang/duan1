<head>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
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
                        <div class="page-title">Sửa Khoá Học</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Khoá Học</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Thêm Khoá Học</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Thông Tin Khoá Học</header>
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
                            <form action="index.php?url=edit_course" id="form_sample_1" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <!-- <?php var_dump($course) ?> -->
                                        <label class="control-label col-md-3">Tên Khoá Học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" value="<?= $course['ten_khoa_hoc'] ?>" name="ten_khoa_hoc" placeholder="enter course name" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <input type="hidden" name="course_id" value="<?= $course['ma_khoa_hoc'] ?>">
                                        <input type="hidden" name="hinh" value="<?= $course['hinh'] ?>">
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Thời Gian
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" value="<?= $course['thoi_gian'] ?>" name="thoi_gian" placeholder="enter course time" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Thông Tin Khoá Học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <textarea name="thong_tin_khoa_hoc" placeholder="course details" class="form-control-textarea" rows="5"><?= $course['thong_tin_khoa_hoc'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Kế Hoạch Học Tập
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <textarea name="ke_hoach_hoc_tap" placeholder="course schedule" class="form-control-textarea" rows="5"><?= $course['ke_hoach_hoc_tap'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Học Phí
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" name="hoc_phi" value="<?= $course['hoc_phi'] ?>" placeholder="Course Price" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Danh Mục
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="ma_loai">
                                                <!-- <option value="">Select...</option> -->
                                                <?php foreach (danh_sach_danh_muc() as $danh_muc) : ?>
                                                    <option value="<?= $danh_muc['ma_danhmuc'] ?>"
                                                    <?= ($course['ma_loai'] == $danh_muc['ma_danhmuc']) ? 'selected' : '' ?>
                                                    ><?= $danh_muc['ten_danhmuc'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Mức Độ
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="level" value="<?= $course['level'] ?>" placeholder="Level" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Hình Ảnh
                                        </label>
                                        <div class="col-md-5">
                                            <input type="file" class="default" multiple name="hinh">
                                        </div>
                                        <?php if (isset($error)) : ?>
                                            <div class="invalid-feedback">
                                                <?= $error ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" name="sua_khoa_hoc" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Sửa</button>
                                                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
                                            </div>
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