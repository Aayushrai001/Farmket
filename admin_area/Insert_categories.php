<?php
include("../inludes/connect.php");
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <div class="input-group mb-3">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
            <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
         </div>
         <div class="input-group w-10 mb-2 m-auto">
            <!--<input type="submit" class="form-control bg-info" name="insert_cat" value="Insert categories">-->
            <button class="bg-info p-2 my-3 border-0">Insert categories</button>
         </div>
    </div>
</form>