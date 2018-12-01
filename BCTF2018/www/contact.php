<?php
include 'header.php';
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login first,Plz :)');";
    echo "location.href='login.php';</script>";
    exit();
} else {
    include_once "config.php";
}
?>
<!-- banner -->
<div class="banner1">
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">

    <div class="contact-grids">
        <div class="container">
            <ol class="breadcrumb breadco">
                <li><a href="admin/index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
            <div class="col-md-3 contact-grid">
                <div class="call">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li>+3402 890 679</li>
                            <li>+5356 890 679</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="address">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li>345 Diamond Street,</li>
                            <li>Greece.</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mail">
                    <div class="col-xs-3 contact-grdl">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 contact-grdr">
                        <ul>
                            <li><a href="mailto:admin@momomoxiaoxi.com">admin@momomoxiaoxi.com</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-5 contact-grid">
                <?php
                if (isset($_POST['message']) && isset($_POST['code'])) {
                    $code = $_POST['code'];
                    if ($_SESSION['captcha'] === substr(md5($code), 0, 4)  ) {
                        $message = htmlentities($dbc->real_escape_string($_POST['message']));
                        $user_name = htmlentities($dbc->real_escape_string($_SESSION['username']));
                        $uid = md5(uniqid());
                        $query = "INSERT INTO `feedbacks` (`message`,`is_checked`,`timestamp`,`user_name`,`uid`) VALUES ('{$message}',0,now(),'{$user_name}','{$uid}');";
                        $dbc->query($query);
                        echo '
                            <div class="alert alert-success">
                              <strong>Success!</strong> Your message sended. Message UID: ' . $uid . '
                            </div>
                          ';
                    } else {
                        echo '
          <div class="alert alert-danger">
            <strong>Error!</strong> Captcha is not correct.
          </div>
        ';
                    }
                }
                $seed = rand(100000, 999999);
                $captcha = substr(md5($seed), 0, 4);
                $_SESSION['captcha'] = $captcha;
                ?>
                <form action="contact.php" method="POST">
                    <textarea type="text" name="message" id="message">Leave Your messages...</textarea>
                    <p style="color: #999;">substr(md5($code),0,4) =='<?php echo $_SESSION['captcha'] ?>'</p>
                    <input type="text" name="code" id="code" required="">
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="col-md-4 contact-grid">
                <div class="newsletter">
                    <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>messages</h3>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="contact-grids">
    <div class="container">
        <div class="panel panel-default">
            <ol class="breadcrumb breadco">
                <div class="panel-heading" style="color: #999;">Your Messages:</div>
            </ol>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><center>Time</center></th>
                        <th><center>UID</center></th>
                        <th><center>Message</center></th>
                        <th><center>Status</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $user_name = $dbc->real_escape_string($_SESSION['username']);
                    $query = "SELECT timestamp,uid,message,is_checked FROM feedbacks WHERE user_name = '{$user_name}' ORDER BY id DESC";
                    $result = $dbc->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_row()) {
                            if ( intval($row[3]) === 1 )
                                $status = '<div style="color:#04FF00">Checked</div>';
                            else
                                $status = '<div style="color:#FFA500">Waiting</div>';
                            echo "
                    <tr>
                    <td><center>{$row[0]}</center></td>
                    <td><center>{$row[1]}</center></td>
                    <td><center>{$row[2]}</center></td>
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

    </div>
</div>
<!-- contact -->
<?php
include 'footer.php';
?>
