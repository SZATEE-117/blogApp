
  
  <link rel="stylesheet" href="STYLES/others.css">
 
 <!-- ══════════ SETTINGS PAGE ══════════ -->
<div class="page active" id="page-settings">

      <!-- Account settings -->
<!-- <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data"> -->
<form method="post" action="http://localhost/FirstAPP/admin.php?page=bookings" enctype="multipart/form-data">
  <div class="panel">
    <div class="panel-head"><span class="panel-title">Account</span></div>

      <div class="form-grid">
           <div class="field fd1">
            <label for="settName"> Blog Title </label>
            <input type="text" id="settName" placeholder="Your blog title..." name="title">
           </div>

           <div class="field fd2">
            <label for="settName"> Category </label>
            <select name="category">
              <option> Sports </option>
              <option> Life</option>
              <option> Business</option>
            </select>
           </div>

           <div class="field textarea fd3">
            <textarea placeholder="description..." name="description"></textarea>
           </div>


      </div>


      
           <flex-box>

          <div style="margin-top:18px;">
            <input type="file" name="file" id="">
          </div>

          
          <div style="margin-top:18px;">
          <a href="admin.php?page=bookings" class="btn btn-accent" style="background-color: green; text-decoration:none">👈Back</a>
          </div>

          <div style="margin-top:18px;">
          <button class="btn btn-accent">Save Changes</button>
          </div>


          </flex-box>

  </div>
</form>

</div><!-- /settings -->