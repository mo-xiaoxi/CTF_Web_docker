<?php
        session_start();
        include_once("config.php");
        include_once("functions.php");
        include("simple-php-captcha.php");
        if (!isset($_POST['captcha']))
                $_SESSION['captcha'] = simple_php_captcha();
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
        <li class="active"><a href="<?= $base_dir ?>contact.php">Contact</a></li>
        <li><a href="<?= $base_dir ?>admin.php">Admin</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="container container-body">
  <?php
    if (isset($_POST['message']) && isset($_POST['captcha']))
    {
      if ($_POST['captcha'] === $_SESSION['captcha']['code'])
      {
        $message = $mysqli->real_escape_string($_POST['message']);
        $session_id = $mysqli->real_escape_string(session_id());
        $uid = md5(uniqid());
        $query = "INSERT INTO `feedbacks` (`message`,`is_checked`,`timestamp`,`session_id`,`uid`) VALUES ('{$message}',0,now(),'{$session_id}','{$uid}');";
        $mysqli->query($query);
          echo '
            <div class="alert alert-success">
              <strong>Success!</strong> Your message sended. Message UID: '.$uid.'
            </div>
          ';
      }
      else
      {
        echo '
          <div class="alert alert-danger">
            <strong>Error!</strong> Captcha is not correct.
          </div>
        ';
      }
      $_SESSION['captcha'] = simple_php_captcha();
    }
  ?>
  <div class="panel panel-default">
    <div class="panel-heading">Contact form</div>
      <div class="panel-body">
        <form class="form-horizontal" action="<?= $base_dir ?>contact.php" method="post">
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-12">
              <label for="comment">Message:</label>
              <textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter your Message"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="row" style="margin-left: 0px; margin-right: 0px">
              <div class="col-sm-2"><img style="height: 45px" src="<?= $_SESSION['captcha']['image_src'] ?>"></div>
              <div class="col-sm-8" style="padding-left: 15px; padding-right: 0px;"><input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter Captcha"></div>
              <div class="col-sm-2"><button type="submit" class="btn btn-default">Submit</button></div>
            </div>
          </div>
        </form>
      </body>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">Your Messages:</div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th><center>Time</center></th>
              <th><center>UID</center></th>
              <th><center>Status</center></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $session_id = $mysqli->real_escape_string(session_id());
              $query = "SELECT timestamp,uid,is_checked FROM feedbacks WHERE session_id = '{$session_id}' ORDER BY id DESC";
              $result = $mysqli->query($query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_row()) {
                  if ( intval($row[2]) === 1 )
                    $status = '<div style="color:#04FF00">Checked</div>';
                  else
                    $status = '<div style="color:#FFA500">Waiting</div>';
                  echo "
                    <tr>
                    <td><center>{$row[0]}</center></td>
                    <td><center>{$row[1]}</center></td>
                    <td><center>{$status}</center></td>
                    </tr>
                  ";
                }
              }
              else
              {
                echo "
                  <tr>
                  <td><center>-</center></td>
                  <td><center>-</center></td>
                  <td><center>-</center></td>
                  </tr>
                ";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="footer">2018 @ moxiaoxi</div>
</div>
</body>
</html>