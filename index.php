<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <!-- include html header -->
    <?php include('./htmlhead.inc');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <!-- include header navbar -->
    <?php include('./mainheader.inc');?>

      <!-- Left side column. contains the logo and sidebar -->
        <?php include('./sidebar.inc');?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>Welcome to budgetworm<small>Managing your private budgets and expenses in a simple database via web and/ or app.</small></h1>
          </section>

            <!-- Main content -->
            <section class="content">

              <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Bar Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChart" style="height: 230px; width: 467px;" height="230" width="467"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include('./footer.inc');?>
    </div>
    <!-- ./wrapper -->

    <!-- include scripts -->
    <?php include('./scripts.inc');?>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>

</html>
