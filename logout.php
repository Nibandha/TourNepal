<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="new.php">Go back</a>';
?>