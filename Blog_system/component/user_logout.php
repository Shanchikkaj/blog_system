<?php

include 'database.php';

session_start();
session_unset();
session_destroy();

header('location: ../main/home.php');

?>