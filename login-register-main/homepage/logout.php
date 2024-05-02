<?php
session_start();
session_destroy();
header("Location: ../loginAndRegistration/home.php");
?>