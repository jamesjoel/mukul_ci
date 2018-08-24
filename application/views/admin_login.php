<div id="content">
	<div id="inside-content">
		
			<div id="login-box">
				<h4>Login</h4>
				<form action="<?php echo site_url('admin/auth');?>" method="post">
					
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
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>