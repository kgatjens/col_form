
	<?php include('includes/header.php'); ?>





	<div id="profile">

		<form id="profile-form" action="">
			<h2>Who are you?</h2>
			<div id="three-columns-left">
				<p>Name</p>
				<input value="" type="text" name="input_name" >
				<p>Deparment</p>
				<input value="" type="text" name="input_deparment" >
				<p>Short Bio</p>
				<textarea rows="9" cols="52" name="input_bio"></textarea>
			</div>

			<div id="three-columns-center">
				<p>Hire Date</p>
				<input value="" type="text" name="input_hire_date" >
				<p>Phone</p>
				<input value="" type="text" name="input_phone" >
				<p>Primary Language</p>
				<input value="" type="text" name="input_language" >
				<p>Second Language</p>
				<input value="" type="text" name="input_second_language" >
			</div>

			<div id="three-columns-right">
				<p>Primary Office Location</p>
				<input style="width:370px" value="" type="text" name="input_name" >
				<p>Email</p>
				<input style="width:370px" class="large" value="" type="text" name="input_name" >
				<p>Mobile</p>
				<input value="" type="text" name="input_mobile" >
				<p>Linkeln</p>
				<input value="" type="text" name="input_linkedln" >
			</div>

			<div id="footer-input-zone">
				<div id="profile_twitter">
					<p>Twitter (optiona)</p>
					<input value="" type="text" name="input_twitter" >
				</div>
				<div id="profile_other">
					<p>Other (Tumblr, Blog, IM, etc. Optional)</p>
					<input style="width:340px" value="" type="text" name="input_other" >
				</div>
			</div>	



			
		
			<input type="submit" class="black-button" value="Next">
				
		</form>

	</div>

	<?php include('includes/footer.php'); ?>