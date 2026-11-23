<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Inter:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="STYLES/App_style.css">
</head>
<body>

<div class="auth-card">

  <div class="auth-brand">
    <div class="auth-brand-icon">
      <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
    </div>
    <span class="auth-brand-name">MyApp</span>
  </div>

  <h1 class="auth-heading">Welcome back</h1>
  <p class="auth-subheading">No account yet? <a href="signup.php">Sign up free</a></p>

  <form method="POST" class="auth-form">
    <div class="field">
      <label for="user">Username</label>
      <input type="text" id="user" name="user" placeholder="User_123" required>
    </div>
    <div class="field">
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required>
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your password" required>
    </div>


<?php
include "helper.php";

$result = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["user"])&& isset($_POST["email"])&& isset($_POST["password"])){
        $Nusername  = htmlspecialchars (data($_POST["user"]));
        $Nemail= htmlspecialchars(data($_POST["email"]));
        $Ndata  = htmlspecialchars(data($_POST["password"]));


        $myfile =  file_get_contents("info.txt");
        $Nfiles = json_decode($myfile, true);

        $infos = [ $Nusername, $Nemail, $Ndata];
        foreach($Nfiles as $Nfile){
            if($infos === $Nfile){
                $_SESSION["user"] = $infos;
                redirect("admin.php");
                break;
            // }else{
            //     echo "User not found <br />";
            }
        }
    }else{
    echo "form incomplete";
}

    echo $result === true ? "found " : "not found";

}


function data($input){
  return trim($input);
}


?>


    <input type="submit" name="btn" value="Sign In" class="btn-primary">
  </form>

</div>

</body>

</html>
