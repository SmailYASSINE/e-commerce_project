<?php
session_start();
session_destroy();
header('location:authen.php');