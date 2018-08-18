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
			<h3>Signup</h3>
			<div id="login-box">
				<h4>User Registration</h4>
				<form action="" method="post">
					
				<table align="center">
					<tr>
						<td>Full Name</td>
						<td><input name="full_name" type="text" placeholder="Full Name" value="<?php echo set_value('full_name'); ?>" class="input"></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('full_name');?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input name="username" value="<?php echo set_value('username'); ?>" type="text" placeholder="Username/Email" class="input"></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('username');?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input name="password" type="password" placeholder="Password" class="input"></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('password');?></td>
					</tr>
					<tr>
						<td>Re-Password</td>
						<td><input name="re_pass" type="password" placeholder="Re-Password" class="input"></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('re_pass');?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea name="address" placeholder="Address" cols="20" rows="5"><?php echo set_value('address'); ?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('address');?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><select class="input" name="city">
							<option value="">Select</option>
							<option <?php echo set_select("city", "indore"); ?> value="indore">Indore</option>
							<option <?php echo set_select("city", "mumbai"); ?> value="mumbai">Mumbai</option>
							<option <?php echo set_select("city", "pune"); ?> value="pune">Pune</option>
							<option <?php echo set_select("city", "delhi"); ?> value="delhi">Delhi</option>
						</select></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('city');?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>Male <input type="radio" <?php echo set_radio("gender", "male"); ?> value="male" name="gender" />Female <input  <?php echo set_radio("gender", "female"); ?> value="female" type="radio" name="gender" /></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('gender');?></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" value="<?php echo set_value('contact'); ?>" name="contact" placeholder="Contact No." class="input"></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo form_error('contact');?></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" class="btn" value="Signup"></td>
					</tr>
				</table>
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