 <!-- Footer -->
 <?php  include "../header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $empid= $_GET['delete'];

         $query = "DELETE FROM employee WHERE e_id = {$empid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
?>