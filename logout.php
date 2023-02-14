<?php
/**
 * Created by GPW Team
 */

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
session_abort();
header('Location:login.php');

?>