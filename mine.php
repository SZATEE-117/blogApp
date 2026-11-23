<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>SIGN-UP</h1>
<form method="POST" style="display :flex; flex-direction:column; gap : 10px; ">
<label for="user">Username :<input type="text" name="user" placeholder="User_123"></label><br/>

<label for="email">Email :<input type="email" name="email" placeholder="User123@gmail.com"></label><br/>

<label for="password">Password :<input type="password" name="password"></label><br/>

<label for="Cpasswoord">Confirm password :<input type="password" name="Cpassword"></label><br/>

<!-- <label for="agree">agree to terms and condition <input type="checkbox" name="agree"></label><br/> -->

<label for="btn"><input type="submit" name="btn"></label>

</form>



<?php
/*
if all set
php check the email and others format

*/

// function redirect(string $url, int $statusCode = 302): void 
// {
//     header('Location: ' . $url, true, $statusCode);
//     exit;
// }

// // echo __DIR__.'/calculator.php';
// $file_path = explode("\\", __DIR__);
// unset($file_path[7]);
// $new_file_path = implode("/", $file_path)."/calculator.php";
// echo $new_file_path;





if($_SERVER["REQUEST_METHOD"] === "POST"){
    // redirect("/myproject/calculator.php"); 
if(isset($_POST))
$user = htmlspecialchars(trim($_POST["user"]));

$email = htmlspecialchars($_POST["email"]);

$password = htmlspecialchars($_POST["password"]);

$Cpassword = htmlspecialchars($_POST["Cpassword"]);

#$agree = htmlspecialchars($_POST["agree"]);

echo confirm($user)."<br>";
echo confirm($email)."<br>";
echo confirm($password)."<br>";
}

function confirm ($user , $email , $password){
ans
if(!preg_match("/^[a-zA-Z0-9_-]{3,16}$/", $user )){
  "invalid user";
}

#password
if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $email )){
"invalid password";
}

#email
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ ", $password )){
     "invalid email";
}
}
?>


</body>


</html>