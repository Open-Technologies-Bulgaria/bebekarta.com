<?php
// $Id: node.tpl.php,v 1.3 2008/12/25 13:33:29 troy Exp $
?>
  <div class="node<?php if ($sticky&&$page == 0) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>

    <?php if ($node->type != 'page') { ?>
        <h2 class="title">
           <?php
               if (($node->type == 'podariava') || ($node->type == 'prodava')) {
                   printf("<img src='/sites/all/themes/bebekarta/images/%s.png' alt='' />&nbsp;", $node->type);
                   printf("<img src='/sites/all/themes/bebekarta/images/vip_%d.png' alt='ВИП' />", $node->field_vip[0][value]);
               }
           ?>
           <a href="<?php print $node_url?>"><?php print $title?></a>
        </h2><br />
    <?php }; ?>

    <div class="content clear-block"><?php print $content?></div>

    <?php if ($links) { ?>
        <div class="taxonomy">
            <?php print t('categories:').$terms ?>
        </div>
    <?php }; ?>

    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
