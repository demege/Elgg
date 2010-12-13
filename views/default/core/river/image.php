<?php
/**
 * Elgg river image
 *
 * Displayed next to the body of each river item
 *
 * @uses $vars['item']
 */

$subject = $vars['item']->getSubjectEntity();

echo elgg_view("profile/icon", array('entity' => $subject, 'size' => 'small'));
