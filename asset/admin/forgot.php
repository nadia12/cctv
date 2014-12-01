<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <?php include 'css.php';?>
  </head>

  <body>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading" style="text-align:center">
          <span class="glyphicon glyphicon-record" style="font-size:30px;"></span> RECOVERY
        </h2>
        <hr>
        <input type="text" class="form-control" placeholder="Email address" autofocus>
        <button class="btn btn-lg btn-primary btn-block black" type="submit">Send Email</button>
        <button class="btn btn-lg btn-primary btn-block red" type="submit"><a href="login.php">Back To Login</a></button>
      </form>
    </div> <!-- /container -->
    <?php include 'javascript.php';?>
  </body>
</html>