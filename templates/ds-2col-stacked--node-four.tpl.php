<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-stacked <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
<div class="container">
  <div class="row">
    <h2 class="text-center"><?php print drupal_get_title() ?></h2><br>
  </div>
  <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
    <?php print $header; ?>
  </<?php print $header_wrapper ?>>
  <div class="row">
  <<?php print $right_wrapper ?> class="group-right centered col-md-8<?php print $right_classes; ?>">
      <div class="product-node">
        <?php print $left; ?>
        <?php print $right; ?>
      </div>
  </<?php print $right_wrapper ?>>
  </div>
  <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
    <div class="pull-right">
      <?php print $footer; ?>
    </div>
  </<?php print $footer_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>