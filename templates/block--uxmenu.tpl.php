<section class="row">
  <div class="medium-2 columns">
    <?php if ($block->subject) { ?>
      <h6<?php print $title_attributes; ?> class="blocktitle"><?php print $block->subject ?></h6>
    <?php } ?>
  </div>
  <div class="medium-10 columns content">
    <?php print $content; ?>
  </div>
</section>