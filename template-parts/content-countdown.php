<?php
$page_id = get_the_ID();
$event_date = get_post_meta($page_id, 'date', true);

$now = new DateTime( null, new DateTimeZone('Europe/Paris'));
$deadline = DateTime::createFromFormat('d/m/Y H:i:s', $event_date, new DateTimeZone('Europe/Paris'));

// $deadline->setTimezone(new DateTimeZone('Europe/Paris'));

$interval = $deadline->diff($now);

$remainingDays =  $interval->format('%d');

if ($remainingDays < 0) {
  $countdown = "";
} elseif ($remainingDays < 1) {
  $countdown = $interval->format('%h heures et %i minutes');
} elseif ($remainingDays < 2) {
  $countdown = $interval->format('%d jour %h heures et %i minutes');
} else {
  $countdown = $interval->format('%d jours %h heures et %i minutes');
};

echo '<h2>'.$countdown.' avant la sortie</h2>';
