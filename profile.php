<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<h1>Enter Data</h1>
<form method="POST" action="profile.php">
Name: <input type="text" name="complete_name" /><br><br />
Birthdate: <input type="date" name="birthdate" /><br><br />
Email Address: <input type="email" name="email" /><br><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BMMA">B.A. Multimedia Arts</option>
</select>
<br><br />
Favorite Color: <input type="color" name="favorite_color" /><br><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br><br />
<button>Submit</button>
</form>

<?php
endif;
?>
