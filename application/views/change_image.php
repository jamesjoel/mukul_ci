
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
			<h3>Change Your Image</h3>
			<form action="<?php echo site_url('user/img_upload'); ?>" enctype="multipart/form-data" method="post">
				
			<table align="center" width="400">
				<tr>
					<td>Select Image</td>
					<td><input type="file" name="myimage"/></td>
				</tr>
				<Tr>
					<td colspan="2" align="center">
						<input type="submit" value="Upload">
					</td>
				</Tr>

			</table>
			<?php echo $this->session->flashdata("msg");?>
			</form>
			
		</div>
	</div>
</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>