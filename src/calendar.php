<?php

require_once('../vendor/autoload.php');

$VCalendar = new Davaxi\VCalendar();
$VCalendar->setProcess('MuurDEV', 'Deadlines', 'v1.0', 'NL');
$VCalendar->setMethod('PUBLISH');
$VCalendar->setCalendarName('Deadlines - MuurDEV');
$VCalendar->setTimeZone('Europe/Amsterdam');
$VCalendar->setStartDateTime('2018-06-10 10:00:00');
$VCalendar->setEndDateTime('2018-06-10 14:00:00');
$VCalendar->setStatus('CONFIRMED');
$VCalendar->setTitle('Rekenen Toets');
$VCalendar->setDescription('Dood gaan dus');
$VCalendar->setCreatedDateTime('2018-04-06 00:00:00');
$VCalendar->setUrl('https://elo.glu.nl/');
$VCalendar->setSequence(4);
$VCalendar->setUID('event_1');
$VCalendar->stream();
exit();
