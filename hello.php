<?php
//File name: hello.php

function greet() {
     $message = "Hello";
     $message .= " World!\r\n";
     $message .= " The date today is";
    

    return $message;
}
echo greet();
echo date(" l jS \of F Y h:i:s A");
?>

