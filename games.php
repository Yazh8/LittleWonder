<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LITTLE WONDER</title>
    <link rel="stylesheet" type="text/css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const navIcon = document.getElementById('nav-icon');
        const navMenu = document.getElementById('nav-menu');
        const profilePicture = document.getElementById('profile-picture');
    
        navIcon.addEventListener('click', function () {
            navIcon.classList.toggle('menu-opened');
            navMenu.classList.toggle('menu-opened');
        });
    
        let slideIndex = 0;
        showSlides();
    
        function showSlides() {
            const slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    
    });
    </script>
    <style>
        .content_section {
            padding: 20px;
            margin-right: 250px;
        }
        h4{
            letter-spacing: -1px;
            font-weight: 400;
            color: aliceblue;
        }
        
        body {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("nonlit.gif");
            background-position: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        
        .overlay {
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        
        .card {
            border: 1px solid #000000;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin: 10px;
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
            flex: 0 0 calc(33.33% - 20px); 
            max-width: calc(33.33% - 20px);
            box-sizing: border-box;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .card:hover {
            transform: scale(1.05);
        
        }
        .service img {
            max-width: 100%;
            height: 200px; 
            object-fit: cover; 
            border-radius: 5px;
        }
        
        .service h2 {
            font-size: 24px;
            margin-top: 10px;
        }
        
        
        .service a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            transition: color 0.2s;
        }
        
        .service a:hover {
            color: #ff6600;
        }
        
        .content_section + .content_section {
            margin-top: 40px; 
        }
        .service-header {
            background-color: #ffffff97; 
            color: #000000; 
            text-align: center; 
            padding: 20px;
        }
        
        .service-header img {
            max-width: 100%; 
            height: 100%; 
            border-radius: 5px; 
        }
        
        .service-header h2 {
            font-size: 30px;
            margin-top: 10px; 
        }
        
        .service-header p {
            font-size: 20px;
            line-height: 1.6; 
            margin-top: 10px; 
            text-align: center center;
        }
        body {
            background-image: url("Purple Neon Modern Gaming Channel Youtube Intro.gif");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 4;
            margin-top: 5;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .container {
            text-align: center;
            padding: 100px;
            color: white;
            font-family: Georgia, serif;
        }
        
        h1 {
            font-size: 36px;
        }
        
        p {
            font-size: 18px;
        }
        
        
        
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            text-transform: uppercase;
            background-color: #6b3fa7;
            color: white;
            border: none;
            cursor: pointer;
            position: relative;
        }
        
        .button:hover {
            background-color: #6b3fa7;
        }
        
        .nav-button {
            display: none;
        }
        
        .nav-button + label {
            position: fixed;
            top: 20px;
            left: 20px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            z-index: 1;
        }
        
        .nav-button + label span {
            background-color: white;
            height: 4px;
            width: 30px;
            margin: 2px 0;
        }
        
        .content {
          margin-left: 200px;
          padding-left: 20px;
        }
        
        .login-container {
            width: 400px;
            margin: 500px;
            margin-top: 200px;
            background-color: #fff;
            border-radius: 5px;
            padding: 50px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }
        
        
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 80px;
        }
        
        .input-container {
            margin-bottom: 15px;
        }
        
        .input-container label {
            display: block;
            font-weight: bold;
        }
        
        .input-container input[type="text"],
        .input-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        
        .login-container button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: bold;
            border-radius: 3px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .login-container button[type="submit"]:hover {
            background-color: #7e30b3;
        }
        
        
        .signin-container {
            width: 350px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #fff;
            border-radius: 5px;
            padding: 50px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        .signin-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .signin-container button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .signin-container button[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        .slideshow-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        width: 100%; 
        }
         .slideshow-container img {
        width: 24%;
        height: auto;
        transition: transform 0.3s;
        border-radius: 10px;
        }
        .slideshow-container img:hover {
            transform: scale(1.1);
        }
        
        footer{
            text-align: center;
            background-color: #333;
            color: white;
            padding: 0px;
            margin-bottom:-100px;
            max-width: 100%;
        
        }
        
        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            height: 40px;
            display: flex;
        }
        .menu li {
            margin-right: 30px;
            margin-left: 30px;
        }
        .menu a {
            font-family: Georgia, serif;
            text-decoration: none;
            color: white;
            transition: color 0.3s;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.5); 
        }
        .menu a:hover {
            color: #ff9900;
        }
        header {
            background-color: rgba(0, 0, 0, 0.7); 
            color: rgb(199, 0, 0);
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .profile-picture {
            cursor: pointer;
            margin-top: -25px;
            margin-left: 10px;
            margin-right: -350px;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(72, 0, 255, 0.2);
            z-index: 1;
            top: 100%;
            right: -350px;
            font-family: Georgia, serif;
        
        }
        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000000;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        
    </style>
</head>
<body>
    <header>
        <nav class="menu">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="Join.php">Play</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="education/">Education</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <section class="content_section">
        
            <div class="content">
                <div class="row">
                    <div class="card">
                        <div class="service">
                            <a href="pong.php">
                                <img src="photo_2023-10-29_21-52-30.jpg" alt="plant">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service">
                            <a href="bubbleshoot.php">
                                <img src="photo_2023-10-29_21-51-01.jpg" alt="compost">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service">
                            <a href="tetris.php">
                                <img src="photo_2023-10-29_21-52-34.jpg" alt="bags">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service">
                            <a href="tic.php">
                                <img src="photo_2023-10-29_21-52-39.jpg" alt="rr">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service">
                            <a href="snake.php">
                                <img src="photo_2023-10-29_21-59-33.jpg" alt="artcontest">
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service">
                            <a href="doodler.php">
                                <img src="dodleee.jpg" alt="artcontest">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
</body>
</html>
