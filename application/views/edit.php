
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
			<?php
			// print_r($a);
			$data = $a->row_array();
			// print_r($data);
			?>
			<form action="<?php echo site_url('user/update'); ?>" method="post">
			<table align="center">
					<tr>
						<td>Full Name</td>
						<td><input name="full_name" type="text" placeholder="Full Name" value="<?php echo $data['full_name']; ?>" class="input"></td>
					</tr>
					
					<tr>
						<td>Username</td>
						<td><input disabled="disabled" name="username" value="<?php echo $data['username']; ?>" type="text" placeholder="Username/Email" class="input"></td>
					</tr>
					
					
					
					<tr>
						<td>Address</td>
						<td><textarea name="address" placeholder="Address" cols="20" rows="5"><?php echo $data['address']; ?></textarea></td>
					</tr>
					
					<tr>
						<td>City</td>
						<td><select class="input" name="city">
							<option value="">Select</option>
							<option <?php if($data['city']=='indore') echo "selected='selected'";?> value="indore">Indore</option>
							<option <?php if($data['city']=='mumbai') echo "selected='selected'";?> value="mumbai">Mumbai</option>
							<option <?php if($data['city']=='pune') echo "selected='selected'";?> value="pune">Pune</option>
							<option <?php if($data['city']=='delhi') echo "selected='selected'";?> value="delhi">Delhi</option>
						</select></td>
					</tr>
					
					<tr>
						<td>Gender</td>
						<td>Male <input  <?php if($data['gender']=='male') echo "checked='checked'";?> type="radio"  value="male" name="gender" />Female <input  <?php if($data['gender']=='female') echo "checked='checked'";?>  value="female" type="radio" name="gender" /></td>
					</tr>
					
					<tr>
						<td>Contact</td>
						<td><input type="text" value="<?php echo $data['contact']; ?>" name="contact" placeholder="Contact No." class="input"></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<input type="submit" class="btn" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>