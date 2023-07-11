<?php 
    require('./db_coon/db_conn.php');
    include("./heder_footer/heder.php");

    $id = $_GET['id'];
    var_dump($id);

 
?>



<div class="container mt-5">
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value="<?= $title_bar?>" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="des" class="form-label">Example textarea</label>
            <textarea value="<?= $des ?>" class="form-control" id="des" rows="3" name="des"> <?= $des?> </textarea>
        </div>
        <div class="mb-3">
            
           <input type="submit" value="insert data" class="btn btn-primary">
        </div>
    </form>
</div>