<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js <?php print $classes; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php // End the copy html.tpl.php?>

<header>
  <div class="row">
    <div class="small-12 large-12 column">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 id="site-slogan" class="subheader"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>
    </div>
  </div>
</header>
<?php // end Header ?>

<?php // Main Content Area ?>
<div id="content">
  <div class="row">
    <?php // Main page content ?>
    <div id="pageContent" class="large-12 columns">

      <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php if (!empty($messages)): print $messages; endif; ?>
      <div id="content-content" class="clearfix">
        <?php print $content; ?>
      </div> <!-- /content-content -->

  </div><!-- row -->
</div><!-- #content -->
<?php // end Main Content Area ?>

<?php // Footer ?>
<footer>
  <div class="row show-for-medium-up">
    <div id="menublocks" class="small-12 large-12 column">
      <?php print render($page['uxmenu']); ?>
    </div>
  </div><!-- row -->
  <div class="row">
    <div id="footermessage" class="large-8 column">
      <?php print render($page['footer_message']); ?>
    </div>
    <div id="colophon" class="large-4 column">
      <?php print render($page['colophon']); ?>
    </div><!-- colophon -->
  
  </div><!-- row: Collapse -->
</footer>
<?php // end Footer ?>

</body>
</html>
