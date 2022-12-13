<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="page-container">
    <?php include('view/navbar.php'); ?>
    <!-- start page content -->

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">ChartJs</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Trang chủ</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Khoá học</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Thống kê</li>
                    </ol>
                </div>
            </div>
            <!-- start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12" style="width: 33.3%;">
                        <div class="info-box bg-b-green">
                            <span class="info-box-icon push-bottom"><i data-feather="users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Tổng Học Viên</span>
                                <span class="info-box-number"><?= $tong_hoc_vien['total_student'] ?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12" style="width: 33.3%;">
                        <div class="info-box bg-b-blue">
                            <span class="info-box-icon push-bottom"><i data-feather="book"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Tổng Khoá Học</span>
                                <span class="info-box-number"><?= $tong_khoa_hoc['total_course'] ?></span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12" style="width: 33.3%;">
                        <div class="info-box bg-b-pink">
                            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Tổng doanh thu tháng <?= $tong_doanh_thu['thang'] ?></span>
                                <span class="info-box-number"><?= number_format($tong_doanh_thu['total']) ?></span><span> đ</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- end widget -->
            <!-- start chart -->
            <div class="row">
                <div id="myChart" style="width:100%; height:500px;">
                </div>

                <script>
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Danh Mục', 'Số Lượng Khoá Học'],
                            <?php foreach ($danh_sach_thong_ke as $tk) : ?>['<?= $tk['ten_danhmuc'] ?>', <?= $tk['count_course'] ?>],
                            <?php endforeach; ?>
                        ]);

                        var options = {
                            title: ''
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end page content -->
</div>