<?php 
  // Include database connection
  include('./dbConnection.php');
  
  function addStu() {
    global $conn; // Using global variable for database connection
    
 
    if (isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])) {
        $stuName = $_POST['stuname'];
        $stuEmail = $_POST['stuemail'];
        $stuPass = $_POST['stupass'];

        //  to insert data into the student table
        $stmt = $conn->prepare("INSERT INTO student (stu_name, stu_email, stu_pass) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $stuName, $stuEmail, $stuPass);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration successful
            echo "Registration successful!";
        } else {
            // Registration failed
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // If form fields are not set
        echo "All form fields are required.";
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    addStu();
  }



  //to handle student login
  function checkStuLogin() {
    global $conn; // Using global variable for database connection
    
    // Check if all form fields are set
    if (isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])) {
      $stuLogEmail = $_POST['stuLogEmail'];
      $stuLogPass = $_POST['stuLogPass'];

      // Prepare and execute SQL statement to retrieve student data based on email
      $sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail'";
      $result = $conn->query($sql);

      if ($result->num_rows == 1) {
        // Student found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($stuLogPass, $row['stu_pass'])) {
          // Password correct, redirect to student profile page
          header("Location: Student/studentProfile.php");
          exit(); // Ensure script execution stops after redirection
        } else {
          // Incorrect password
          echo "Incorrect password!";
        }
      } else {
        // Student not found
        echo "Student not found!";
      }
    }
  }

  // Check if the login form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['stuLoginBtn'])) {
    checkStuLogin(); // Call the function to handle student login
  }

  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>

<!-- Course Page Banner -->
<div class="container-fluid bg-dark">
  <!-- Your existing course page banner code goes here -->
</div>

<!-- Student Registration and Login Form -->
<div class="container jumbotron mb-5">
  <div class="row">
    <!-- Login Form -->
    <div class="col-md-4">    
      <h5 class="mb-3">If Already Registered !! Login</h5>
      <form role="form" id="stuLoginForm" method="post">
        <div class="form-group">
          <label for="stuLogEmail">Email</label>
          <input type="email" class="form-control" id="stuLogEmail" name="stuLogEmail" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="stuLogPass">Password</label>
          <input type="password" class="form-control" id="stuLogPass" name="stuLogPass" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="stuLoginBtn">Login</button>
      </form>
    </div>

    <!-- Registration Form -->
    <div class="col-md-6 offset-md-1">
      <h5 class="mb-3">New User !! Sign Up</h5>
      <form role="form" id="stuRegForm" method="post">
        <div class="form-group">
          <label for="stuname">Name</label>
          <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="stuemail">Email address</label>
          <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="stupass">Password</label>
          <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
      </form>
    </div>
  </div>
</div>

<!-- Contact Us Section -->
<?php include('./contact.php'); ?>

<!-- Footer Include from mainInclude -->
<?php include('./mainInclude/footer.php'); ?>

<?php 
  // Close database connection
  $conn->close();
?>
