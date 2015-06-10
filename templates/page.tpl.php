<?php // User Dashboard area ?>
<?php if ($is_admin) { ?>
<section id="user-dashboard">
  <?php print render($page['dashboard']); ?>
</section>
<?php } // endif isadmin ?>

<?php // Header ?>
<header id="header" role="banner">
  <?php // Main navigation ?>
  <div id="main-navigation" class="contain-to-grid "> <?php // hide-for-large-up ?>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <?php if ($site_name) { ?>
        <li class="name show-for-small-up">
           <h1 class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
        </li>
        <?php } ?>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">

        </ul>

        <!-- Left Nav Section -->
      
        <?php print render($main_menu_expanded); ?>

      </section>
    </nav>
  </div><!-- .contain-to-grid -->
</header><!-- #pageHeader -->
<?php // end Header ?>

<?php // Breadcrumb ?>
<?php if (!$is_front) { ?>
<div class="row">
  <div class="columns small-12"><?php print $breadcrumb ?></div>
</div>
<?php } ?>

<?php if ($messages) { ?>
<section id="messages">
  <div class="small-12 columns">
    <?php print ($messages); ?>
  </div>
</section><!-- #messages -->
<?php } // endif; ?>

<section id="content" data-equalizer data-equalizer-mq="medium-only">
  
  <section role="main" id="pageContent" class="pageContent" data-equalizer-watch><?php // columns large-7 large-push-2 ?>
    <?php if (($title) && (!$is_front)) { ?>
    <?php print render($title_prefix); ?>
    <h1 class="page-title"><?php print $title ?></h1>
    <?php print render($title_suffix); ?>
    <?php } ?>

    <?php if ($page['help']) { ?>
    <div id="help">
      <?php print render($page['help']); ?>
    </div><!-- #help -->
    <?php } //endif; help ?>

    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php if ($tabs['#primary']): ?><nav id="tabnav" class="clearfix"><?php print render($tabs); ?></nav><?php endif; ?>

    <?php print render($page['content']); ?>

    <?php if ($page['content_last']) { ?>
      <?php print render($page['content_last']); ?>
    <?php } ?>

  </section>

  <?php if ($page['sidebar_first'] || $page['sidebar_second']) { ?>
  <aside id="sidebars">
    <?php if ($page['sidebar_first']) { ?>
    <section id="sidebar-first" class="sidebar-first" data-equalizer-watch><?php // columns large-2 large-pull-7 ?>
      <?php print render($page['sidebar_first']); ?>
    </section><!-- #sidebar-second -->
    <?php } ?>

    <?php if ($page['sidebar_second']) { //|| $page['CTA']) { ?>
    <section id="sidebar-second" class="sidebar-second" data-equalizer-watch><?php // columns large-3 ?>
      <?php print render($page['sidebar_second']); ?>
    </section><!-- #sidebar-second -->
    <?php } ?>
  </aside><!-- #sidebars -->
  <?php } // endif sidebar l or sidebar r ?>

</section><!-- #content -->

<?php // Polyptych ?>
<?php if (($page['polyptych_first']) || ($page['polyptych_01']) || ($page['polyptych_02']) || ($page['polyptych_last'])) { ?>
<section id="polyptych">
  <div class="row">
    <div id="polyptych-first" class="small-12 medium-6 large-3 column">
      <?php if ($page['polyptych_first']) { print render($page['polyptych_first']); } else { print '&nbsp;';} ?>
    </div>
    <div id="polyptych-01" class="small-12 medium-6 large-3 column">
      <?php if ($page['polyptych_01']) { print render($page['polyptych_01']); } else { print '&nbsp;';} ?>
    </div>
    <div id="polyptych-02" class="small-12 medium-6 large-3 column">
      <?php if ($page['polyptych_02']) { print render($page['polyptych_02']); } else { print '&nbsp;';} ?>
    </div>
    <div id="polyptych-last" class="small-12 medium-6 large-3 column">
      <?php if ($page['polyptych_last']) { print render($page['polyptych_last']); } else { print '&nbsp;';} ?>
    </div>
  </div>
</section><!-- #polyptych -->
<?php } ?>
<?php // end Polyptych ?>

<?php // Footer ?>
<section id="footer" role="pagefooter">

  <?php if ($page['footer_message'] || $page['colophon']) { ?>
  <div id="copyright">
    <footer id="footer-message">
      <?php $page['footer_message'] ? print render($page['footer_message']) : print '&nbsp;'; ?>
    </footer>
    <footer id="colophon">
      <?php $page['colophon'] ? print render($page['colophon']) : print '&nbsp;'; ?>
    </footer><!-- colophon -->
  </div><!-- row -->
  <?php } // endif colophon or footer message ?>

</section>
<?php // end Footer ?>