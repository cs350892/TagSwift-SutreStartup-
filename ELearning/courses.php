<?php 
        include('./dbConnection.php');
        include('./mainInclude/header.php'); 
    ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-fluid {
            /* Course Page Banner */
        }

        .course-image {
            height: 560px;
            width: 100%;
            object-fit: cover;
            box-shadow: 10px;
        }

        .course-section {
            margin-top: 20px;
        }

        .course {
            width: 33.33%;
            padding: 0 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            float: left;
        }

        .course iframe {
            width: 100%;
            height: 200px;
        }

        .course-details {
            background-color: #f9f9f9;
            padding: 10px;
            text-align: center;
        }
        
 /* CSS for contact section */
.contact-container {
    position: relative; /* Ensure relative positioning for absolute positioning of child */
    padding-top: 20px; /* Add padding to top to create space for contact section */
}

.contact-section {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
    background: rgba(0, 0, 0, 0.5);
    padding: 16px; /* Increased padding for better spacing */
    border-radius: 8px;
    font-family: Arial, sans-serif; /* Set a fallback font family */
    width: 80%; /* Adjust width as needed */
    max-width: 600px; /* Limit max width for responsiveness */
}

.contact-section h2 {
    font-size: 36px; /* Larger font size for the heading */
    margin-bottom: 20px; /* Increased margin for better separation */
    font-weight: bold; /* Bold font weight for emphasis */
    text-transform: uppercase; /* Uppercase text for style */
}

.contact-section p {
    font-size: 20px; /* Larger font size for the paragraph */
    margin-bottom: 20px; /* Increased margin for better separation */
    line-height: 1.5; /* Increased line height for readability */
}

.contact-section ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 20px; /* Increased margin for better separation */
}

.contact-section li {
    font-size: 20px; /* Larger font size for list items */
    margin-bottom: 10px; /* Increased margin for better separation */
}

.contact-section li:before {
    content: "•";
    color: #fff;
    margin-right: 10px;
}

/* Adjustments for responsive design */
@media screen and (max-width: 767px) {
    .contact-section {
        width: 90%; /* Adjust width for smaller screens */
        padding: 10px; /* Adjust padding for smaller screens */
    }
}

    </style>
</head>
<body>


    <div class="container-fluid bg-dark"> <!-- Start Course Page Banner -->
        <div class="row">
            <img src="./image/coursebanner.jpg" alt="courses" class="course-image"/>
        </div> 
    </div> <!-- End Course Page Banner -->

    <div class="contact-section" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; text-align: center;">
        <h2>Get Tutor:</h2>
        <p>Choose the option that suits you best:</p>
        <ul>
            <li>1. Call us or WhatsApp on our number through the icon button.</li>
            <li>2. Fill the contact form with your mobile number.</li>
        </ul>
    </div>
</div>


    <div class="course-section"> 
        <h1>Popular Course</h1>
        <?php
            // Define courses
            $courses = array(
                array(
                    'name' => 'Python',
                    'description' => 'Learn Python programming language.',
                    'price' => 'Rs.1999',
                    'image' => 'image/courseimg/python_course_img.jpg'
                ),
                array(
                    'name' => 'WebDev using PHP',
                    'description' => 'Learn Web Development using PHP.',
                    'price' => 'Rs.2499',
                    'image' => 'imagedirectory/courseimage/php_course_img.jpg'
                ),
                array(
                    'name' => 'DSA',
                    'description' => 'Learn Data Structures and Algorithms.',
                    'price' => 'Rs.2999',
                    'image' => 'imagedirectory/courseimage/dsa_course_img.jpg'
                ),
                array(
                    'name' => 'Data Science and Machine Learning',
                    'description' => 'Learn Data Science and Machine Learning concepts.',
                    'price' => 'Rs.3499',
                    'image' => 'imagedirectory/courseimage/data_science_ml_course_img.jpg'
                ),
                array(
                    'name' => 'Android Development',
                    'description' => 'Learn Android app development.',
                    'price' => 'Rs.3999',
                    'image' => 'image/courseimg/aio.jpg'
                ),
                array(
                    'name' => 'C++',
                    'description' => 'Learn C++ programming language.',
                    'price' => 'Rs.2999',
                    'image' => 'image/courseimg/machline.jpg'
                ),
                array(
                    'name' => 'YouTube Playlist 1',
                    'description' => 'YouTube playlist for Course 7.',
                    'price' => '',
                    'video_link' => 'https://www.youtube.com/embed/videoseries?list=YOUR_PLAYLIST_ID'
                ),
                array(
                    'name' => 'YouTube Playlist 2',
                    'description' => 'YouTube playlist for Course 8.',
                    'price' => '',
                    'video_link' => 'https://www.youtube.com/embed/videoseries?list=YOUR_PLAYLIST_ID'
                ),
                array(
                    'name' => 'YouTube Playlist 3',
                    'description' => 'YouTube playlist for Course 9.',
                    'price' => 'free',
                    'video_link' => 'https://www.youtube.com/embed/videoseries?list=YOUR_PLAYLIST_ID'
                )
            );

            // Display courses
            function displayCourse($course) {
                echo '<div class="course">';
                if (!empty($course['video_link'])) {
                    echo '<iframe src="' . $course['video_link'] . '" frameborder="0" allowfullscreen></iframe>';
                } else {
                    echo '<img src="' . $course['image'] . '" alt="' . $course['name'] . '" class="course-image" />';
                    echo '<div class="course-details">';
                    echo '<h5>' . $course['name'] . '</h5>';
                    echo '<p>' . $course['description'] . '</p>';
                    echo '<p>Price: ' . $course['price'] . '</p>';
                    echo '<a href="#">Enroll</a>';
                    echo '</div>';
                }
                echo '</div>';
            }

            // Display three courses in each row
            echo '<div class="row">';
            foreach ($courses as $course) {
                displayCourse($course);
            }
            echo '</div>';
        ?>
    </div>

    <?php 
        // Contact Us
        include('./contact.php'); 
    ?> 

    <?php 
        // Footer Include from mainInclude 
        include('./mainInclude/footer.php'); 
    ?> 

</body>
</html>
