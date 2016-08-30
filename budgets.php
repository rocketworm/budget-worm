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
            <h1>Budgets<small></small></h1>
          </section>

            <!-- Main content -->
            <section class="content">
      <div class="row">
        <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Budgets</h3>
              </div>
              <table class="table table-condensed">
              <tbody>
              </tbody>
            </table>
          </div>
          </div>
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
     <script>
      $(document).ready(function () {
        var url = 'http://localhost/budget-worm/api.php/budgets/';
        $.getJSON(url, function (data) {
          var tr;
          var th;
          th = $('<tr/>');
            th.append('<th>' + data.budgets.columns[1] + '</th>');
            th.append('<th>' + data.budgets.columns[2] + '</th>');
            th.append('<th>Current Budget</th>');
            th.append('<th></th>');
            $('tbody').append(th);
          for (var i = 0; i < data.budgets.records.length; i++) {
              tr = $('<tr/>');
              tr.append("<td>" + data.budgets.records[i][1] + "</td>");
              tr.append("<td>" + data.budgets.records[i][2] + "</td>");
              var current = 100;
              var totalbudget = Number(data.budgets.records[i][2]);
              var progress = (current / totalbudget) * 100;
              tr.append('<td><div class="progress progress-xs progress-striped active"><div class="progress-bar progress-bar-success" style="width: ' + progress + '%"></div></div></td>');
              tr.append('<td class="pull-right"><button type="button" class="btn btn-sm"><i class="fa fa-cog"></i></button></td>');
              $('table').append(tr);
          }
        });
      });
     </script>
</body>

</html>
