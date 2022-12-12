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
                        <div class="page-title">Sửa Danh Mục</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="index.php?url=danh_sach_danh_muc">Danh Mục</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Sửa Danh Mục</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Sửa Danh Mục</header>
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
                        <form class="card-body row" action="index.php?url=sua_danh_muc" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtTitle" name="ten_danhmuc" value="<?= $danhmuc['ten_danhmuc'] ?>">
                                    <label class="mdl-textfield__label">Tên Danh Mục</label>
                                </div>
                                <?php
                                // if (isset($msg)) {
                                //     echo '<h3>' . $msg . '</h3>';
                                // }
                                ?>
                            </div>
                            <?php if (isset($error)) { ?>
                                <div class="mdl-textfield mdl-js-textfield mdl-js-textfield--floating-label txt-full-width">
                                    <label for="" style="color: red; font-size: 12px"><?= $error ?></label>
                                </div>
                            <?php } ?>
                            <input type="hidden" name="ma_danhmuc" value="<?= $danhmuc['ma_danhmuc'] ?>">
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" name="sua_danh_muc" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Sửa Danh Mục</button>
                                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->

    <!-- end chat sidebar -->
</div>