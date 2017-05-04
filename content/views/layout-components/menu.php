<nav id="richard1029384756-menu" class="vertical-menu left-menu">
	<span class="menu-wrapper">
		<?php
			$menu = new Menu('menu');
			$menu->addItem('Home', '/', true, 'title', null);
			$menu->addItem_a('About', '/about');
			$menu->addItem_a('Get in touch!', '/get-in-touch');
			//$menu->addGap(true);
			$menu->addItem('Adventures &amp;<br/> experiences', '', true, 'title', null);
			$menu->indent(false);
				/*
				$menu->addItem_a('Isle Of Wight', '/isle-of-wight');
				$menu->indent(true);
				$menu->addItem_a('Kayaking', '/isle-of-wight/kayaking');
				$menu->addItem_a('Camping', '/isle-of-wight/camping');
				$menu->addItem_a('Off the beaten track', '/isle-of-wight/off-the-beaten-track');
				$menu->addItem_a('Where to stay', '/isle-of-wight/places-to-stay');
				$menu->addItem_a('Eating out', '/isle-of-wight/places-to-eat-out');
				$menu->addItem_a('Places to go', '/isle-of-wight/places-to-go');
				$menu->outdent(true);
				*/
				
				/*
				$menu->addItem_a('London', '/london');
				$menu->indent(true);
				$menu->outdent(true);
				*/
				
				/*
				$menu->addItem_a('Manchester', '/trip-to-manchester');
				$menu->indent(true);
				$menu->addItem_a('Delicious street food', '/trip-to-manchester/street-food');
				$menu->addItem_a('Canal walk between two cities', '/trip-to-manchester/canal-walk-between-two-cities');
				$menu->outdent(true);
				*/
			
				/*
				$menu->addItem_a('Oxford', '/oxford');
				$menu->indent(true);
				$menu->outdent(true);
				*/

				//$menu->addItem('More >>', '/adventures'), true, 'more-group', null);
				//$menu->indent(true);
				/*
				$menu->addItem_a('Southampton', '/southampton');
				$menu->indent(true);
				$menu->outdent(true);
				*/
			
				$menu->addItem_a('Bellingham, USA', '/trip-to-bellingham');
				$menu->indent(true);
				$menu->addItem_a('My experience of Bellingham - Video', '/trip-to-bellingham/video-about-bellingham');
				$menu->addItem_a('Woods Coffee, Bellingham - Video', '/trip-to-bellingham/video-about-woods-coffee');
				$menu->addItem_a('Having a whale of a time, or not...', '/trip-to-bellingham/having-a-whale-of-a-time');
				$menu->addItem_a('What\'s Bellingham like as a place?', '/trip-to-bellingham/what-its-like');
				$menu->addItem_a('Getting to Bellingham', '/trip-to-bellingham/getting-to-bellingham');
				$menu->outdent(true);
				/*
				$menu->addItem_a('In other cities', '');
				$menu->indent(true);
				$menu->addItem_a('(Coming soon)', '');
				$menu->outdent(true);
				*/
			$menu->outdent(false);
			//$menu->addGap(true);
			/*
			$menu->addItem('Photographs', '', true, 'title', null);
				$menu->indent(true);
				$menu->addItem_a('(Under review)', '');
				$menu->outdent(true);
				*/
			
			$menu->addItem('Russian Lab', '/russian-lab', true, 'title', null);
				$menu->indent(true);
				/*$menu->addItem_a('How to pronounce letters', '/russian-lab/how-to-pronounce-letters');*/
				$menu->addItem_a('Cardinal Number and Noun Conjugator', '/russian-lab/cardinal-numbers-with-nouns');
				$menu->outdent(true);
			
			echo $menu->generateMenu();
		?>
	</span>
</nav>
