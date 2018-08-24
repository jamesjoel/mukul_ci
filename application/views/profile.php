
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
			<table width="400" align="center">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name'];?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data['username'];?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address'];?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender'];?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact'];?></td>
				</tr>
			</table>
			<a href="<?php echo site_url('user/edit');?>">Edit</a>
			<a href="<?php echo site_url('user/change_pass');?>">Change Password</a>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>