<?php
//leap year start from 4 to 2024
// start from year 4
$year = 4;

// loop through years until 2024
while ($year <= 2024) {
  // check if the year is a leap year
  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year . " " . "<br>";
  }
  $year++;
}
?>
