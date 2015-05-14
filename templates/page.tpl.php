<section id="content" data-equalizer data-equalizer-mq="large-up">
  
  <section role="main" id="pageContent" class="" data-equalizer-watch><?php // columns large-7 large-push-2 ?>
    <h1 class="page-title">Main content</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>

  <aside id="sidebars">
    <?php if ($page['sidebar_first']) { ?>
    <section id="sidebar-first" class="" data-equalizer-watch><?php // columns large-2 large-pull-7 ?>
      <h2>Left sidebar title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section><!-- #sidebar-second -->
    <?php } ?>

    <?php if ($page['sidebar_second']) { //|| $page['CTA']) { ?>
    <section id="sidebar-second" class="" data-equalizer-watch><?php // columns large-3 ?>
      <h2>Right sidebar title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section><!-- #sidebar-second -->
    <?php } ?>
  </aside><!-- #sidebars -->
</section>
  
<?php // Footer ?>
<section id="pagefooter">
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

</section>
<?php // end Footer ?>