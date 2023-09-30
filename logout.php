<?php
session_start();



// start logout==============

$_SESSION = [];
session_unset();
session_destroy();

header("location: login.php");

exit;

// end logout===============
