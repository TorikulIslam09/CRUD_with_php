<?php 
    require('./db_coon/db_conn.php');
    include("./heder_footer/heder.php");

    if(isset($_POST['title']) && isset($_POST['des'])) {
        $title = $_POST['title'];
        $des   = $_POST['des'];
        $insert_query = "INSERT INTO `table_data`(`Title`, `Description`) VALUES ('$title ','$des')";

        $db_push = mysqli_query($connect,$insert_query);
        if($db_push) {
          header("location:data_view.php");
        }else {
          header("location:insert.php");
        }
    }



?>

<div class="container-fluid px-3 mt-5">



<table class="table">
  <tr>
    <td>ID</td>
    <td>Title</td>
    <td>Description</td>
    <td>Actions</td>
  </tr>
  <?php 
  
  $dataselect = "SELECT * FROM table_data";
  $query_sql  = $connect->query($dataselect);

  while($data = mysqli_fetch_assoc($query_sql)) {
        $colect_title = $data['Title'];
        $collect_description = $data['Description'];
        $collect_id = $data['id'];
?>
    <tr>
        <td><?= $collect_id?></td>
        <td><?= $colect_title?></td>
        <td><?= $collect_description?></td>
        <td class="d-flex">
             <a href="edite.php?id=<?= $data['id']?>" class="btn btn-primary me-1">update</a> 
             <a href="delet.php?id=<?= $data['id']?>"class="btn btn-danger">delet</a> 
            </td>
    
        
    </tr>
  
<?php
  }
?>
</table>

</div>



<?php 
require("./heder_footer/footer.php");
?>