<?php
{
session_start();
if(session_destroy()) // Destroying Sessions {
header("Location: home.php"); // Redirecting To Home Page
}
?>