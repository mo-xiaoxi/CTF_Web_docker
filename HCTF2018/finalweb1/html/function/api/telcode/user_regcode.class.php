<?php

class emmmsms{
	
	public function smsconfig($m='',$c='',$s='',$t=1){
		global $db;
		$rs = $db -> select("COL_Key","`emmm_api`"," where id = 6");
		$rs = explode('|',$rs[0]);
		if($rs[1] == 2){
			return false;
		}else{
			$http = 'http://api.sms.cn/mtutf8/';
			$uid = $rs[2];
			$pwd = $rs[3];
			$mobile	 = $m;
			$mobileids	 = '';
			$content = $c;
			return $this->sendSMS($http,$uid,$pwd,$mobile,$content,$mobileids);	
		}
	}
	
	function sendSMS($http,$uid,$pwd,$mobile,$content,$mobileids,$time='',$mid=''){
		$data = array
			(
			'uid'=>$uid,					//用户账号
			'pwd'=>md5($pwd.$uid),			//MD5位32密码,密码和用户名拼接字符
			'mobile'=>$mobile,				//号码
			'content'=>$content,			//内容
			'mobileids'=>$mobileids,
			'time'=>$time,					//定时发送
			);	
		return $this->postSMS($http,$data); //POST方式提交
	}

	function postSMS($url,$data=''){
		$port="";
		$post="";
		$row = parse_url($url);
		$host = $row['host'];
		@$port = $row['port'] ? $row['port']:80;
		$file = $row['path'];
		while (list($k,$v) = each($data))
		{
			$post .= rawurlencode($k)."=".rawurlencode($v)."&";	//转URL标准码
		}
		$post = substr( $post , 0 , -1 );
		$len = strlen($post);
		$fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
		if (!$fp) {
			return "$errstr ($errno)\n";
		} else {
			$receive = '';
			$out = "POST $file HTTP/1.1\r\n";
			$out .= "Host: $host\r\n";
			$out .= "Content-type: application/x-www-form-urlencoded\r\n";
			$out .= "Connection: Close\r\n";
			$out .= "Content-Length: $len\r\n\r\n";
			$out .= $post;
			fwrite($fp, $out);
			while (!feof($fp)) {
				$receive .= fgets($fp, 128);
			}
			fclose($fp);
			$receive = explode("\r\n\r\n",$receive);
			unset($receive[0]);
			//return implode("",$receive);
			return "";
		}
	}
}

$smskey = new emmmsms();
?>
