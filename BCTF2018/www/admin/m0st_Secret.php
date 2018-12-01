<?php 
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $re = curl_exec($ch);
    curl_close($ch);
    return $re;
}
if(!empty($_POST['You_cann0t_guu3s_1t_1s2xs'])){
    $url = $_POST['You_cann0t_guu3s_1t_1s2xs'];
    curl($url);
}else{
    die("Hint: Just for web2! :)");
}
?>