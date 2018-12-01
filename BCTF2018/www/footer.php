<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-3 footer-grids">
					<h4>Seafaring</h4>
					<p>admin@momomoxiaoxi.com</p>
					<p>+2 000 222 1111</p>
					<ul class="social-icons">
						<li><a class="p"></a></li>
						<li><a class="in"></a></li>
						<li><a class="v"></a></li>
						<li><a class="facebook"></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grids">
					<h3>Contents</h3>
					<ul>
						<li><a href="./index.php">Home</a></li>
						<li><a href="./about.php">About</a></li>
						<li><a href="./services.php">Service</a></li>
                        <li><?php
                            if(isset($_SESSION['username'])){
                                echo "<a href='./contact.php'>Contact</a>";
                            }?></li>
					</ul>
				</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Copyright &copy; 2018.Company name All rights reserved.More Templates - </p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
