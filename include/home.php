<!-- Header -->
<?php include "../header.php" ?>
<?php
if (isset($_POST['create'])) {
  $user = $_POST['name'];
  $email = $_POST['email'];
  $salary = $_POST['salary'];
  $gender = $_POST['gender'];
  $dept = $_POST['dept'];
  $pass = $_POST['pass'];

  $email = $_POST['email'];
  $check_email = "SELECT * FROM employee WHERE e_email = '$email'";
  $result = mysqli_query($conn, $check_email);
  if(mysqli_num_rows($result) > 0){
      echo "Email already exists";
  } else {
    $query = "INSERT INTO employee(e_name, e_email,e_salary,e_gender,e_dept, e_password) VALUES('{$user}','{$email}','{$salary}','{$gender}','{$dept}','{$pass}')";
    $add_emp = mysqli_query($conn, $query);
  
    if (!$add_emp) {
      echo "something went wrong " . mysqli_error($conn);
    } else {
      echo "<script type='text/javascript'>alert('User added successfully!')</script>";
    }
  }
  }
?>
  
<div class="all">
  <h1 class="text-center">Add New Employee </h1>
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="card ">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="user" class="form-label">Username</label>
              <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="user" class="form-label">Salary</label>
              <input type="text" name="salary" class="form-control">
            </div>
            <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="user" class="form-label">Department</label>
              <select type="text" name="dept" class="form-control">
                <option value="male">UI/UX</option>
                <option value="female">Sale Consultant</option>
                <option value="male">Operation</option>
                <option value="female">Analysis</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pass" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control">
            </div>

            <div class="form-group">
              <input type="submit" name="create" class="btn btn-primary mt-2" value="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- List Employee -->
  <div class="container">

    <h1 class="text-center">Empo  lyee List</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <!-- <th scope="col">ID</th> -->
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Salary</th>
          <th scope="col">Gender</th>
          <th scope="col">Department</th>
          <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <?php
          $query = "SELECT * FROM employee";
          $view_employee = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($view_employee)) {
            $id = $row['e_id'];
            $user = $row['e_name'];
            $email = $row['e_email'];
            $salary = $row['e_salary'];
            $gender = $row['e_gender'];
            $dept = $row['e_dept'];
            $pass = $row['e_password'];

            echo "<tr >";
            echo " <td > {$user}</td>";
            echo " <td > {$email}</td>";
            echo " <td > {$salary}</td>";
            echo " <td > {$gender}</td>";
            echo " <td > {$dept}</td>";


            echo " <td class='text-center'> <a href='view.php?e_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

            echo " <td class='text-center' > <a href='update.php?edit&e_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

            echo " <td  class='text-center'>  <a href='Delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
            echo " </tr> ";
          }
          ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>