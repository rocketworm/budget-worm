<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include html header -->
  <?php include('./head.inc');?>
</head>

  <body>
    <div class="container">
      <!-- include main navigation -->
      <?php include('./nav.inc');?>
      <h1>Budgets</h1>
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h3 class="panel-title pull-left">BMW</h3>
          <button type="button" class="btn btn-default btn-sm pull-right">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </button>
        </div>
        <div class="panel-body">
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h3 class="panel-title pull-left">Siegfried Ludwig-Platz</h3>
          <button type="button" class="btn btn-default btn-sm pull-right">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </button>
        </div>
        <div class="panel-body">
          <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- include scripts -->
    <?php include('./scripts.inc');?>
  </body>
</html>
