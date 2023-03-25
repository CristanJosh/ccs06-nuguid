<?php
// get command line arguments
$name = $argv[1];
$birth_year = $argv[2];

// calculate age
$current_year = date("Y");
$age = $current_year - $birth_year;

// display output
echo "Your name is " . $name . ", and your age is " . $age . " years old\n";

// check if person is eligible to vote
if ($age >= 18) {
  echo "You are eligible to vote\n";
} else {
  echo "You are not eligible to vote\n";
}

// check if person is a senior citizen
if ($age >= 60) {
  echo "You are a senior citizen\n";
} else {
  echo "You are not a senior citizen\n";
}
?>
