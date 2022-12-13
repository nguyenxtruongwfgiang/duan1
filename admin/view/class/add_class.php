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

        .alert {
            position: relative;
            left: -145px;
            justify-content: center;
            box-shadow: none;
            margin: 0px !important;
            margin-top: 0px !important;
            top: -15px;
            color: red;
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
                        <div class="page-title">Add Professor</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Professor</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Professor</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Basic Information</header>
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
                            <form action="index.php?url=add_class" method="POST" enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Tên Lớp
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="ten_lop" data-required="1" placeholder="tên lớp" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <?php if (isset($error['class_name'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['class_name'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Ca Học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="ca_hoc" data-required="1" placeholder="ca học" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <?php if (isset($error['shift'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['shift'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Ngày Khai Giảng
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-append date">
                                                <div id="dateIcon" class="input-group datePicker">
                                                    <input type="date" class="formDatePicker form-control" name="ngay_khai_giang" placeholder="ngày khai giảng" data-input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($error['date'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['date'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Địa Điểm Học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="dia_diem_hoc" data-required="1" placeholder="địa điểm học" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <?php if (isset($error['location'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['location'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Khoá Học
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="ma_khoa_hoc">
                                                <option value="">Select...</option>
                                                <?php foreach (danh_sach_khoa_hoc() as $khoa_hoc) : ?>
                                                    <option value="<?= $khoa_hoc['ma_khoa_hoc'] ?>"><?= $khoa_hoc['ten_khoa_hoc'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php if (isset($error['course_id'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['course_id'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Giảng Viên
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="ma_giang_vien">
                                                <option value="">Select...</option>
                                                <?php foreach (danh_sach_giang_vien() as $giang_vien) : ?>
                                                    <option value="<?= $giang_vien['ma_giang_vien'] ?>"><?= $giang_vien['ten_giang_vien'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php if (isset($error['teacher_id'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['teacher_id'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Số Chỗ
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input name="so_cho" type="number" placeholder="Slot" class="form-control input-height" min="1" />
                                        </div>
                                    </div>
                                    <?php if (isset($error['slot'])) { ?>
                                        <div class="form-group row alert">
                                            <label for="" class="control-label col-md-3">
                                                <?= $error['slot'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" name="dang_ky_lop" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Đăng Ký</button>
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