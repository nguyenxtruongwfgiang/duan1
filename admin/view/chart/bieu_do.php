<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="page-conttainer">
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
                            <?php foreach ($danh_sach_thong_ke as $tk) : ?>
                                ['<?= $tk['ten_danhmuc'] ?>', <?= $tk['count_course'] ?>],
                            <?php endforeach; ?>
                        ]);

                        var options = {
                            title: 'Tổng khoá học: <?= count($danh_sach_thong_ke) ?>'
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