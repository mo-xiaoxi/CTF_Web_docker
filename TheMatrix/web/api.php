<?php
	session_start();

	include_once("config.php");

	$result = [
		'result' => '',
		'error' => ''
 	];

	if (isset($_SESSION['CSRFToken']) && isset($_POST['token']) && $_SESSION['CSRFToken'] === $_POST['token'])
	{
		if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'])
		{
	  		include_once("config.php");
			include_once("functions.php");

			if (isset($_POST['action']))
			{
				switch ($_POST['action']) 
				{
					case 'get_password':
						$login = $mysqli->real_escape_string($_POST['username']);
						$query = "SELECT password FROM users WHERE username = '{$login}'";
						$sql_result = $mysqli->query($query);
						if ($sql_result->num_rows == 1) {
							$row = $sql_result->fetch_assoc();
							$result['result'] = $row['password'];
            }                                  
						echo json_encode($result);
						break;
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
		$result['error'] = "CSRFToken '".$_POST['token']."' is not correct";
		echo json_encode($result);
	}
?>
