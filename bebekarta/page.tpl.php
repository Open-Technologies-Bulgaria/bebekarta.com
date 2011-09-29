<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml"
      lang="<?php echo $language->language ?>"
      xml:lang="<?php echo $language->language ?>"
      dir="<?php echo $language->dir ?>" id="html-main">
<head>
  <title><?php echo $head_title ?></title>
  <meta name="fb:admins" content="alexx.todorov,1132904190" />
  <?php echo $head ?>
  <?php echo $styles ?>
  <?php echo $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

    <body class="body-main">
<!-- / make-it-center --><div class="make-it-center">

<div class="top-menu clear-block">
  <?php if ($top_left): ?> <div class="top-left"><?php echo $top_left ?></div><?php endif; ?>
  <?php if ($top_right): ?><div class="top-right"><?php echo $top_right ?></div><?php endif; ?>
</div>

<!-- logo-container -->
<div id="logo-container">
  <div id="header-bg" class="clear-block">
  <div id="logo<?php if ($logo && !$site_name && !$site_slogan): ?>-no-padding<?php endif; ?>">

  <?php if ($logo): ?> 
    <div id="logo-picture">
        <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
    </div>
  <?php endif; ?>


 <!-- if logo picture is defined, text is aligned to left -->
 <?php if ($site_name): ?>
    <h1 <?php if ($logo && !$site_slogan): ?>class="logo-picture-true-slogan-false"<?php endif; ?>  <?php if ($logo): ?>class="logo-picture-true"<?php endif; ?>><a href="<?php echo $front_page; ?>" title="<?php echo t('Home') ?>"><?php echo $site_name ?></a></h1>
 <?php endif; ?>

 <!-- if logo defined, text is aligned to left -->
 <?php if ($site_slogan): ?>
    <strong <?php if ($logo): ?>class="logo-picture-true"<?php endif; ?>><?php echo $site_slogan; ?></strong>
 <?php endif; ?> 
 </div>
 <?php if ($header_right): ?><div class="header-right"><?php echo $header_right ?></div><?php endif; ?>
 </div>
</div>
<!-- /logo-container -->

<!-- admin panel   -->
<?php if ($admin_panel): ?><div id="rws-uni-tabs" class="clear-block"><?php echo $admin_panel ?></div><?php endif; ?>

<!-- primary menu -->
<?php if ($primary_menu): ?>
<div class="rws-primary-menu clear-block">
  <?php echo $primary_menu ?>
</div>
<?php endif; ?>
<!--  /primary menu -->

<!-- top block -->
<?php if ($top): ?><div class="top"><?php echo $top ?></div><?php endif; ?>

<?php if ($left): ?>
<!-- column-1 -->
<div class="column-1"><?php echo $left ?></div>
<!-- / column-1 -->
<?php endif; ?>



<!-- column-2 --><div class="column-2 
<?php if (!$right && !$left): ?>no-right-and-left-columns
<?php elseif (!$left): ?>
no-left-column
<?php elseif (!$right): ?>
no-right-column
<?php endif; ?>
">


		<?php if ($show_messages): ?>
		<?php echo $messages; ?>
		<?php endif; ?>
        

<?php if ($content_before_blocks): ?><div class="content_before_blocks"><?php if ($content_before_blocks): ?><?php echo $content_before_blocks ?><?php endif; ?></div><?php endif; ?>

<!-- PRINTING BLOCKS BEFORE THE CONTENT (with RED headers) -->
<?php if ($top_content_block_left || $top_content_block_right): ?>
  <!-- column-2-blocks -->
  <div id="block-top" class="column-2-blocks clear-block 
  <?php if (!$right&&!$left): ?>column-2-blocks-no-right-and-left-columns
  <?php elseif (!$left): ?>
  column-2-blocks-no-left-column
  <?php elseif (!$right): ?>
  column-2-blocks-no-right-column
  <?php endif; ?>
  ">
  <!-- /column-2-blocks-left --><div class="column-2-blocks-left">
  <?php if ($top_content_block_left): ?><?php echo $top_content_block_left ?><?php endif; ?>
  <?php if (!$top_content_block_left): ?>&nbsp;<?php endif; ?>
  <!-- /column-2-blocks-left --></div>
  <!-- /column-2-blocks-right --><div class="column-2-blocks-right">
  <?php if ($top_content_block_right): ?><?php echo $top_content_block_right ?><?php endif; ?>
  <!-- /column-2-blocks-right --></div>
  <!-- /column-2-blocks --></div>
