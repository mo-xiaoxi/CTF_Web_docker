<?php
session_start();
include_once("../config.php");

$result = [
    'result' => '',
    'error' => ''
];

if (isset($_SESSION['CSRFToken']) && isset($_POST['token']) && $_SESSION['CSRFToken'] === $_POST['token'])
{
    if (filter_var(
        $_SERVER['REMOTE_ADDR'], 
        FILTER_VALIDATE_IP, 
        FILTER_FLAG_NO_PRIV_RANGE|FILTER_FLAG_NO_RES_RANGE
    )) {
        header('HTTP/1.0 403 Forbidden');
        die('Accessible only via a local area network!');
    }
    if (isset($_SESSION['username']) && $_SESSION['username']==='admin'  )
    {

        if (isset($_POST['action']))
        {
            switch ($_POST['action'])
            {
                case 'view_uid':
                    $uid = $dbc->real_escape_string($_POST['uid']);
                    $query = "SELECT timestamp,user_name,uid,is_checked,message FROM feedbacks where uid='{$uid}' ORDER BY id DESC ";
                    $sql_result = $dbc->query($query);
                    if($sql_result->num_rows ==1){
                        $row = $sql_result->fetch_assoc();
                        $result['result'] = $row;
                    }else{
                        $result['error'] = "sql query error! debug info:".$query;
                    }
                    echo json_encode($result);
                    break;
                case 'view_unreads':
                    $status = $dbc->real_escape_string($_POST['status']);
                    $query = "SELECT timestamp,user_name,uid,is_checked FROM feedbacks  where is_checked={$status} ORDER BY id DESC limit 0,50";
                    $sql_result = $dbc->query($query);
                    if($sql_result->num_rows > 0){
                        $row = $sql_result->fetch_all();
                        $result['result'] = $row;
                    }else{
                        $result['error'] = "sql query error! debug info:".$query;
                    }
                    echo json_encode($result);
                    break ;
                case 'set_reply':
                    $reply = $dbc->real_escape_string($_POST['reply']);
                    $uid = $dbc->real_escape_string($_POST['uid']);
                    $query = "update feedbacks  set reply='{$reply}',is_checked=1 where uid='{$uid} '";
                    $sql_result = $dbc->query($query);
                    if($sql_result){
                        $result['result'] = "set reply succ!";
                    }else{
                        $result['error'] = "sql query error! debug info:".$query;
                    }
                    echo json_encode($result);
                    break ;
                case 'load_all':
                    $query = "SELECT timestamp,user_name,uid,is_checked FROM feedbacks  ORDER BY id DESC limit 0,50 ";
                    $sql_result = $dbc->query($query);
                    if($sql_result->num_rows > 0){
                        $row = $sql_result->fetch_all();
                        $result['result'] = $row;
                    }else{
                        $result['error'] = "sql query error! debug info:".$query;
                    }
                    echo json_encode($result);
                    break ;
                default:
                    $result['error'] = 'undefined action';
                    echo json_encode($result);
                    break;
            }
        }
    }
    else
    {
        $result['error'] = 'not authorized';
        echo json_encode($result);
    }
}
else
{
    $result['error'] = "CSRFToken  '".$_POST['token']."'is not correct";
    echo json_encode($result);
}
?>
