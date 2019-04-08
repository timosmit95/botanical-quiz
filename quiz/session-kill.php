<?php
session_start();
if(session_destroy()) // Sessie kapot maken
{
header('location: walkthrough.php'); // Naar homepage met loguit bericht
}
?>