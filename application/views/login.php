<div id="content">
	<div id="inside-content">
		<div id="left-content">
			<h3>Category</h3>
			<ul>
				<li><a href="#">Mobiles</a></li>
				<li><a href="#">Electronics</a></li>
				<li><a href="#">Home Appliance</a></li>
				<li><a href="#">Mens Fashion</a></li>
				<li><a href="#">Womens Fashion</a></li>
			</ul>
		</div>
		<div id="right-content">
			<h3>Login</h3>
			<div id="login-box">
				<h4>User Login</h4>
				<form action="<?php echo site_url('home/auth');?>" method="post">
					
				<table align="center">
					<tr>
						<td>Username</td>
						<td><input name="username" type="text" placeholder="Username/Email" class="input"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Password" class="input"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" class="btn" value="Login"></td>
					</tr>
				</table>
				<?php
				echo $this->session->flashdata("msg");
				?>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>