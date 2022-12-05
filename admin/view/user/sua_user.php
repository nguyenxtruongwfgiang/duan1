<div class="page-container">
    <?php include('view/navbar.php'); ?>
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Sửa Người Dùng</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Người Dùng</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Sửa</li>
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
                            <form action="index.php?url=sua_nguoi_dung" method="POST" enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Họ Tên
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input type="hidden" name="hinh" value="<?= $nguoi_dung['hinh'] ?>">
                                            <input type="hidden" name="ma_nguoi_dung" value="<?= $nguoi_dung['ma_nguoi_dung'] ?>">
                                            <input type="text" value="<?= $nguoi_dung['ho_ten'] ?>" name="ho_ten" data-required="1" placeholder="enter first name" class="form-control input-height" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Email
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="text" value="<?= $nguoi_dung['email'] ?>" class="form-control input-height" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="profile-userpic" style="border-radius: 100%;">
                                            <?php if (empty($nguoi_dung['hinh'])) { ?>
                                                <img style="width: 100px; height: 100px; border-radius: 100%; object-fit: cover;" src="../public/image/user/blank-profile-picture-973460_640.webp" alt="" >
                                            <?php } else { ?>
                                                <img style="width: 100px; height: 100px; border-radius: 100%; object-fit: cover;" src="../public/image/user/<?= $nguoi_dung['hinh'] ?>" alt="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Profile Picture
                                        </label>
                                        <div class="col-md-5">
                                            <input type="file" class="default" multiple name="hinh">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" name="sua_nguoi_dung" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
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