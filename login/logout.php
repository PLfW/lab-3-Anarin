<?php
{
header("Location: index.php");// Redirecting To Home Page
}
session_start();
if(session_destroy())// Destroying All Sessions
?>