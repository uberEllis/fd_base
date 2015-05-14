<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?> class="blocktitle"><?php print $block->subject ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content block-content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
  <?php // AE: This is ridiculous, but can be added back if designers or something, insist ?>
  <?php // <p class="block-shadow">&nbsp;</p> ?>
</section> <!-- /.block -->