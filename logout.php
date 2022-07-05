<?php 
session_start();

session_unset();
session_destroy();

header("Location: Jobber_Homepage.php");