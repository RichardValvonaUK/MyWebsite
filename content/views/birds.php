<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<?php if($controller->showAll): ?>
			<h1>Photographs of Wild Birds in the UK</h1>
			<p>
				There's nothing quite so peaceful as hearing the whistling of birds while surrounded by nature. It's even a pleasure to hear the robin singing from outside my house... theoretically speaking of course since I live in a flat. However the same principle holds true.
			</p>
			<p>
				On this page, you'll find a selection of photos which I have taken over the years in the UK. There are only a few on here at the moment. More will be added in time to come.
			</p>
			<?php
				foreach ($controller->subPageViews as $subPage) {
					if ($subPage instanceof \Heading) {
					
					}
					else {
						$viewURL = \URLS::getView($subPage);
						if (file_exists($viewURL)) {
							include($viewURL);
						}
					}
				}
			?>
			<?php else: ?>
			<?php
				foreach ($controller->subPageViews as $subPage) {
					$viewURL = \URLS::getView($subPage);
					if (file_exists($viewURL)) {
						include($viewURL);
					}
					else {
						?>
						Bird not found
						<?php
					}
				}
			?>
			
			<?php endif; ?>
		</article>
	</section>
</section>
