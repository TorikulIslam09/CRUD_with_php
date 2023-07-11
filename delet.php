<?php 
    require("db_coon/db_conn.php");
    include("heder_footer/heder.php");

    $id = $_GET['id'];
    
    $sql = "DELETE FROM table_data WHERE id = $id";
    $data = mysqli_query($connect, $sql);
    if($data) {
        header("location:data_view.php");
    }else {
        echo " dele hoyni";
    }
?>


<?php 
    include("heder_footer/footer.php");
?>