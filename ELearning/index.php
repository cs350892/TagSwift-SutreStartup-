<?php
  include('./dbConnection.php');
  
  include('./mainInclude/header.php'); 
?>  
    <!-- Start Video Background-->
    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/banvid.mp4" />
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">Welcome to i-Academy</h1>
        <small class="my-content">Learn and Implement</small><br />
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div>

    </div> <!-- End Video Background -->

    <div class="container-fluid bg-danger txt-banner"> 
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5> <i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
          </div>
        </div>
    </div> 
    
  
<div style="margin-top: 20px;"> 
  <h1>Popular Course</h1>
  <?php
  // Define courses
  $course1 = array(
    'name' => 'Python',
    'description' => 'Learn Python programming language.',
    'price' => 'Rs.1999',
    'image' => 'imagedirectory/courseimage/python_course_img.jpg'
  );

  $course2 = array(
    'name' => 'WebDev using PHP',
    'description' => 'Learn Web Development using PHP.',
    'price' => 'Rs.2499',
    'image' => 'imagedirectory/courseimage/php_course_img.jpg'
  );

  $course3 = array(
    'name' => 'DSA',
    'description' => 'Learn Data Structures and Algorithms.',
    'price' => 'Rs.2999',
    'image' => 'imagedirectory/courseimage/dsa_course_img.jpg'
  );

  $course4 = array(
    'name' => 'Data Science and Machine Learning',
    'description' => 'Learn Data Science and Machine Learning concepts.',
    'price' => 'Rs.3499',
    'image' => 'imagedirectory/courseimage/data_science_ml_course_img.jpg'
  );

  $course5 = array(
    'name' => 'Android Development',
    'description' => 'Learn Android app development.',
    'price' => 'Rs.3999',
    'image' => 'imagedirectory/courseimage/android_dev_course_img.jpg'
  );

  $course6 = array(
    'name' => 'C++',
    'description' => 'Learn C++ programming language.',
    'price' => 'Rs. 2999',
    'image' => 'imagedirectory/courseimage/cpp_course_img.jpg'
  );

  // Display courses
  function displayCourse($course) {
    echo '<div style="width: 33.33%; padding: 0 15px; box-sizing: border-box; margin-bottom: 20px;">';
    echo '<img src="' . $course['image'] . '" alt="' . $course['name'] . '" style="max-width: 100%; height: auto;" />';
    echo '<div style="background-color: #f9f9f9; padding: 10px; text-align: center;">';
    echo '<h5>' . $course['name'] . '</h5>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Price: ' . $course['price'] . '</p>';
    echo '<a href="#">Enroll</a>';
    echo '</div></div>';
  }

  // Display two rows with three courses in each row
  echo '<div style="display: flex; flex-wrap: wrap;">';
  displayCourse($course1);
  displayCourse($course2);
  displayCourse($course3);
  echo '</div>';

  echo '<div style="display: flex; flex-wrap: wrap;">';
  displayCourse($course4);
  displayCourse($course5);
  displayCourse($course6);
  echo '</div>';
  ?>
</div>

    <?php 
    
    include('./contact.php'); 
    ?>  

    
     <?php
     include('./stufeedback.php') 
     ?>
     

     <div class="container-fluid bg-danger"> 
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> <!-- End Social Follow -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>iAcademy provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a><br />
            <a class="text-dark" href="#">Web Designing</a><br />
            <a class="text-dark" href="#">Android App Dev</a><br />
            <a class="text-dark" href="#">iOS Development</a><br />
            <a class="text-dark" href="#">Data Analysis</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>i-Academy Pvt Ltd <br> Near Sahara hospital <br> Lucknow, Gomtinagar<br> Ph. 8957465009  </p>
          </div>
        </div>
      </div>
    </div> <!-- End About Section -->

  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
