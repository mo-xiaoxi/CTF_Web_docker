<?php
	if (isset($include_cookie) && $include_cookie)
	{ ?>

	      <nav class="navbar navbar-default navbar-dark navbar-admin">
	        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-collapse-admin">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="/admin.php">Main</a></li>
	            <li><a href="/admin.php?p=logout.php">Logout</a></li>
	          </ul>
	        </div>
	      </nav>

		<div class="panel panel-default">
      			<div class="panel-heading">
				Active Sessions
			</div>
         		<div class="panel-body">
			    <table class="table table-striped">
			      <thead>
			        <tr>
			          <th><center>Id</center></th>
			          <th><center>User-Agent</center></th>
			          <th><center>IP</center></th>
			        </tr>
			      </thead>
				      <tbody>
				        <tr>
				          <td><center>1</center></td>
				          <td><center><?= $_SESSION['user_agent']; ?></center></td>
				          <td><center>127.0.0.1</center></td>
				      </tbody>
			    </table>
        		</div>
      		</div>
	      <div class="panel panel-default">
	        <div class="panel-heading">Users</div>
	          <div class="panel-body">
	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>Username</th>
	                  <th>Password</th>
	                  <th>Email</th>
	                </tr>
	              </thead>
	              <?php 
      						$query = "SELECT username,email FROM users";
                  $result = $mysqli->query($query);
									if ($result->num_rows > 0) {
										while ($row = $result->fetch_row()) {
											echo "<tbody><tr><td>{$row[0]}</td><td><div onclick=get_password('{$row[0]}') id='{$row[0]}' style='cursor:pointer'>***********</div></td><td>{$row[1]}</td></tbody>";
										}
									}
								?>
	            </table>
	          </div>
	        </div>
	<?php }
