<?php
	include_once("config.php");
	include_once("functions.php");
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
      <li class="active"><a href="<?= $base_dir ?>index.php">About</a></li>
      <li><a href="<?= $base_dir ?>contact.php">Contact</a></li>
      <li><a href="<?= $base_dir ?>admin.php">Admin</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="container container-body">
      <div class="panel panel-default">
            <div class="panel-heading">About</div>
              <div class="panel-body">
                <center><img src="<?= $img_dir ?>hackerman.jpg" width="600"></center>
            </div>
          </div>
  <div class="footer">2018 @ moxiaoxi</div>
</div>
</body>
</html>
