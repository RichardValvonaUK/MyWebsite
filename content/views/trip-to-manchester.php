<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<?php if($controller->showAll): ?>
			<h1>Trip to Manchester</h1>
			<p>
				During July 2016 and a little bit of August, I decided to spend some time up Manchester to see what it might be like to live up north.
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
						Page not found
						<?php
					}
				}
			?>
			
			<?php endif; ?>
		</article>
	</section>
</section>
