<?php
$page_id = get_the_ID();
$event_date = get_post_meta($page_id, 'date', true);

$now = new DateTime( null, new DateTimeZone('Europe/Paris'));
$deadline = DateTime::createFromFormat('d/m/Y H:i:s', $event_date, new DateTimeZone('Europe/Paris'));

// $deadline->setTimezone(new DateTimeZone('Europe/Paris'));

$interval = $deadline->diff($now);

$remainingDays =  $interval->format('%d');

$days    = $interval->format('%d');
$hours   = $interval->format('%H');
$minutes = $interval->format('%i');
$seconds = $interval->format('%s');

$display_days    = ($days<2)     ? "Day"   : "Days";
$display_hours   = ($hours<2)    ? "Hour"  : "Hours";
$display_minutes = ($minutes<2)  ? "Minute": "Minutes";
$display_seconds = ($seconds<2)  ? "Second": "Seconds";
?>

<div class="countdown-container">
  <?php if ($days > 0): ?>
  <div class="item">
    <p><?= $days ?></p>
    <p><?= $display_days ?></p>
  </div>
  <?php endif ?>
  <?php if ($hours > 0): ?>
  <div class="item">
    <p><?= $hours ?></p>
    <p><?= $display_hours ?></p>
  </div>
  <?php endif ?>
  <?php if ($minutes > 0): ?>
  <div class="item">
    <p><?= $minutes ?></p>
    <p><?= $display_minutes ?></p>
  </div>
  <?php endif ?>
  <?php if ($seconds > 0): ?>
  <div class="item">
    <p><?= $seconds ?></p>
    <p><?= $display_seconds ?></p>
  </div>
  <?php endif ?>
</div>







<?php
// if ($remainingDays < 0) {
//   $countdown = "";
// } elseif ($remainingDays < 1) {
//   $countdown = $interval->format('%h heures et %i minutes');
// } elseif ($remainingDays < 2) {
//   $countdown = $interval->format('%d jour %h heures et %i minutes');
// } else {
//   $countdown = $interval->format('%d jours %h heures et %i minutes');
// };
//
// echo '<h2>'.$countdown.' avant la sortie</h2>';
