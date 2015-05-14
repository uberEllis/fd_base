<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php // blocks in this region does not render a title ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</section> <!-- /.block -->