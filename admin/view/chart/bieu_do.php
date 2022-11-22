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
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Charts</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">ChartJs</li>
                    </ol>
                </div>
            </div>
            <!-- start chart -->
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                    <div class="card">
                        <div class="card-head">
                            <header>PIE CHART</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body " id="chartjs_pie_parent">
                            <div class="row">
                                <div style="height: 400px">
                                    <canvas id="chartjs_pie"></canvas>
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