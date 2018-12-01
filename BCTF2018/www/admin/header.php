<?php
session_start();
$_SESSION['CSRFToken'] = md5(uniqid());
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seafaring Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<script defer src="../js/jquery.flexslider.js"></script>
<script>var csrf_token = "<?= $_SESSION['CSRFToken'] ?>";</script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<script>
    function view_uid(uid) {
        $.ajax({
            type: "POST",
            url: "/admin/handle_message.php",
            data: {"token": csrf_token, "action": "view_uid", "uid": uid},
            dataType: "json",
            success: function (data) {
                if (!data["error"]) {
                    data = data['result'];
                    var Status = '';
                    $('#timestamp').text(data['timestamp']);
                    $('#username').text(data['user_name']);
                    $('#message').text(data['message']);
                    document.getElementById("replyuid").value=data['uid'];
                    if (parseInt(data['is_checked']) == 1) {
                        Status = '<div style="color:#04FF00">Checked</div>';
                    } else {
                        Status = '<div style="color:#FFA500">Not Checked</div>';
                    }
                    document.getElementById("status").innerHTML = Status;
                }
                else
                    alert('Error: ' + data["error"]);
            }
        });
    }
    function view_unreads() {
        $.ajax({
            type: "POST",
            url: "/admin/handle_message.php",
            data: {"token": csrf_token, "action": "view_unreads", "status": 0},
            dataType: "json",
            success: function (data) {
                if (!data["error"]) {
                    data = data['result'];
                    var html = '';
                    var tbody = document.getElementById("comments");
                    for (var i = 0; i < data.length; i++) {
                        var Time = data[i][0];
                        var Username = data[i][1];
                        var Uid = data[i][2];
                        var Status = '';
                        if (parseInt(data[i][3]) == 1) {
                            Status = '<div style="color:#04FF00">Checked</div>';
                        } else {
                            Status = '<div style="color:#FFA500">Not Checked</div>';
                        }
                        html += "<tr> <td > <center> " + Time + " </center></td> <td> <center> " + Username + " </center></td> <td> <center> <a onclick = view_uid('" + Uid + "') > " + Uid + " </a></center> </td> <td> <center> " + Status + " </center></td> </tr>"
                    }
                    tbody.innerHTML = html;
                }
                else
                    alert('Error: ' + data["error"]);
            }
        });
    }

    function set_reply() {
        var uid = document.getElementById("replyuid").value;
        var  reply =  document.getElementById("replymessage").value;
        $.ajax({
            type: "POST",
            url: "/admin/handle_message.php",
            data: {"token": csrf_token, "action": "set_reply", "uid": uid, "reply": reply},
            dataType: "json",
            success: function (data) {
                if (!data["error"]) {
                    data = data['result'];
                    alert('Succ: ' + data);
                }
                else
                    alert('Error: ' + data["error"]);
            }
        });
    }
    function load_all() {
        $.ajax({
            type: "POST",
            url: "/admin/handle_message.php",
            data: {"token": csrf_token, "action": "load_all"},
            dataType: "json",
            success: function (data) {
                if (!data["error"]) {
                    data = data['result'];
                    var html = '';
                    var tbody = document.getElementById("comments");
                    for (var i = 0; i < data.length; i++) {
                        var Time = data[i][0];
                        var Username = data[i][1];
                        var Uid = data[i][2];
                        var Status = '';
                        if (parseInt(data[i][3]) == 1) {
                            Status = '<div style="color:#04FF00">Checked</div>';
                        } else {
                            Status = '<div style="color:#FFA500">Not Checked</div>';
                        }
                        html += "<tr> <td > <center> " + Time + " </center></td> <td> <center> " + Username + " </center></td> <td> <center> <a onclick = view_uid('" + Uid + "') > " + Uid + " </a></center> </td> <td> <center> " + Status + " </center></td> </tr>"
                    }
                    tbody.innerHTML = html;
                }
                else
                    alert('Error: ' + data["error"]);
            }
        });
    }
    setTimeout(load_all, 1000);
</script>
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="logo">
			<a href="./index.php">Seafaring <span>A Travel Agency</span></a>
		</div>
		<div class="logo-right">
			<ul>
				<li><?php echo $_SESSION['username']?></li>
				<li><a href="./logout.php">Exit</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="header-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="./index.php" >Home</a></li>
                            <li class="active"><a href="../contact.php" >Contact</a></li>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
	</div>
	
