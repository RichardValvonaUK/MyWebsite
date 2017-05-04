<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<?php if($controller->showAll): ?>
			<h1>Russian Lab</h1>
			<p>
				Welcome to the Russian Lab! This is a new project aimed at helping Russian language learners to improve their knowledge of Russian and in a fun and practical way. I am learning Russian myself and have over the years discovered what works for me and what doesn't. This project is based on learning by example so you can see the words being conjugated correctly and not just being told how to conjugate them correctly. Being told how to do something without seeing it requires extra brain power as well as making mistakes due to misinterpreting an instruction which may be vague or unclear.
			</p>
			<p>
				At the moment, the project is in its early stages. So far, you have a number conjugator to play around it. You can literally type in any non-negative whole number you wish to and it will decline this number for all six cases as well as optionally seeing how a noun declines in all cases when it follows a number. If you wish to try out the <?php echo \URLS::localLink('Cardinal Number and Noun Conjugator, please click here', 'russian-lab/cardinal-numbers-with-nouns', null); ?>.
			</p>
			<?php
			/*
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
				*/
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
