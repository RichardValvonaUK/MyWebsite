<section class="left-content">
	<?php if ($controller->detailsEntered): ?>
		 <?php if($controller->userExists): ?>
			<h1>Error</h1>
			<p>Sorry, that username is taken. Please go back and try again.</p>
		 <?php elseif($controller->inputsTooShort): ?>
			<h1>Error</h1>
			<p>Sorry, you cannot register with that username. It must contain at least 7 letters or numbers.</p>
		<?php elseif(!$controller->alphanumeric): ?>
			<h1>Error</h1>
			<p>Sorry, you cannot register with that username. It can only contain letters and numbers.</p>
		<?php elseif(!$controller->emailValid): ?>
			<h1>Error</h1>
			<p>Sorry, you cannot register with that email address. It's not in a valid format.</p>
		 <?php else: ?>
			<?php if($controller->registerSuccessful): ?>
				<h1>Success</h1>
				<p>Your account was successfully created. Please <a href="index.php">click here to login</a>.</p>
			<?php else: ?>
				<h1>Error</h1>
				<p>Sorry, your registration failed. Please go back and try again.</p>
			<?php endif; ?>
		 <?php endif; ?>
	<?php else: ?>
		 
	   <h1>Register</h1>
		 
	   <p>Please enter your details below to register.</p>
		 
		<form method="post" action="<?php echo URLS::link('register'); ?>" name="registerform" id="registerform">
		<fieldset>
			<table class="mobile-text-larger">
				<tr>
					<td><label for="username">Username:</label></td>
					<td><input type="text" name="username" id="username" /></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="password" name="password" id="password" /></td>
				</tr>
				<tr>
					<td><label for="email">Email Address:</label></td>
					<td><input type="text" name="email" id="email" /></td>
				</tr>
			</table>
			<input class="button" type="submit" name="register" id="register" value="Register" />
		</fieldset>
		</form>
	<?php endif; ?>
</section>
<section class="right-sidebar-content">
	
</section>
