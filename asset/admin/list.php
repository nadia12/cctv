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
              <div class="panel-heading">List Users</div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                      <a href=""><span class="glyphicon glyphicon-wrench"></span></a>
                      <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                      <a href=""><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                      <a href=""><span class="glyphicon glyphicon-wrench"></span></a>
                      <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                      <a href=""><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>
                      <a href=""><span class="glyphicon glyphicon-wrench"></span></a>
                      <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                      <a href=""><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div>
                <ul class="pagination pagination-sm">
                  <li class="active"><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
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
