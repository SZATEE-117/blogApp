<?php
// Start the session
session_start();

session_unset();

// Destroy the session
session_destroy();
header("Location: /FirstAPP/signin.php");
