<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<?php if($controller->showAll): ?>
			<h1>Isle of Wight</h1>
			<p>
				Who can leave off the place where I was born and grew up in. Although I have now officially moved off the island, it will not be totally forgotten about. It was the right choice to leave as the work and social opportunities for someone in their 20's are absolutely dire, but for anyone thinking of visiting here and wanting to try something a little different, then it certainly offers quite a lot for any type of tourist whether you are a big spender or on a budget. I won't just mention the typical tourist attractions everyone knows about, but also the lesser-known places that only a local will experience.
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
