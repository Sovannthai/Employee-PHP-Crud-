<!-- Footer -->
<?php include "../header.php" ?>

<?php
if (isset($_GET['e_id'])) {
  $empid = $_GET['e_id'];
}
$query = "SELECT * FROM employee WHERE e_id = $empid";
$view_employee = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($view_employee)) {
  $user = $row['e_name'];
  $email = $row['e_email'];
  $salary = $row['e_salary'];
  $gender = $row['e_gender'];
  $dept = $row['e_dept'];
  $pass = $row['e_password'];
}
if (isset($_POST['update'])) {
  $user = $_POST['name'];
  $email = $_POST['email'];
  $salary = $_POST['salary'];
  $gender = $_POST['gender'];
  $dept = $_POST['dept'];
  $pass = $_POST['pass'];

  // SQL query to update 
  $query = "UPDATE employee SET e_name = '{$user}' , e_email = '{$email}' , e_salary='{$salary}',e_gender='{$gender}',e_dept='{$dept}' ,e_password = '{$pass}' WHERE e_id = $empid";
  $update_user = mysqli_query($conn, $query);
  echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}
?>

<h1 class="text-center">Update User Details</h1>
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card ">
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="user" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" value="<?php echo $user; ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label for="user" class="form-label">Salary</label>
            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
          </div>
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" value="<?php echo $gender; ?>" id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label for="user" class="form-label">Department</label>
            <select type="text" name="dept" class="form-control" value="<?php echo $dept; ?>">
              <option value="male">UI/UX</option>
              <option value="female">Sale Consultant</option>
              <option value="male">Operation</option>
              <option value="female">Analysis</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" value="<?php echo $pass; ?>">
          </div>

          <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-3" value="Update">
            <a href="home.php" class="btn btn-warning mt-3"> Back </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>