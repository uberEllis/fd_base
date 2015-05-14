<?php // User dashboard ?>
<?php if ($page['dashboard']) { ?>
<section id="dashboard">
  <div class="row">
    <div class="columns small-12 end">
      <?php print render($page['dashboard']); ?>
    </div><!-- .columns -->
  </div><!-- .row -->
</section><!-- #dashboard -->
<?php } ?>

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



<?php // Mission ?>
<?php if (($is_front) && ($page['mission'])) { ?>
<div id="mission">
  <div class="row">
    <div class="small-12 column">
      <?php print render($title_prefix); ?>
      <h1 class="page-title"><?php print $title ?></h1>
      <?php print render($title_suffix); ?>
      
      <?php print render($page['mission']); ?>
      <div id="CTA">
        <?php print render($page['CTA']); ?>
      </div>
    </div>
  </div>
</div><!-- mission -->
<?php } ?>

<? // Triptych ?>
<?php if (($page['triptych_first']) || ($page['triptych_middle']) || ($page['triptych_last'])) { ?>
<div id="triptych">
  <div class="row">
    <div id="triptych-first" class="medium-4 columns">
      <?php if ($page['triptych_first']) { print render($page['triptych_first']); } else { print '&nbsp;';} ?>
    </div>
    <div id="triptych-middle" class="medium-4 columns">
      <?php if ($page['triptych_middle']) { print render($page['triptych_middle']); } else { print '&nbsp;';} ?>
    </div>
    <div id="triptych-last" class="medium-4 columns">
      <?php if ($page['triptych_last']) { print render($page['triptych_last']); } else { print '&nbsp;';} ?>
    </div>
  </div><!-- row -->
</div><!-- #triptych -->
<?php } ?>

<?php // Breadcrumb ?>
<?php if (!$is_front) { ?>
<div class="row">
  <div class="columns small-12"><?php print $breadcrumb ?></div>
</div>
<?php } ?>

<?php if (isset($section_title)) { ?>
<div class="row">
  <div class="small-12 columns">
    <div id="contextheading">
      <h1 class="sectiontitle"><?php print render($section_title); ?></h1>
      <?php // Context allows for section titles and section subtitles ?>
      <?php // I'll use that functionality to render a sub-title for the user registration page ?>
      <?php if (isset($section_subtitle)) { ?>
      <h2 class="sectionsubtitle"><?php print render($section_subtitle); ?></h2>
      <?php } ?>
    </div><!-- #contextheading -->
  </div>
</div>
<?php } ?>


<?php // Main Content Area ?>
<section id="content">

  <?php if ($messages) { ?>
  <div class="row"><div id="messages" class="small-12 columns"><?php print ($messages); ?></div></div><!-- messages -->
  <?php } // endif; ?>
  
  <div class="row">
    <?php // Sidebar-first ?>
    <?php if ($page['sidebar_first']) { ?>
    <div id="sidebar-first" class="large-4 columns">
      <?php print render($page['sidebar_first']); ?>
    </div><!-- #sidebar-first -->
    <?php } // endif sidebar-first ?>


    <?php // Main page content ?>
    <section id="pageContent" class="columns medium-9">

      <?php if ($page['highlighted']) { ?>
      <div id="highlighted">
        <?php print render($page['highlighted']); ?>
      </div>
      <?php } //endif; highlighted ?>

      <?php if (($title) && (!$is_front)) { ?>
      <?php print render($title_prefix); ?>
      <h1 class="page-title"><?php print $title ?></h1>
      <?php print render($title_suffix); ?>
      <?php } ?>

      <?php /* Find out if printing a full node by a user and print a different size of the userpic than node teaser */ ?>

      <?php if ($page['help']) { ?>
      <div id="help">
        <?php print render($page['help']); ?>
      </div><!-- #help -->
      <?php } //endif; help ?>

      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php if ($tabs['#primary']): ?><nav id="tabnav" class="clearfix"><?php print render($tabs); ?></nav><?php endif; ?>

      <div class="pagecontent-wrapper">
        <div class="pageContent"><?php print render($page['content']); ?>
      </div><!-- .pagecontent-wrapper -->
      
      <?php if ($page['content_last']) { ?>
        <div class="postContent">
          <?php print render($page['content_last']); ?>
        </div>
      <?php } // endif content last ?>

    </section><!-- #pageContent -->


    <?php // Sidebar-second ?>
    <?php if ($page['sidebar_second']) { //|| $page['CTA']) { ?>
    <div id="sidebar-second" class="medium-3 columns">
      <?php if (!$is_front) { ?>
      <div id="CTA">
        <?php print render($page['CTA']); ?>
      </div>
      <?php }  ?>
      <?php print render($page['sidebar_second']); ?>
    </div><!-- #sidebar-first -->
    <?php } ?>

  </div><!-- row -->
  
</div><!-- #content -->
<?php // end Main Content Area ?>

<?php // FooterNav ?>
<nav id="footernav" class="show-for-medium-up">
  <div class="row">
    <div class="columns large-12">
      <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('inline-list', 'footernav', 'main-menu')),)); ?>
    </div>
  </div>
</nav>

<?php // Footer ?>
<footer id="pagefooter">
  <?php // Polyptych ?>
  <?php if (($page['polyptych_first']) || ($page['polyptych_01']) || ($page['polyptych_02']) || ($page['polyptych_last'])) { ?>
  <div class="row show-for-medium-up">
    <section id="polyptych">
      <div id="polyptych-first" class="medium-6 large-3 column">
        <?php if ($page['polyptych_first']) { print render($page['polyptych_first']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-01" class="medium-6 large-3 column">
        <?php if ($page['polyptych_01']) { print render($page['polyptych_01']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-02" class="medium-6 large-3 column">
        <?php if ($page['polyptych_02']) { print render($page['polyptych_02']); } else { print '&nbsp;';} ?>
      </div>
      <div id="polyptych-last" class="medium-6 large-3 column">
        <?php if ($page['polyptych_last']) { print render($page['polyptych_last']); } else { print '&nbsp;';} ?>
      </div>
    
    </section>
  </div>
  <?php } ?>
  <?php // end Polyptych ?>

  <?php // UX Menu ?>
  <?php if ($page['uxmenu']) { ?>
  <div class="row show-for-medium-up">
    <div class="small-12 columns">
      <div id="uxmenu">
        <?php print render($page['uxmenu']); ?>
      </div>
    </div>
  </div><!-- row -->
  <?php // end UX Menu ?>
  <?php } ?>

  <?php if ($page['footer_message'] || $page['colophon']) { ?>
  <div class="row">
    <div id="footermessage" class="small-12 medium-9 large-8 columns">
      <?php print render($page['footer_message']); ?>
    </div>
    <div id="colophon" class="small-12 medium-3 large-4 columns">
      <?php print render($page['colophon']); ?>
    </div><!-- colophon -->
  </div><!-- row -->
  <?php } // endif colophon or footer message ?>

</footer>
<?php // end Footer ?>