<?php
include('process_login.php');
session_destroy();
header("refresh:0;url=index.php");
?>