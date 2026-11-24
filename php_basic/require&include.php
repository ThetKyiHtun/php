<?php
echo "This is a test file for require and include.<br>";

//require 'mainfile1.php'; 
include 'mainfile1.php'; //does not exist, will produce a warning and continue the script
echo "This is the end of the test file.<br>";

?>