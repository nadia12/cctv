<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CCTV Project</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-record"></span> CCTV Project Camera</a>
        </div>
        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="./"><span class="glyphicon glyphicon-eye-open"></span> Channel</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Account</a>
              <ul class="dropdown-menu">
                <li><a href="#">Sub Action1</a></li>
                <li><a href="#">Sub Action2</a></li>
                <li><a href="#">Sub Action3</a></li>
                <li class="divider"></li>
                <li><a href="#">SignOut</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="sidebar-nav">
            <div class="list-group">
              <a href="#" class="list-group-item active ">
                <span class="glyphicon glyphicon-align-justify"></span> Channel Favorite
              </a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C23 Loby</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C23 Lantai1</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C23 Lantai2</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C23 Lantai3</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C23 Lantai4(Training Room)</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> B12 Lt1</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> B12 Lt2</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> B12 Lt3</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> B12 Lt4</a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-play-circle"></span> C1-Loby</a>
            </div>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">

            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#live" data-toggle="tab">Live View</a></li>
              <li class=""><a href="#play" data-toggle="tab">Playback</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="live"> 
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C23 Loby</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C23 Lantai3</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>Channel Video</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C1-Loby</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>Channel Video</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>Channel Video</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
              </div>
              <div class="tab-pane fade" id="play">
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C23 Loby</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C23 Lantai3</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>Channel Video</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
                <div class="col-6 col-sm-6 col-lg-4 padding-bottom">
                  <h4>C1-Loby</h4>
                  <img src="images/movie.png" width="100%" alt="">
                </div>
              </div>
            </div>

          </div><!--/row-->
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; CCTV Project Camera</p>
      </footer>

    </div><!--/.container-->
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
