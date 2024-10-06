<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp and Call Icons</title>
    <!-- Add fontawesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS for buttons */
        .whatsapp-btn,
        .call-btn {
            position: fixed;
            bottom: 5vh;
            width: 7vw;
            height: 7vw;
            border-radius: 50%;
            background-color: #25d366; /* WhatsApp green color */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 4vw;
            z-index: 999; /* Ensure buttons appear above other content */
            text-decoration: none; /* Remove underline */
        }

        .call-btn {
            right: 5vw;
            background-color: #007bff; /* Call us blue color */
        }

        @media screen and (max-width: 767px) {
            .whatsapp-btn,
            .call-btn {
                width: 15vw;
                height: 17vw;
                font-size: 9vw;
            }
            .whatsapp-btn {
                left: 5vw;
            }
            .call-btn {
                right: 5vw;
            }
        }
    </style>
</head>
<body>
    <!-- WhatsApp button -->
    <a href="https://api.whatsapp.com/send?phone=+918957465009" class="whatsapp-btn" target="_blank"><i class="fab fa-whatsapp" style="text-decoration: none;"></i></a>

    <!-- Call Us Now button -->
    <a href="tel:+918957465009" class="call-btn"><i class="fas fa-phone" style="text-decoration: none;"></i></a>
</body>
</html>
