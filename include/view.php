<!-- Header -->
<?php include '../header.php' ?>

<h1 class="text-center">User Details</h1>
<div class="container">
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <!-- <th scope="col">ID</th> -->
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Salary</th>
        <th scope="col">Gender</th>
        <th scope="col">Department</th>
        <th scope="col"> Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <?php
        if (isset($_GET['e_id'])) {
          $empid = $_GET['e_id'];
          $query = "SELECT * FROM employee WHERE e_id = {$empid} ";
          $view_employee = mysqli_query($conn, $query);

          if (!$view_employee) {
            die("Query failed: " . mysqli_error($conn));
          }

          while ($row = mysqli_fetch_assoc($view_employee)) {
            // $id = $row['e_id'];
            $user = $row['e_name'];
            $email = $row['e_email'];
            $salary = $row['e_salary'];
            $gender = $row['e_gender'];
            $dept = $row['e_dept'];
            $pass = $row['e_password'];

            echo "<tr >";
            // echo " <th scope='row' >{$id}</th>";
            echo " <td > {$user}</td>";
            echo " <td > {$email}</td>";
            echo " <td > {$salary}</td>";
            echo " <td > {$gender}</td>";
            echo " <td > {$dept}</td>";
            echo " <td >{$pass} </td>";
          }
        }
        ?>
      </tr>
    </tbody>
  </table>
  <div class="container text-center mt-3">
  <a href="home.php" class="btn btn-warning mt-3"> Back </a>
  <div>
</div>


<!-- Footer -->
<?php //include "../footer.php" ?>