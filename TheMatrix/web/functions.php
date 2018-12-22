<?php
	function error($error)
	{
		printf("<div class='alert alert-danger'><strong>%s</strong></div><div class='footer'>2016 @ CTFZone</div>", $error);
		exit();
	}
?>