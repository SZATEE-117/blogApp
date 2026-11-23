<?php
// Start the session
session_start();

function redirect($page){
  header("Location: /FirstAPP/".$page);
}

function logout($page){
    // Unset all session variables
session_unset();

// Destroy the session
session_destroy();
  header("Location: /FirstAPP/".$page);
}