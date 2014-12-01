<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HomePage Admin</title>
    <?php include 'css.php';?>
  </head>

  <body>
    <?php include 'navbar.php';?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <?php include 'bar_left.php';?>

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
            <div class="alert alert-warning fade in">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Welcome To!</strong> Control Panel CCTV Admnistrator.
            </div>
          </div><!--/row-->
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; CCTV Project 2013</p>
      </footer>

    </div><!--/.container-->
    <?php include 'javascript.php';?>
  </body>
</html>
