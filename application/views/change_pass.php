
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
			<h3>User Profile</h3>
			<Br />
			<br/>
			
			<form action="<?php echo site_url('user/update_pass'); ?>" method="post">
			<table align="center">
					<tr>
						<td>Current Password</td>
						<td><input name="c_pass" type="password" placeholder="Current Password" value="" class="input"></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input name="n_pass" type="password" placeholder="New Password" value="" class="input"></td>
					</tr>
					<tr>
						<td>Confirm New Password</td>
						<td><input name="cn_pass" type="password" placeholder="Confirm New Password" value="" class="input"></td>
					</tr>
					
					
					<tr>
						<td colspan="2" align="center">
							<input type="submit" class="btn" value="Update"></td>
					</tr>
				</table>
				<?php echo $this->session->flashdata("msg"); ?>
			</form>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>