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
                                        <label class="control-label col-md-3">Payment Duration
                                        </label>
                                        <div class="col-md-5">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                    Monthly
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    Session
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option2">
                                                    Yearly
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Amount
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input name="number" type="text" placeholder="enter amount" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Collection Date
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-append date">
                                                <div id="dateIcon" class="input-group datePicker">
                                                    <input class="formDatePicker form-control" type="text" placeholder="Select Date.." data-input>
                                                    <span class="dateBtn">
                                                        <a class="input-button" title="toggle" data-toggle>
                                                            <i class="icon-calendar"></i>
                                                        </a>
                                                        <a class="input-button" title="clear" data-clear>
                                                            <i class="icon-close"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Payment Method
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="select">
                                                <option value="">Select...</option>
                                                <option value="Category 1">Cash</option>
                                                <option value="Category 2">Cheque</option>
                                                <option value="Category 3">Credit Card</option>
                                                <option value="Category 4">Debit Card</option>
                                                <option value="Category 5">Netbanking</option>
                                                <option value="Category 6">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Payment Reference Number
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <input name="number" type="text" placeholder="enter reference amount" class="form-control input-height" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Payment Status
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="select">
                                                <option value="">Select...</option>
                                                <option value="Category 1">Paid</option>
                                                <option value="Category 2">Unpaid</option>
                                                <option value="Category 3">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Payment Details
                                        </label>
                                        <div class="col-md-5">
                                            <textarea name="details" placeholder="payment details" class="form-control-textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
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