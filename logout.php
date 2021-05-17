<?php
session_start();
session_destroy();
header("Location:index.php?ref=Logged Out.<br> Please Login Again");
exit();

?>