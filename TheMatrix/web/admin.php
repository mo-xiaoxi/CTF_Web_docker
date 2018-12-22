<?php
  include_once("config.php");
  include_once("functions.php");
  ini_set('session.cookie_httponly', 1);
  session_start();
  $_SESSION['CSRFToken'] = md5(uniqid());
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Matrix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?= $static_dir ?>jquery-3.2.1.min.js"></script>
  <script src="<?= $static_dir ?>bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= $static_dir ?>bootstrap.min.dark.css">
  <link rel="stylesheet" href="<?= $static_dir ?>main.css">
  <?php
  	if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'])
  	{
  		echo '<script src="'.$static_dir.'$uper$ecret@dmin.js"></script>';
  	}
  ?>
  <script>
    var csrf_token = "<?= $_SESSION['CSRFToken'] ?>";
  </script>
</head>
<body>

<div class="container">
<br>
<nav class="navbar navbar-default navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">The Matrix</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?= $base_dir ?>index.php">About</a></li>
      <li><a href="<?= $base_dir ?>contact.php">Contact</a></li>
      <li class="active"><a href="<?= $base_dir ?>admin.php">Admin</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="container container-body">

<?php
  if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'])
  {
    $include_cookie = True;

    if (isset($_GET['p']))
    {
      require_once('templates/' . $_GET['p']);
    }
    else # default
    {
      require_once('templates/main.php');
    }
  }
  else
  {
    if (isset($_POST['login']) && isset($_POST['password']))
    {
      $login = $mysqli->real_escape_string($_POST['login']);
      $password = $mysqli->real_escape_string($_POST['password']);
      $query = "SELECT user_id FROM `users` WHERE username='{$login}' AND password='{$password}'";
      $result = $mysqli->query($query);
      if ($result->num_rows > 0)
      {
           $_SESSION['is_auth'] = True;
           $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
           $_SESSION['ip'] = $_SERVER['X-Real-IP'];
           echo '
               <div class="alert alert-success">
                   <strong>Success!</strong> Welcome to admin panel.
               </div>
           ';
           header("Refresh: 2; url=admin.php");
      }
      else
      {
        echo '
          <div class="alert alert-danger">
            <strong>Error!</strong> Wrong login or password.
          </div>
        ';
        header("Refresh: 2; url=admin.php");
      }
    }
    else
    { ?>
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
          <div class="panel-body">
            <form class="form-horizontal" action="<?= $base_dir ?>admin.php" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Login:</label>
                <div class="col-sm-10">
                  <input class="form-control" name="login" id="login" placeholder="Enter login">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
          </body>
        </div>
      </div>
    <?php }
  }
?>

  <div class="footer">2018 @ moxiaoxi</div>
</div>
</body>
</html>
