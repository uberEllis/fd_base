<?php
/**
 * @file freepager.tpl.php
 * Default view template to display Free pager blocks.
 *
 * Available variables:
 *
 * $previous
 *   The rendered field used for the row before the viewed one. May be empty.
 * $previous_linked
 *   The 'previous' field, linking to the previous page.
 * $current
 *   The rendered field used for the currently viewed row.
 * $current_linked
 *   The 'current' field, linking to the current page. Not highly useful.
 * $next
 *   The rendered field used for the row after the viewed one. May be empty.
 * $next_linked
 *   The 'next' field, linking to the next page.
 * $row_number
 *   The number of the viewed row.
 * $total_rows
 *   The total number of rows in the list from Views.
 *
 * @ingroup views_templates
 */
?>
<div class="row">
  <?php if (!empty($previous)) { ?>
  <div class="colums medium-3 left">
    <span class="freepager-previous">
      <?php print $previous_linked; ?>
    </span>
  </div><!-- .previous-pager -->
  <?php } ?>

  <?php if (!empty($next)) { ?>
  <div class="columns medium-3 right medium-text-right">
    <span class="freepager-next">
      <?php print $next_linked; ?>
    </span>
  </div><!-- .next-pager -->
  <?php } ?>
  
  <?php if (!empty($current)) { ?>
  <div class="columns medium-6 small-text-center">
    <div class="freepager-current">
      <?php print $current; ?>
    </div><!-- .freepager-current -->
  </div>
  <?php } ?>
  
</div><!-- .row -->
