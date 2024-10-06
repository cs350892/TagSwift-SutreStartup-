<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
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

        .prev-btn,
        .next-btn {
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
    </style>
</head>
<body>

<div class="slides-container">
    <div class="slide-slider">
        <div class="slides">
            <?php
            // Generating slides
            $studentNames = ['Aarav Patel', 'Aarushi Sharma', 'Aditi Gupta', 'Advait Kumar', 'Anaya Singh', 'Aryan Shah', 'Devansh Reddy', 'Diya Verma', 'Ishaan Jain', 'Kavya Singh'];
            $reviews = [
                'Great courses! I learned a lot and enjoyed the experience.',
                'Excellent platform for online learning. Highly recommended.',
                'The courses were amazing. I learned a lot and would highly recommend them.',
                'Great experience! The instructors were knowledgeable and supportive.',
                'I-Academy provided me with the skills I needed to succeed in my career.',
                'Fantastic courses! I particularly enjoyed the hands-on projects.',
                'I learned so much from the courses at I-Academy. Thank you!',
                'The content was well-structured and easy to understand.',
                'I-Academy exceeded my expectations. I am very satisfied with my experience.',
                'Highly recommend I-Academy to anyone looking to expand their skills.'
            ];

            for ($i = 1; $i <= count($studentNames); $i++) {
                echo '<div class="slide">';
                echo '<img src="image/stu/student' . $i . '.jpg" alt="' . $studentNames[$i - 1] . '" />';
                echo '<p><strong>' . $studentNames[$i - 1] . '</strong><br>' . $reviews[$i - 1] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <button class="prev-btn" onclick="slideSlides(-1)">&#10094;</button>
    <button class="next-btn" onclick="slideSlides(1)">&#10095;</button>
</div>

<script>
    let slideIndex = 0;

    function showSlides() {
        const slidesContainer = document.querySelector('.slides');
        slidesContainer.style.transform = `translateX(-${slideIndex * 19}rem)`; // Adjust as needed
    }

    function slideSlides(n) {
        slideIndex += n;
        showSlides();
    }
</script>

</body>
</html>
