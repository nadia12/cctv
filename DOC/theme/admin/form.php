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
            
            <div class="bs-example">
              <div class="panel-heading">Create User</div><br>
              <form>
                <div class="col-lg-6">
                  <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="input-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="input-group">
                    <label>Confirmation</label>
                    <input type="password" class="form-control" placeholder="Confirmation Password">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group">
                    <label>Mobile Phone</label>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                   <div class="input-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                  </div>
                </div>
                <div class="block"></div>
                <div class="submit">
                  <button type="button" class="btn btn-default">Close</button>
                  <button type="button" class="btn btn-primary">Save As</button>
                </div>
              </form>
            </div>
          </div><!--/row-->
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; CCTV Project Administrator</p>
      </footer>

    </div><!--/.container-->
    <?php include 'javascript.php';?>
  </body>
</html>
