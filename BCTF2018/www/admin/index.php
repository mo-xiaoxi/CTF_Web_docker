<?php
require_once("../config.php");
include_once('header.php');
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login first,Plz :)');";
    echo "location.href='../login.php';</script>";
    die();
}
if ($_SESSION['username'] != 'admin') {
    echo "<script>alert('Sorry, You aren\'t admin :)');";
    echo "location.href='../index.php';</script>";
    die();
}
?>
<!-- banner -->
<div class="banner1">
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
    <div class="container">
        <div class="single-page-artical">
            <div class="artical-content">
                <p></p>
            </div>
            <div class="artical-links">
                <ul>
                    <li><span class="glyphicon glyphicon-calendar"
                              aria-hidden="true"></span><?php echo date('Y-m-d H:i:s'); ?></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"
                                          aria-hidden="true"></span><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>View
                            comments</a>
                    </li>
                    <li><a href="#" onclick="view_unreads()" ><span class="glyphicon glyphicon-bookmark"
                                                                   aria-hidden="true"></span>Only Show Unreads</a>
                    </li>
                </ul>
            </div>
            <div class="comment-grid-top">
                <h3>Comments</h3>

            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            <center>Time</center>
                        </th>
                        <th>
                            <center>Username</center>
                        </th>
                        <th>
                            <center>UID</center>
                        </th>
                        <th>
                            <center>Status</center>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="comments">

                    <?php
                    //                    $query = "SELECT timestamp,user_name,uid,is_checked FROM feedbacks  ORDER BY id DESC";
                    //                    $result = $dbc->query($query);
                    //                    if ($result->num_rows > 0) {
                    //                        while ($row = $result->fetch_row()) {
                    //                            if (intval($row[3]) === 1)
                    //                                $status = '<div style="color:#04FF00">Checked</div>';
                    //                            else
                    //                                $status = '<div style="color:#FFA500">Waiting</div>';
                    //                            echo "
                    //                    <tr>
                    //                    <td><center>{$row[0]}</center></td>
                    //                    <td><center>{$row[1]}</center></td>
                    //                    <td><center ><a onclick=view_uid('{$row[2]}')>{$row[2]}</a></center></td>
                    //                    <td><center>{$status}</center></td>
                    //                    </tr>
                    //                  ";
                    //                        }
                    //                    } else {
                    //                        echo "
                    //                  <tr>
                    //                  <td><center>-</center></td>
                    //                  <td><center></center></td>
                    //                  <td><center>-</center></td>
                    //                  <td><center>-</center></td>
                    //                  </tr>
                    //                ";
                    //                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="comment-grid-top">
                <h3>View comments</h3>
                <div class="comments-top-top">
                    <div class="top-comment-left">
                        <a href="#"><img class="img-responsive" src="../images/co.png" alt=""></a>
                    </div>
                    <div class="top-comment-right">
                        <ul>
                            <li><span class="left-at"><a href="#" id="username">Username</a></span></li>
                            <li><span class="right-at" id="timestamp">September 15, 2015 at 10.30am</span></li>
                            <li><a class="reply"  id="status" href="#">Status</a></li>
                        </ul>
                        <p id="message">message</p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="artical-commentbox">
                <div class="table-form">
                    <form >
                        <input type="hidden" id="replyuid" value="">
                        <textarea  id="replymessage" value="Message:" onfocus="this.value = '';"
                                  onblur="if (this.value == '') {this.value = 'Message';}">replys</textarea>
                        <input type="submit" onclick="set_reply()" value="Reply">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- single -->
<?php
require_once('footer.php');

?>
