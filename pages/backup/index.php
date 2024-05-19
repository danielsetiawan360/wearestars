<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Are Stars</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f0f5;
            color: #444;
        }

        header {
            background: #4A90E2;
            color: white;
            padding: 15px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 85%;
            margin: auto;
            overflow: hidden;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left-buttons {
            display: flex;
        }

        .left-buttons .button,
        .right-button .button {
            text-decoration: none;
            color: white;
            background: black;
            padding: 12px 25px;
            margin: 5px;
            border-radius: 30px;
            transition: background 0.3s;
        }

        .left-buttons .button:hover,
        .right-button .button:hover {
            background: #333;
        }

        main {
            padding: 40px 0;
            background: white;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .intro {
            padding: 50px 0;
            text-align: center;
        }

        .intro h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #4A90E2;
        }

        .images {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .images img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            border: 6px solid black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }

        .slideshow-container {
            max-width: 400px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
            border: 5px solid black;
        }

        img {
            vertical-align: middle;
            width: 100%;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="left-buttons">
                    <a href="../pages/user-login.php" class="button">User Login</a>
                    <a href="../pages/admin-login.php" class="button">Admin Login</a>
                </div>
                <div class="right-button">
                    <a href="../pages/about-us.php" class="button">About Us</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="intro">
            <div class="container">
                <h2>Welcome to We Are Stars</h2>
                <p>We aim to make sure that no talent goes unnoticed. Join us to connect with casting professionals and showcase your skills.</p>
                <div class="images">
                    <img src="../images/image1.png" alt="Image 1">
                    <img src="../images/image2.png" alt="Image 2">
                    <img src="../images/image3.png" alt="Image 3">
                    <img src="../images/image4.png" alt="Image 4">
                </div>
            </div>
            <p></p>
            <p>Our members have found jobs in the international film industry!</p>
            <p></p>
            <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../images/image5.jpg" alt="Image 1">
        </div>
        <div class="mySlides fade">
            <img src="../images/image6.jpg" alt="Image 2">
        </div>
        <div class="mySlides fade">
            <img src="../images/image7.jpg" alt="Image 3">
        </div>
        <div class="mySlides fade">
            <img src="../images/image8.jpg" alt="Image 4">
        </div>
    </div>

        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 We Are Stars. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex - 1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>