<?php 
$page = !isset($_GET["page"]) ? header("Location: /FirstAPP/admin.php?page=dashboard") : $_GET["page"];
// var_dump($_REQUEST);
if(str_contains($page, "/")){
  $pageArray = explode("/", $page);
  $page = $pageArray[0];
  $index = $pageArray[1];
}

ob_start();
include "template.php";

switch($page){
  
  case "dashboard":
    include "dashboard.php";
    break;
  case "bookings":
    include "bookings.php";
    break;
  case "create_blog":
    include "pages/create_blog.php";
    break;
  case "delete_blog":
    include "pages/delete_blog.php";
    break;
  case "edit_blog":
    include "pages/edit_blog.php";
    break;
  case "cabins":
    include "cabins.php";
    break;
  case "users":
    include "user.php";
    break;
  case "settings":
    include "settings.php";
    break;
  default:
    include "dashboard.php";
}
include "template-footer.php";
