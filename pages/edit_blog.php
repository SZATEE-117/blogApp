<?php 

$myBlogs = file_get_contents("blog.txt");
$myBlogArray = json_decode($myBlogs, true);
$blogToEdit = $myBlogArray[$index];
// var_dump($index);
// var_dump($blogToEdit[0]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["title"], $_POST["category"], $_POST["description"])){
          $title = htmlspecialchars(trim($_POST["title"]));
          $category = htmlspecialchars(trim($_POST["category"]));
          $description = htmlspecialchars(trim($_POST["description"]));
      }


    $myBlogs = file_get_contents("blog.txt");
    $myBlogArray = json_decode($myBlogs);
    $blogToEdit = $myBlogArray[$index];

    // echo "<pre>";
    // echo $title;
    // echo $category;
    // echo $description;
    // var_dump($blogToEdit);
    // var_dump(empty($_FILES['file']));
    // var_dump(!isset($_FILES['file']));
    // die;

    if(empty($_FILES['file'])){
      $blogToEdit [0] =  $title;
      $blogToEdit [1] =  $category;
      $blogToEdit [2] =  $description;
    }else{
        $fileName = $_FILES["file"]["name"];
        $fileType = $_FILES["file"]["type"];
        $fileTempName = $_FILES["file"]["tmp_name"];
        $fileSize = $_FILES["file"]["size"];


        $neededFormat = ["png", "jpg", "jpeg", "webp", "gif"];
        $ext = explode(".", $fileName);
        $extLowerCase = strtolower(end($ext));

        if(in_array($extLowerCase, $neededFormat) && $fileSize <= (1024 * 1024 *2)){
          $folderName = "upload/";
          $imagePath = $folderName.md5(time().$folderName).$fileName;
          move_uploaded_file($fileTempName, $imagePath);
        }

      $blogToEdit [0] =  $title;
      $blogToEdit [1] =  $category;
      $blogToEdit [2] =  $description;
      $blogToEdit[3] = $imagePath;
    }

      $myBlogArray[$index] = $blogToEdit;
      $NmyBlogArray = json_encode($myBlogArray);
      file_put_contents("blog.txt", $NmyBlogArray);
      header("Location: /FirstAPP/admin.php?page=bookings");
      exit;
      
}
//  if(isset($_FILES["file"])){
//     $fileName = $_FILES["file"]["name"];
//     $fileType = $_FILES["file"]["type"];
//     $fileTempName = $_FILES["file"]["tmp_name"];
//     $fileSize = $_FILES["file"]["size"];


//     $neededFormat = ["png", "jpg", "jpeg", "webp", "gif"];
//     $ext = explode(".", $fileName);
//     $extLowerCase = strtolower(end($ext));


    //   $folderName = "upload/";
    //   $imagePath = $folderName.md5(time().$folderName).$fileName;
     
    //   if(!file_exists($folderName)){
    //     mkdir($folderName);
    //   }else{
    //     move_uploaded_file($fileTempName, $imagePath);
    //   }
    // }





// if(in_array($extLowerCase, $neededFormat) && $fileSize <= (1024 * 1024 *2)){
// $blogToEdit[3]=
// }


/*this is what i want to know, whats the logic behind saving it back*/ $myBlogArray [$index] = $blogToEdit;

//  file_put_contents("blog.txt", $blogToEdit) ;  

//  $blog=[$title, $category,  $description];
//     $myfile =  file_get_contents("blog.txt") ;
//     $Nfiles = json_decode($myfile[$index]);
//     $Nfiles = array_push
//     $Nfiles[$blogCount] = $blog;
//     $blog_stringify = json_encode($Nfiles);
//     file_put_contents("blog.txt", $blog_stringify);


  // }

?>
  <link rel="stylesheet" href="STYLES/others.css">

 <!-- ══════════ SETTINGS PAGE ══════════ -->
<div class="page active" id="page-settings">

      <!-- Account settings -->


<!-- <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data"> -->
<form method="post" action="<?php $_SERVER["REQUEST_URI"] ?>" enctype="multipart/form-data">
  <div class="panel">
    <div class="panel-head"><span class="panel-title"> Edit this blog?</span></div>

      <div class="form-grid">
           <div class="field fd1">
            <label for="settName"> Blog Title </label>
            <input type="text" id="settName" value="<?=$blogToEdit[0]?>" placeholder="Your blog title..." name="title">
           </div>

           <div class="field fd2">
            <label for="settName"> Category </label>

            <select name="category">
              <option> Sports </option>
              <option> Life</option>
              <option> Business</option>
            </select>

           <div class="field textarea fd3">
            <textarea placeholder="description..." name="description">
              <?=$blogToEdit[2]?>
            </textarea>
           </div>


      </div>


      
           <flex-box>

          <div style="margin-top:18px;">
            <img src="<?=$blogToEdit[3]?>" width="200px"/>
            <input type="file" name="file" id="">
          </div>


          <div style="margin-top:18px;">
          <a href="admin.php?page=bookings" class="btn btn-accent" style="background-color: green; text-decoration:none">👈Back</a>
          </div>

          <div style="margin-top:18px;">
          <button class="btn btn-accent" style="background-color: yellow"><a href=""></a>Edit</button>
          </div>
          </flex-box>

  </div>
</form>

</div><!-- /settings -->