<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
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

  <h1 class="auth-heading">Create your account</h1>
  <p class="auth-subheading">Already have one? <a href="signin.php">Sign in</a></p>

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
      <input type="password" id="password" name="password" placeholder="Min. 8 characters" required>
    </div>
    <div class="field">
      <label for="Cpassword">Confirm password</label>
      <input type="password" id="Cpassword" name="Cpassword" placeholder="Repeat password" required>
    </div>
  <input type="submit" name="btn" value="Create Account" class="btn-primary">
  </form>




<?php
include "helper.php";
// Define the validation function first
function confirm($user, $email, $password, $Cpassword) {
    $errors = [];

    // 1. Validate Username
    if (!preg_match("/^[a-zA-Z0-9_-]{3,16}$/", $user)) {
        $errors[] = "Invalid username. Must be 3-16 characters (letters, numbers, _, -).";
    }


    // 2. Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // 3. Validate Password Strength
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters long, containing 1 uppercase letter, 1 lowercase letter, and 1 number.";
    }

    // 4. Check if passwords match
    if ($password !== $Cpassword) {
        $errors[] = "Passwords do not match.";
    }

    return $errors; // Returns an array of error messages
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Fallback to empty string if a field is missing to avoid PHP notices
    $user = isset($_POST["user"]) ? trim($_POST["user"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $Cpassword = isset($_POST["Cpassword"]) ? $_POST["Cpassword"] : "";

    // Run the confirmation check
    $validationErrors = confirm($user, $email, $password, $Cpassword);

    if (empty($validationErrors)) {
        // Data is valid! Clean it up for display to prevent XSS attacks
        $safe_user = htmlspecialchars($user, ENT_QUOTES, 'UTF-8');
        $safe_email = htmlspecialchars($email , ENT_QUOTES, 'UTF-8');
        $safe_password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
        echo "<p style='color: green;'>Registration successful! Welcome, " . $safe_user . ".</p>";

        $safes=[$user, $email, $password ];

        $myfile =  file_get_contents("info.txt") ;

        $Nfiles = json_decode($myfile);

        $userCount = count($Nfiles);
        if(!$userCount){
          $Nfiles = $Nfiles[0] = $safes;
        }
        $Nfiles[$userCount] = $safes;

        $safes_stringify = json_encode($Nfiles);

        file_put_contents("info.txt", $safes_stringify);


        //LATER: get the database text file content, convert it to array and check if the email or username already exist 
        // 1. create text file as variable and check if the file already exist
        // 2. if the does not exist create a new file and store data in string format, else append credentials in string format

        // You can put your redirect link here if needed:
      redirect("signin.php"); 
        exit();

    
    } else {
        // Output all errors cleanly
        echo "<div style='color: red; margin-top: 15px;'>";
        foreach ($validationErrors as $error) {
            echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "<br>";
        }
        echo "</div>";
    }
}



?>
<!-- ||

        $safes=[$user, $email, $password ];
        $myfile =  file_get_contents("info.txt") && [] ;
        $Nfiles = json_decode($myfile);
        $Nfiles_push = ($safes);
        $safes_stringify = json_encode($Nfiles);

        

        file_put_contents("info.txt", $safes_stringify);
        condition ?:false;



        $safes=[$user, $email, $password ];

        $myfile =  file_get_contents("info.txt") ?? [] ;

        $Nfiles = json_decode($myfile);

        $Nfiles[] = $safes;

        $safes_stringify = json_encode($Nfiles);

        file_put_contents("info.txt", $safes_stringify); -->


</body>

</html>
