<?php
/**
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php
// Calculate half the amount of columns for medium
$columncount = count($rows[0]);
$columnhalf = bcdiv($columncount, 2, 0);
?>
<ul class="small-block-grid-<?php print $columnhalf; ?> medium-block-grid-<?php print $columnhalf + 1; ?> large-block-grid-<?php print $columncount; ?>">
<?php foreach ($rows as $row_number => $columns) { ?>
  <?php foreach ($columns as $column_number => $item) { ?>
    <li <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>>
      <?php print $item; ?>
    </li>
  <?php } ?>
<?php } ?>
</ul>