<?php
  include('./dbConnection.php');
  
  include('./mainInclude/header.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Slider</title>
    <!-- Add fontawesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS for slider */
        .slides-container {
            max-width: 100%;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .slide-slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slides {
            display: flex;
            flex-wrap: nowrap;
        }

        .slide {
            flex: 0 0 auto;
            width: 18rem;
            height: auto;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            text-align: center;
        }

        .slide:last-child {
            margin-right: 0;
        }

        .slide:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .slide img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            object-fit: cover;
        }

        .slide p {
            padding: 10px;
        }

        /* Previous and Next button styles */
        .prev-btn, .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            z-index: 1;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }


                    /* CSS for buttons */
                    .whatsapp-btn,
        .call-btn {
            position: fixed;
            bottom: 5vh; /* Adjust as needed */
            width: 7vw; /* Adjust as needed */
            height: 7vw; /* Adjust as needed */
            border-radius: 50%;
            background-color: #25d366; /* WhatsApp green color */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 4vw; /* Adjust as needed */
            z-index: 999; /* Ensure buttons appear above other content */
        }

        .call-btn {
            right: 5vw; /* Adjust as needed */
            background-color: #007bff; /* Call us blue color */
        }
                              
        .about-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .about-section {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .about-section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: contain;
        }
        .about-details {
    padding: 0 20px;
}

.about-details h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.about-details p {
    font-size: 16px;
    line-height: 1.6;
}

