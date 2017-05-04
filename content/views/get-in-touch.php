<section class="content-wrapper">
	<section class="centered-content">
		<article>
			<h1>Get in touch</h1>
			<p>
			If you wish to get in touch with me then I would be more than happy to hear from you!
			</p>
			<p>
			At the moment, this page is still "in the works" and will be improved later. For the time being, here are a few ways you can see who I am or get in touch.
			</p>
			
			<h2>Social media</h2>
			
			<?php $iconWidth = 40; ?>
			<span class="block-table vertically-centered">
				<span class="block-table-row">
					<span class="block-table-cell with-padding"><?php echo \URLS::absLink(\Images::create('', '1464388115_facebook.png', $iconWidth, null),
						'https://www.facebook.com/richard.valvona',
						null
					); ?></span>
					<span class="block-table-cell with-padding">&lt;--- Click on the Facebook logo</span>
				</span>
				<span class="block-table-row">
					<span class="block-table-cell with-padding"><?php echo \URLS::absLink(\Images::create('', '1464387080_instagram.png', $iconWidth, null),
						'https://www.instagram.com/m_r_robin/',
						null
					); ?></span>
					<span class="block-table-cell with-padding">&lt;--- Same applies to Instagram</span>
				</span>
				<span class="block-table-row">
					<span class="block-table-cell with-padding"><?php echo \URLS::absLink(\Images::create('', '1464387946_twitter_2.png', $iconWidth, null),
						'https://twitter.com/RichardValvona',
						null
					); ?></span>
					<span class="block-table-cell with-padding">&lt;--- And Twitter</span>
				</span>
				<span class="block-table-row">
					<span class="block-table-cell with-padding"><?php echo \URLS::absLink(\Images::create('', '1464599692-youtube-square-social-media.png', $iconWidth, null),
						'https://www.youtube.com/channel/UC_Dnr4KatK04R7TG_xuVG3Q/videos',
						null
					); ?></span>
					<span class="block-table-cell with-padding">&lt;--- Oh... I forgot to tell you that I also make YouTube videos</span>
				</span>
			</span>
			<br/><br/>
			<h2>Or email...</h2>
			<p>
			If you don't have a social media account or would rather do things the old-fashioned way then feel free to send me an email.
			<br/><br/>
				<?php echo \URLS::absLink(
							'richard@richardvalvona.uk',
							'mailto:richard@richardvalvona.uk',
							null
						); ?>
			</p>				
		</article>
	</section>
</section>
