<?php

// var_dump($_SERVER["REQUEST_METHOD"]) or die;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $title = $_POST["title"];
  $category = $_POST["category"];
  $description = $_POST["description"];



  if(isset($_FILES["file"])){
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
     
      if(!file_exists($folderName))
        mkdir($folderName);

        move_uploaded_file($fileTempName, $imagePath);


    }

    $blog=[$title, $category,  $description,  $imagePath];
    $myfile =  file_get_contents("blog.txt") ;

    $Nfiles = json_decode($myfile,true);

    $blogCount = count($Nfiles);
    if(!$blogCount){
      $Nfiles = $Nfiles[0] = [$blog];
    }
    
    $Nfiles[$blogCount] = $blog;

    $blog_stringify = json_encode($Nfiles);

    file_put_contents("blog.txt", $blog_stringify);

  }
  
}

$myBlogs = file_get_contents("blog.txt");
$myBlogArray = json_decode($myBlogs);


?>
   
 
 <link rel="stylesheet" href="STYLES/others.css">

  <div class="content"> 

    <!-- ══════════ blogS PAGE ══════════ -->
    <div class="page active" id="page-blogs">
      <div class="panel">
        <div class="panel-head">
          <span class="panel-title">All blogs</span>
          <a href="admin.php?page=create_blog">
            <button class="btn btn-accent">
              <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
              New blog
            </button>
          </a>
         
        </div>
        <div class="table-wrap">
          <table id="blogsTable">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 

              foreach ($myBlogArray as $key => $value) {
                ?>

                <tr>
                <td>#<?=$key+1?></td>
                <td>
                  <img src="<?=$value[3]?>" alt="" width="60px"/>
                </td>
                <td><?=$value[0]?></td>
                <td><?=$value[1]?></td>
                <td><?=$value[2]?></td>
                <td>
                  <a class="btn btn-accent" style="background-color: yellow" href="http://localhost/FirstAPP/admin.php?page=edit_blog/<?=$key?>">Edit</a>
                  <a class="btn btn-accent" style="background-color: red" href="http://localhost/FirstAPP/admin.php?page=delete_blog/<?=$key?>">Delete</a>
                </td>
              </tr>

                <?php
                }
                ?>
              <!-- <tr>
                <td>#1001</td>
                <td>
                  <img src="" alt="" />
                </td>
                <td>Cabin A</td>
                <td>Oct 28, 2026</td>
                <td>Oct 31, 2026</td>
                <td>
                  <button class="btn btn-accent">Edit</button>
                  <button class="btn btn-accent" style="background-color: red">Delete</button>
                </td>
              </tr> -->
              <!-- <tr>
                <td></td><td>Amara Osei</td><td>Cabin B</td>
                <td>Nov 1, 2026</td><td>Nov 5, 2026</td>
                <td><span class="badge badge-yellow">Pending</span></td><td>$720</td>
              </tr>
              <tr>
                <td>#1003</td><td>Sofia Reyes</td><td>Cabin C</td>
                <td>Nov 3, 2026</td><td>Nov 10, 2026</td>
                <td><span class="badge badge-green">Confirmed</span></td><td>$1,260</td>
              </tr>
              <tr>
                <td>#1004</td><td>David Kim</td><td>Cabin A</td>
                <td>Nov 7, 2026</td><td>Nov 9, 2026</td>
                <td><span class="badge badge-red">Cancelled</span></td><td>$360</td>
              </tr>
              <tr>
                <td>#1005</td><td>Lena Müller</td><td>Cabin D</td>
                <td>Nov 12, 2026</td><td>Nov 15, 2026</td>
                <td><span class="badge badge-purple">Checked-in</span></td><td>$540</td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>