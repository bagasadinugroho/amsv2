<!-- ============================================================== -->
<!-- Auto Refresh  -->
<!-- ============================================================== -->
<meta http-equiv="refresh" content="20" />
<script type="text/javascript">
    var auto_refresh = setInterval(
    function () {
       $('#load_content').load('index.php/dashboard').fadeIn("slow");
    }, 2500); // refresh setiap 2500 milliseconds
</script>
<!-- ============================================================== -->
<!-- Auto Refresh  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-inverse card-info">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white"><?php echo $all;?></h1>
                    <h6 class="text-white">Data Asset</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-primary card-inverse">
                <div class="box text-center">
                    <h1 class="font-light text-white"><?php echo $ready;?></h1>
                    <h6 class="text-white">Ready to Deploy</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-inverse card-success">
                <div class="box text-center">
                    <h1 class="font-light text-white"><?php echo $deployed;?></h1>
                    <h6 class="text-white">Deployed</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-inverse card-warning">
                <div class="box text-center">
                    <h1 class="font-light text-white"><?php echo $broken;?></h1>
                    <h6 class="text-white">Broken</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-chart-bar"></i> Graph of Data Asset</h4>
                    <div id="asset-chart"></div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
</div>