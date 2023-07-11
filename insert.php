<?php 
require('./db_coon/db_conn.php');
include("./heder_footer/heder.php");
?>

<div class="container mt-5">
    <form action="data_view.php" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="des" class="form-label">Example textarea</label>
            <textarea class="form-control" id="des" rows="3" name="des"></textarea>
        </div>
        <div class="mb-3">
            
           <input type="submit" value="insert data" class="btn btn-primary">
        </div>
    </form>
</div>




<?php 
require("./heder_footer/footer.php");
?>