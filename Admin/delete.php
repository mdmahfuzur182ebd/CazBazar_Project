<?php
  include('includes/config.php');
  

     $id =$_GET['id'];
     $sql = "DELETE FROM bea_donor WHERE donor_id='$id' ";
     $result=mysqli_query($conn,$sql);
     if($result){
         header('Location:updatDelect.php');
     }

  
?>
