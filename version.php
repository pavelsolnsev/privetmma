<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'mma';
$type          = 'mma';
$unit          = 'synergy';
$date          = '';
$quote_id      = '';
$speaker       = '';
$program       = '';
$gtm           = 'NSK7D8P';
$title         = '';
$desc          = '';
$link          = '';


$action = implode(array(

    $lander,

    '&land='     ,  $land,
    '&unit='     ,  $unit,
    '&type='     ,  $type,
    '&version='  ,  $version,
    '&partner='  ,  $partner,
    '&speaker='  ,  $speaker,
    '&program='  ,  $program,
    '&link=', urlencode($link),
    '&quote_id=' ,  $quote_id,
    '&ignore-thanksall=true'

));

