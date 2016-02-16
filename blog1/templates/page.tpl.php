<nav class="w3-sidenav w3-light-grey w3-card-2" style="width:25%" >

<?php if($page['sidebar']): ?>
	<div class="main-menu">
	<?php print render ($page['sidebar']); ?>
	</div>
<?php endif; ?>
			
</nav>


<div id="main" style = "margin-left: 25%" >

<div class "header-content">
	<div class = "w3-container w3-blue-grey">

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
	<?php if($page['header']): ?>
		<?php if ($logged_in): ?>
			<?php print render($page['header']); ?>
		<?php else: ?>
			<ul>
				<li class = "menu"><a href = "<?php base_path(); ?> user/login">Log In</a></li>
			</ul>
		<?php endif; ?>
	<?php endif; ?>
</div>
</div><!--end of header content-->

<?php print $messages; ?>

<div class = "main-content w3-container">

	
<?php if($page['content']): ?>
		<?php print render($page['content']); ?>
	<?php endif; ?>



</div> <!--end of main content-->
<div class = "footer-content">
	
<footer class="w3-container w3-blue-grey">
	<?php if($page['footer']): ?>
		<?php print render($page['footer']); ?>
	<?php endif; ?>
<div class = "copyright" style = "text-align: center"><?php print t('Copyright');?>&copy;<?php echo date("Y");?></div>
<div class = "credit" style = "text-align: right"><?php print t('Theme by <strong>Varun Kumar</strong>');?></div>
</footer>
</div><!--end of footer-content-->
</div>
