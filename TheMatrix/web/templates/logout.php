<?php
	if (isset($include_cookie) && $include_cookie)
	{
		session_unset();
		echo '
          <div class="alert alert-success">
            <strong>Success!</strong> Session has been cleared.
          </div>
        ';
		header("Refresh: 2; url=admin.php");
	}