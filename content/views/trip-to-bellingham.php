<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<?php if($controller->showAll): ?>
			<h1>Trip to Bellingham</h1>
			<p>
				From April to June 2016, I crossed the Atlantic to North America for the very first time and spent the vast majority of my time in a city called Bellingham, in the north-west of the United States in the State of Washington.
			</p>
			<p>
				I have enjoyed my visit here and would like to share with you about what I've discovered here including many of the subtle cultural differences between the USA and the UK, some which might really surprise you.
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
						Page not found
						<?php
					}
				}
			?>
			
			<?php endif; ?>
		</article>
	</section>
</section>
