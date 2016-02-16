<section class = "total-body">
<div class = "navigation-region" >
	
<nav class="w3-navbar w3-large w3-green" >
		<div style = "text-align: center">
      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>
      </div>
	<?php if ($page['navigation']): ?>
		<?php print render ($page['navigation']); ?>
	<?php endif; ?>

</nav>
</div><!--end of navigation region-->
<div class = "banner-region" >
	<?php if ($page['banner']): ?>
		<?php print render ($page['banner']); ?>
		<?php else: ?>
			<ul>
				<li class = "menu"><a href = "<?php base_path(); ?> user/login">Log In</a></li>
			</ul>
	<?php endif; ?>
</div>
</div><!--end of banner region-->
<div class = "mission-region">
<div class="w3-container w3-center w3-padding-24">
<h3 class="w3-padding-bottom"><?php print($site_slogan); ?></h3>
</div><!--mission region-->
<div class="w3-row-padding">
<div class = "content-region">
<div class="w3-twothird">
	<?php if ($page['content']): ?>
		<?php print render ($page['content']); ?>
	<?php endif; ?>
</div>
</div><!--end of content region-->

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
</section>