<section class="content-wrapper">
	<section class="centered-content">
		<div id="subpage-posts" class="subpage">
			<div>
				<span onclick="switchToSubPage('subpage-add-post');" style="display: inline-block; width: 30px; height: 30px; border: 1px solid #000; text-align: center; line-height: 30px; cursor: pointer; font-size: 20pt; font-weight: bold;"
				onclick = "showDialog()">+</span>
			</div>
			<a href="javascript: void(0);" onclick="showFirstPostsPage()">1</a>
			<a href="javascript: void(0);" onclick="showPreviousPostsPage()">&lt;&lt;</a>
			<a href="javascript: void(0);" onclick="showNextPostsPage()">&gt;&gt;</a>
			<a href="javascript: void(0);" onclick="showLastPostsPage()">Last</a>
			<div id="user-posts-template" class="hidden">
				<table class="user-post" style="width: 100%; border: 1px solid #000; padding: 10px; border-radius: 10px; margin-top: 10px;">
					<tr>
						<td style="vertical-align: top; width: 80px;">
							<input type="hidden" class="user-post-id" />
							<span class="user-post-image" style="display: inline-block; width: 80px; height: 80px; background: #ff0; margin-right: 10px;">
								
							</span>
						</td>
						<td onclick="clickedOnPost($(this).parents('.user-post'));" style="vertical-align: top; padding-right: 90px; text-align: justify; cursor: pointer;">
							<div class="user-post-subject" style="font-weight: bold; margin-bottom: 3px;">Trip to Ventnor Botanical Gardens this weekend.</div>
							<div class="user-post-content">I am going to Ventnor Botanical Gardens this weekend. I would to have someone join me, perhaps with a fish &amp; chips for lunch.</div>
						</td>
					</tr>
				</table>
			</div>
			<table id="user-posts" style="width: 100%;"></table>
		</div>
		<div id="subpage-add-post" class="subpage hidden">
			<h2>Add post</h2>
			<table>
				<tr>
					<td>Subject</td>
					<td style="width: 300px;"><input id="subpage-add-post-subject" type="text" value="" style="width: 100%;"/></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea id="subpage-add-post-content" style="width: 100%;"></textarea></td>
				</tr>
			</table>
			
			<button onclick="">Add</button>
			<button onclick="switchToSubPage('subpage-posts');">Cancel</button>
		</div>
		<div id="subpage-messages" class="subpage hidden">
			<h2>Add message</h2>
			<input type="hidden" class="subpage-messages-id" />
			<span class="subpage-messages-image" style="display: inline-block; width: 80px; height: 80px; background: #ff0; margin-right: 10px;">
			<table>
				<tr>
					<td>Content</td>
					<td><textarea id="subpage-add-post-content" style="width: 100%;"></textarea></td>
				</tr>
			</table>
			
			<button onclick="">Add</button>
			<button onclick="switchToSubPage('subpage-posts');">Cancel</button>
		</div>
	</section>
</section>
