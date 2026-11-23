<?php 
$myBlogs = file_get_contents("blog.txt");
$myBlogArray = json_decode($myBlogs,true);
$blogToDelete = $myBlogArray[$index];

if($_SERVER["REQUEST_METHOD"] == "POST"){
  unset($myBlogArray[$index]);
  $myBlogArray = json_encode($myBlogArray);
  file_put_contents("blog.txt", $myBlogArray);
  header("Location: /FirstAPP/admin.php?page=bookings");
  exit;
  }


?>

<link rel="stylesheet" href="STYLES/others.css">
 
 <!-- ══════════ SETTINGS PAGE ══════════ -->
<div class="page active" id="page-settings">

      <!-- Account settings -->
<!-- <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data"> -->
<form method="post" action="<?php $_SERVER["REQUEST_URI"] ?>">
  <div class="panel">
    <div class="panel-head"><span class="panel-title">Are you sure you want to delete this blog?</span></div>

      <div class="form-grid">
           <div class="field fd1">
            <label for="settName"> Blog Title </label>
            <input type="text" id="settName" value="<?=$blogToDelete[0]?>" placeholder="Your blog title..." name="title">
           </div>

           <div class="field fd2">
            <label for="settName"> Category </label>
            <!-- <select name="category">
              <option> Sports </option>
              <option> Life</option>
              <option> Business</option>
            </select> -->
            <input type="text" id="settName" value="<?=$blogToDelete[1]?>" placeholder="Your blog title..." name="title">
           </div>

           <div class="field textarea fd3">
            <textarea placeholder="description..." name="description">
              <?=$blogToDelete[2]?>
            </textarea>
           </div>


      </div>


      
           <flex-box>

          <div style="margin-top:18px;">
            <img src="<?=$blogToDelete[3]?>" width="200px" />
          </div>


          <div style="margin-top:18px;">
          <a href="admin.php?page=bookings" class="btn btn-accent" style="background-color: green; text-decoration:none">👈Back</a>
          </div>

          
          <div style="margin-top:18px;">
          <button class="btn btn-accent" style="background-color: red">Delete</button>
          </div>
          </flex-box>

  </div>
</form>

</div><!-- /settings -->