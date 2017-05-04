<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<h1>Edit Pages</h1>
			<?php if ($controller->viewToEdit !== null) : ?>
			<p>
				<h2><?php echo '/views/' . $controller->viewToEdit . '.php'; ?></h2>
					<?php echo URLS::jsLink("Save changes...", 'onclick="saveView(\'' . strtolower($controller->viewToEdit) . '\');"', null); ?>
					<?php echo URLS::localLinkNewWindow("View page", strtolower($controller->viewToEdit), null); ?>
					
					<textarea class="code-block"><?php echo htmlspecialchars($controller->viewContent); ?></textarea>
			</p>
			<?php endif; ?>	
			<span class="hidden edit-menu-options-pop-up-holder">
					<ul class= "edit-menu-options-pop-up">
						<li><a href="javascript:void(0);" class="menu-item" onclick="">Edit...</a>
						<li><a href="javascript:void(0);" class="menu-item" onclick="">Insert item before...</a>
						<li><a href="javascript:void(0);" class="menu-item" onclick="">Insert item after...</a>
						<li><a href="javascript:void(0);" class="menu-item" onclick="">Delete</a>
						<li><a href="javascript:void(0);" class="menu-item" onclick="selectMenuItem('.edit-menu-options-pop-up-holder', null);">Close</a>
					</ul>
			</span>
		</article>
	</section>
</section>
<script>
	$( function() {
		$( ".menu" ).sortable();
		$( ".menu ul" ).sortable();
	} );
</script>
