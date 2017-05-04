<section class="content-wrapper">
	<section class="centered-content">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Test Ad 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9826697266734102"
     data-ad-slot="9663126873"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div id="image-uploader" style="display: none;">
			<iframe name="main-image-iframe"></iframe>
			<form target="main-image-iframe" class="form" enctype="multipart/form-data" method="post" action="<?php echo URLS::link('/ajax/upload-image-ajax'); ?>">
				<input type="hidden" name="file-to-upload-tag" class="input-file-tag" value="22" />
				<input type="file" size="20" name="file-to-upload" class="input-file" value="" />
			</form>
		</div>
		<table>
			<tr>
				<td>
					Main image (required)
				</td>
				<td>
					Verification image (optional)
				</td>
			<tr>
			</tr>
				<td>
					<span id="main-image">
						
						<?php
							$fileId = '/images/no-image';
							
							if ($controller->loggedInUser->mainImagePending !== null) {
								$fileId = '/images/' . $controller->loggedInUser->mainImagePending;
							}
							else if ($controller->loggedInUser->mainImage !== null) {
								$fileId = '/images/' . $controller->loggedInUser->mainImage;
							}
						?>
						
						<img width="200px" height="200px" src="<?php echo URLS::link($fileId); ?>" id="thumb">
					</span>
				</td>
				<td>
					<span id="verification-image">
						
						<?php
							$fileId = '/images/no-image';
							
							if ($controller->loggedInUser->mainImagePending !== null) {
								$fileId = '/images/' . $controller->loggedInUser->verificationImagePending;
							}
							else if ($controller->loggedInUser->mainImage !== null) {
								$fileId = '/images/' . $controller->loggedInUser->verificationImage;
							}
						?>
						
						<img width="200px" height="200px" src="<?php echo URLS::link($fileId); ?>" id="thumb">
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<span class="pending-image-label">Pending...</span>
					<button onclick="selectFileAndUpload('main-image');">Cancel</button>
				</td>
				<td>
					<button onclick="selectFileAndUpload('verification-image');">Cancel</button>
				</td>
			</tr>
			<tr>
				<td>
					<button onclick="selectFileAndUpload('main-image');">Upload image...</button>
				</td>
				<td>
					<button onclick="selectFileAndUpload('verification-image');">Upload image...</button>
				</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td>Orientation</td>
				<td>
					<select>
						<option>Straight</option>
						<option>Gay / Lesbian</option>
						<option>Bisexual</option>
					</select>
				</td>
			</tr>
		</table>
		
		
		<form id="profile-info" name="profile-info">
			<input id="profile-info-main-image" name="main-image-file-id" type="text" value="" />
			<input id="profile-info-verification-image" name="verification-image-file-id" type="text" value="" />
		</form>
		
		<button onclick="applyChanges();">Apply changes</button>
		
		
	</section>
</section>