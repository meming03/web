<?php
session_start();
session_unset();
session_destroy();

header("Location: ../frontend/login.html");
echo "You have been logged out!";
exit();
?>