/* Styling for the about-details section */
.bg-opacity {
    background-color: rgba(0, 0, 0, 0.5); /* Light black background with opacity */
    color: #fff; /* Text color */
    padding: 20px; /* Adjust padding as needed */
    border-radius: 8px; /* Rounded corners */
}


        @media screen and (min-width: 768px) {
            .about-section {
                width: 50%;
            }

            .about-section img {
                margin-bottom: 20px;
            }
        }

        @media screen and (max-width: 767px) {
            .about-section {
                width: 100%;
            }
            .whatsapp-btn,
                        .call-btn {
                            position: fixed;
                bottom: 5vh;
                width: 15vw;
                height: 17vw;
                border-radius: 50%;
                background-color: #25d366;
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 9vw;
                z-index: 999;
            }
            .whatsapp-btn{
                left:5vw;
            }
                        

            .call-btn {
                right: 5vw; /* Adjust as needed */
                background-color: #007bff; /* Call us blue color */
            }
            .container-fluid.bg-dark {
        background-color: #D9AFD9;
    background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);
    overflow: hidden;
    height: 580px; /* Set the height to 580px */

      }

    .container-fluid.bg-dark .contact-section {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
        padding: 40px;
        border-radius: 8px;
        font-family: Arial, sans-serif;
      }

     .container-fluid.bg-dark .contact-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
     }

    .container-fluid.bg-dark .contact-section p {
        font-size: 20px;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .container-fluid.bg-dark .contact-section ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .container-fluid.bg-dark .contact-section li {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .container-fluid.bg-dark .contact-section li:before {
        content: "•";
        color: #fff;
        margin-right: 10px;
    }

        }

      .bg{


        color:white;
      }
        

         /* Your existing CSS code here */

        /* New CSS for light blue background */
        .bg {
            background-color: #f0f8ff; /* Light blue background color */
            color: #000; /* Text color */
        }

      
        body {
   overflow-x: hidden;
   overflow -y : auto;
}
.bg-dark {
    background-color: #D9AFD9;
    background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);
}
.container-fluid.bg-dark {
        position: relative;
    }

    .contact-section {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
        padding: 40px; /* Increased padding for better spacing */
        border-radius: 8px;
        font-family: Arial, sans-serif; /* Set a fallback font family */
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
    </style>
</head>
<body>

    <div class="container-fluid bg-dark"> <!-- Start Course Page Banner -->
        <div class="row">
            <img src="./image/coursebanner.jpg" alt="courses" class="course-image"/>
        </div> 
    </div> <!-- End Course Page Banner -->

    <!-- End Course Page Banner -->
    <div class="contact-section" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; text-align: center;">
        <h2>Get Tutor:</h2>
        <p>Choose the option that suits you best:</p>
        <ul>
            <li>1. Call us or WhatsApp on our number through the icon button.</li>
            <li>2. Fill the contact form with your mobile number.</li>
        </ul>
    </div>
</div>


    </div> <!-- End Course Page Banner -->
  
<div class="about-container bg-dark">
    <div class="about-section">
        <img src="image/stu/chandra1.jpeg" alt="Profile Image">
    </div>
   
    <div class="about-section">
    <div class="about-details bg-opacity">
        
        <h2>Meet Our Lead Tutor: Chandra Shekhar</h2>
        <p>
            <strong>Location:</strong> Basti, Uttar Pradesh, India <br>
            <strong>Education:</strong> <br>
            - Bachelor of Computer Application (BCA), Khwaza Muinuddeen Chishti Language University, Lucknow
            (April 2024 - Present) <br>
            - Bachelor of Technology (B.Tech) in Mechanical Engineering, National Institute of Technology Jamshedpur
            (NIT Jamshedpur)
            (August 2018 - June 2021, Dropped Out) <br>
            <strong>JEE MAINS 2020:</strong> <br>
            - Percentile: 94 <br>
            - Allotted College: NIT Jamshedpur <br>
            <strong>Skills:</strong> <br>
            - Programming Languages: C++, HTML, CSS, JavaScript <br>
            - Databases: MongoDB <br>
            - Additional Skills: (Please specify) <br>
            <strong>Favorite Subjects:</strong> <br>
            - Mathematics <br>
            - Computer Science <br>
            - Physics <br>
            - Chemistry <br>
            <strong>About Chandra Shekhar:</strong> <br>
            Chandra Shekhar is an experienced educator with a strong foundation in mathematics, science, and computer science. His passion for technology led him to pursue a career in computer science. With over two years of teaching experience in Lucknow, he brings a wealth of knowledge and expertise to our team, ensuring high-quality education for our students. <br>
            <strong>Teaching Experience:</strong> <br>
            - Chandra Shekhar has been providing home tuition services in Lucknow for more than 2 years. His leadership has guided a group of 15++ home tuition teachers to deliver quality education to their students. <br>
            <strong>Interests & Activities:</strong> <br>
            - Passionate about computer science, programming, and technology. <br>
            - Actively involved in mentoring and guiding home tuition teachers. <br>
            - Member of societies and activities related to computer science and technology. <br>
            Chandra Shekhar's commitment to education and technology underscores his mission to empower students and educators alike in their academic pursuits.
        </p>
    </div>
</div>

    <div class="slides-container bg-dark">
        <div class="slide-slider">
            <div class="slides">
                <?php
                // Generating slides
                $teacherNames = ['Akshay Kumar', 'Priya Singh', 'Rahul Sharma', 'Neha Patel', 'Sneha Sharma', 'Ravi Kumar', 'Anjali Gupta', 'Vivek Singh', 'Kiran Patel', 'Rajesh Gupta'];
                $qualifications = [
                    'Masters in Mathematics',
                    'Ph.D. in Physics',
                    'Bachelors in Biology',
                    'Masters in Chemistry',
                    'Ph.D. in Computer Science',
                    'Bachelors in History',
                    'Masters in English Literature',
                    'Ph.D. in Economics',
                    'Bachelors in Geography',
                    'Masters in Political Science'
                ];

                for ($i = 1; $i <= count($teacherNames); $i++) {
                    echo '<div class="slide">';
                    echo '<img src="image/teacher/teacher' . $i . '.jpg" alt="' . $teacherNames[$i - 1] . '" />';
                    echo '<p><strong>' . $teacherNames[$i - 1] . '</strong><br>' . $qualifications[$i - 1] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <button class="prev-btn" onclick="slideSlides(-1)">&#10094;</button>
        <button class="next-btn" onclick="slideSlides(1)">&#10095;</button>
    </div>
    
</div>
<?php include("mainInclude/footer.php")  ?>
<!-- WhatsApp button -->
<a href="https://api.whatsapp.com/send?phone=+918957465009" class="whatsapp-btn" target="_blank"><i class="fab fa-whatsapp"></i></a>

<!-- Call Us Now button -->
<a href="tel:+918957465009" class="call-btn"><i class="fas fa-phone"></i></a>


<script>
    let slideIndex = 0;

function showSlides() {
    const slidesContainer = document.querySelector('.slides');
    slidesContainer.style.transform = `translateX(-${slideIndex * 19}rem)`; // Adjust as needed
}

function slideSlides(n) {
    slideIndex += n;
    const slides = document.querySelectorAll('.slide');
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    } else if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    showSlides();
}
</script>

</body>
</html>
