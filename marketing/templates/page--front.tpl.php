
<div class = "navigation-region" >
	
<nav class="w3-navbar w3-large w3-green" >
	<?php if ($page['navigation']): ?>
		<?php print render ($page['navigation']); ?>
	<?php endif; ?>

</nav>
</div><!--end of navigation region-->
<div class = "banner-region" >
	<?php if ($page['banner']): ?>
		<?php print render ($page['banner']); ?>
	<?php endif; ?>
</div>
</div><!--end of banner region-->
<div class = "mission-region">
<div class="w3-container w3-center w3-padding-24">
<h3 class="w3-padding-bottom"><?php print($site_slogan); ?></h3>
</div><!--mission region-->
<div class="w3-row-padding">
<div class = "image1-region">
<div class="w3-third">
	<?php if ($page['image_first']): ?>
		<?php print render ($page['image_first']); ?>
	<?php endif; ?>
</div>
</div><!--end of image1 region-->
<div class = "image2-region">
<div class="w3-third">
<?php if ($page['image_second']): ?>
		<?php print render ($page['image_second']); ?>
	<?php endif; ?>
</div>
</div><!--end of image2 region-->
<div class = "sidebar-region">
<div class="w3-third w3-padding">
<?php if ($page['sidebar']): ?>
		<?php print render ($page['sidebar']); ?>
	<?php endif; ?>
</div>
</div><!--end of sidebar region-->
</div><!--end of midpage content-->
<div class = "footer-region">
<footer class="w3-container w3-green w3-center">
<h3>Footer</h3>
<p>Footer information goes here.</p>
</footer>
</div><!--end of footer region-->
</div>