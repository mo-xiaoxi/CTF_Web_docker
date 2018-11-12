<?php 
function get_device() {  
    $agent = $_SERVER['HTTP_USER_AGENT'];  
    $os = false;  
  
    if (preg_match('/Windows/i', $agent)) {  
      $os = 'Windows';  
    }
    else if (preg_match('/Coolpad/i', $agent)) {  
      $os = 'Coolpad';  
    }
    else if (preg_match('/MI-ONE|MI \d|HM NOTE/i', $agent)) {  
      $os = 'Xiaomi';  
    }
    else if (preg_match('/(MEIZU (MX|M9)|M030)|MX-3/i', $agent)) {  
      $os = 'Meizu';  
    }
    else if (preg_match('/Huawei/i', $agent)) {  
      $os = 'Huawei';  
	  if (preg_match('/HUAWEI( |\_)?([.0-9a-zA-Z]+)/i', $agent, $regmatch)) {
				$os .= " " . $regmatch[2];
			}
    }
    else if (preg_match('/k-touch/i', $agent)) {  
      $os = 'K-Touch';  
    }
	else if (preg_match('/Nokia/i', $agent)) {
		$os = 'Nokia'; 
		if (preg_match('/Nokia(E|N| )?([0-9]+)/i', $agent, $regmatch)) {
			if (preg_match('/IEMobile|WPDesktop|Edge/i', $agent)) {
				if ($regmatch[2] == '909') {
					$regmatch[2] = '1020';
				}
				$os .= " Lumia " . $regmatch[2];
			}
			else {
				$os .= " " . $regmatch[1] . $regmatch[2];
			}
		}
		else if (preg_match('/Lumia ([0-9]+)/i', $agent, $regmatch)) {
			$os .= " Lumia " . $regmatch[1];
		}
	}
	else if (preg_match('/BlackBerry/i', $agent)) {
			$os = "BlackBerry";
			if (preg_match('/blackberry ?([.0-9a-zA-Z]+)/i', $agent, $regmatch)) {
				$os .= " " . $regmatch[1];
			}
	}
	else if (preg_match('/Lenovo|lepad/i', $agent)) {
			$os = "Lenovo";
			if (preg_match('/Lenovo[\ |\-|\/|\_]([.0-9a-zA-Z]+)/i', $agent, $regmatch)) {
				$os .= " " . $regmatch[1];
				}
				else if (preg_match('/lepad/i', $agent)) {
					$os .= ' LePad';
				}
	}
	else if(preg_match('/LG/i', $agent)) {
		$os = "LG";
		if (preg_match('/LGE?([- \/])([0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " " . $regmatch[2];
		}
	}
	else if (preg_match('/Galaxy Nexus/i', $agent)) {
		$os = "Galaxy Nexus";
	}
	else if (preg_match('/Smart-?TV/i', $agent)) {
		$os = "Samsung Smart TV";
	}
	else if (preg_match('/GT-/i', $agent)) {
		$os = "Samsung";
		if (preg_match('/GT-([.\-0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " " . $regmatch[1];
		}
	}
	else if (preg_match('/Samsung/i', $agent)) {
		$os = "Samsung";
		if (preg_match('/Samsung-([.\-0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " " . $regmatch[1];
		}
	}
    else if (preg_match('/Android/i', $agent)) {  
      $os = 'Android';  
    }
    else if (preg_match('/linux/i', $agent)) {  
      $os = 'Linux';  
    }
	else if (preg_match('/iPad/i', $agent)) {
		$os = "iPad";
		if (preg_match('/CPU\ OS\ ([._0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " iOS " . str_replace("_", ".", $regmatch[1]);
		}
	}
	else if (preg_match('/iPod/i', $agent)) {
		$os = "iPod";
		if (preg_match('/iPhone\ OS\ ([._0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " iOS " . str_replace("_", ".", $regmatch[1]);
		}
	}
	else if (preg_match('/iPhone/i', $agent)) {
		$os = "iPhone";
		if (preg_match('/iPhone\ OS\ ([._0-9a-zA-Z]+)/i', $agent, $regmatch)) {
			$os .= " iOS " . str_replace("_", ".", $regmatch[1]);
		}
	}
    else if (preg_match('/unix/i', $agent)) {  
      $os = 'Unix';  
    }  
    else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent)) {  
      $os = 'SunOS';  
    }  
    else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent)) {  
      $os = 'IBM OS/2';  
    }  
    else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent)) {  
      $os = 'Mac'; 
    }
    else if (preg_match('/offline/i', $agent)) {  
      $os = 'offline';  
    }  
    else{  
      $os = 'unknown';
    }  
    return $os;  
}
?>