<?php endif; ?>
<!-- PRINTING BLOCKS BEFORE THE CONTENT (with RED headers) -->


<?php if ($content_top): ?><div id="content-top"><?php echo $content_top ?></div><?php endif; ?>


<?php if ($is_admin): ?>
    <?php echo $help ?>
<?php endif; ?>

		<?php if ($tabs): ?><div class="tabs"><?php echo $tabs; ?></div><?php endif; ?>
		<!-- main-content-block --><div class="main-content-block"> 
		<?php echo $content; ?>
		<!-- /main-content-block --></div>
		
<?php if ($content_bottom): ?><div id="content-bottom"><?php echo $content_bottom ?></div><?php endif; ?>

<!-- PRINTING BLOCK AFTER THE CONTENT -->

<?php if ($content_block_left || $content_block_right): ?>

  <!-- column-2-blocks -->
  <div id="block-bottom" class="column-2-blocks clear-block 
  <?php if (!$right && !$left): ?>column-2-blocks-no-right-and-left-columns
  <?php elseif (!$left): ?>
  column-2-blocks-no-left-column
  <?php elseif (!$right): ?>
  column-2-blocks-no-right-column
  <?php endif; ?>
  ">
  <!-- /column-2-blocks-left --><div class="column-2-blocks-left">
  <?php if ($content_block_left): ?><?php echo $content_block_left ?><?php endif; ?>
  <?php if (!$content_block_left): ?>&nbsp;<?php endif; ?>
  <!-- /column-2-blocks-left --></div>
  
  
  
  <!-- /column-2-blocks-right --><div class="column-2-blocks-right">
  <?php if ($content_block_right): ?><?php print $content_block_right ?><?php endif; ?>
  <!-- /column-2-blocks-right --></div>
  <!-- /column-2-blocks --></div>

<?php endif; ?>


<?php if ($content_after_blocks): ?><div class="content_after_blocks"><?php if ($content_after_blocks): ?><?php echo $content_after_blocks ?><?php endif; ?></div><?php endif; ?>



<!-- / column-2 --></div>



<?php if ($right): ?>
<!-- column-3 -->
<div class="column-3"><?php echo $right ?></div>
<!-- / column-3 -->
<?php endif; ?>


<!-- bottom block -->
<?php if ($bottom): ?><div class="bottom"><?php echo $bottom ?></div><?php endif; ?>

<!-- footer -->
<div id="footer">
 
  <?php echo $footer ?>

<div class="clear-both">
  <?php echo $footer_message ?>
  <?php echo $closure ?>
</div>

</div>
<!-- /footer -->

</div>
<!-- / make-it-center -->

<!-- NACHALO NA TYXO.BG BROYACH -->
<script  type="text/javascript">
<!--
d=document;
d.write('<div><a href="http://www.tyxo.bg/?126298" title="Tyxo.bg counter"><img width="0" height="0" alt="Tyxo.bg counter"');
d.write(' src="http://cnt.tyxo.bg/126298?rnd='+Math.round(Math.random()*2147483647));
d.write('&sp='+screen.width+'x'+screen.height+'&r='+escape(d.referrer)+'" /><\/a><\/div>');
//-->
</script>
<noscript>
  <div>
    <a href="http://www.tyxo.bg/?126298" title="Tyxo.bg counter">
      <img src="http://cnt.tyxo.bg/126298" width="0" height="0" alt="Tyxo.bg counter" />
    </a>
  </div>
</noscript>
<!-- KRAI NA TYXO.BG BROYACH -->

</body>
</html>

