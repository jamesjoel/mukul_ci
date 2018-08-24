<div id="content">
	<div id="inside-content">
		
			<div id="login-box" style="width: 700px !important;">
				<h4>Wel-Come To Admin Panel</h4>

				<a href="<?php echo site_url('admin/dash') ?>">View All User</a>
				<a href="<?php echo site_url('admin/logout') ?>">Logout</a>
				<Hr />
				<table border="1" align="center">
					<tr>
						<td>S.No.</td>
						<td>Full Name</td>
						<td>Username</td>
						<td>Contact</td>
					</tr>
				<?php
				$n=1;
				foreach($all->result_array() as $data)
				{ ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['full_name']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['contact']; ?></td>
					</tr>
				<?php 
				$n++;
				}
				?>
				</table>
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>