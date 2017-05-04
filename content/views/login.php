<section class="left-content">
	<?php if($controller->attemptedLogin): ?>
		<h1>Error</h1>
		<p>Sorry, your account could not be found. Please <a href="<?php echo \URLS::link(''); ?>">click here to try again</a>.</p>
	<?php else: ?>
	<div id="main">
		<h1>Member Login</h1>
		<p>Thanks for visiting! Please either login below, or <a href="<?php echo \URLS::link('register'); ?>">click here to register</a>.</p>
		<form method="post" action="<?php echo URLS::link('login'); ?>" name="loginform" id="loginform">
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
			</table>
			<a class="button" href="javascript:void(0)" onclick="$('#loginform').submit();" name="login" id="login">Login</a>
		</fieldset>
		</form>
	</div>

	<?php endif; ?>
</section>
<section class="right-sidebar-content">
	
</section>
