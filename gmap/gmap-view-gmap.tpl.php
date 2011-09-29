<?php
// $Id: gmap-view-gmap.tpl.php,v 1.1 2008/09/17 22:47:10 bdragon Exp $
/**
 * @file gmap-view-gmap.tpl.php
 * Default view template for a gmap.
 *
 * - $map contains a themed map object.
 * - $map_object contains an unthemed map object.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php print $map; ?>

<?php
// show a list view together with the map view
    $output = views_embed_view("taxonomy_map", $display_id = 'page_2');
    print $output;
?>
