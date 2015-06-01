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

<section id="content" data-equalizer data-equalizer-mq="medium-up">
  
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

<?php // Footer ?>
<section id="pagefooter">

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