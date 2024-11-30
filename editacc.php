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
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: white;
        }
        
        body{
            font-family: 'Poppins', sans-serif;
            background: url('nonlit.gif') no-repeat center center fixed;
            background-size: cover;
        }
        
        .wrapper{
            padding: 30px 50px;
            border: 1px solid #ddd;
            border-radius: 15px;
            margin: 10px auto;
            max-width: 600px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
        }
        h4{
            letter-spacing: -1px;
            font-weight: 400;
        }
        .img{
            width: 70px;
            height: 70px;
            border-radius: 6px;
            object-fit: cover;
        }
        #img-section p,#deactivate p{
            font-size: 12px;
            color: #777;
            margin-bottom: 10px;
            text-align: justify;
        }
        #img-section b,#img-section button,#deactivate b{
            font-size: 14px; 
        }
        
        label{
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            color: #efefef;
            padding-left: 3px;
        }
        
        .form-control{
            border-radius: 10px;
        }
        
        input[placeholder]{
            font-weight: 500;
        }
        .form-control:focus{
            box-shadow: none;
            border: 1.5px solid #0779e4;
            
        }
        select{
            display: block;
            width: 100%;
            border: 1px solid #000000;
            border-radius: 10px;
            height: 40px;
            padding: 5px 10px;
            background-color: #ffffff63;
        }
        
        select:focus{
            outline: none;
        }
        .button{
            background-color: #0779e4;
            color:#ffffff ;
        }
        .button:hover{
            background-color: #1d4f7e;
            color: #000000;
        }
        .btn-primary{
            background-color: #0779e4;
        }
        .danger{
            background-color: #ff0000;
            color: #ffffff;
            border: 1px solid #ddd;
        }
        .danger:hover{
            background-color: #e20404;
            color: #fff;
        }
        @media(max-width:576px){
            .wrapper{
                padding: 25px 20px;
            }
            #deactivate{
                line-height: 18px;
            }
        }    
        body {
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
            margin-right: -450px;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(72, 0, 255, 0.2);
            z-index: 1;
            top: 100%;
            right: -460px;
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
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="Join.html">Play</a></li>
                <li><a href="games.html">Games</a></li>
                <li><a href="about.html">About</a></li>

            </ul>
        </nav>
    </header>
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        <div class="d-flex align-items-start py-3 border-bottom">
            <img src="profilepictureacc.jpg"
                class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section">
                <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p>
                <button class="btn button border"><b>Upload</b></button>
            </div>
        </div>
        <div class="py-2">
            <div class="row py-2" style="color:#777">
                <div class="col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" class="bg-light form-control" placeholder="Steve">
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="bg-light form-control" placeholder="Smith">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="email">Email Address</label>
                    <input type="text" class="bg-light form-control" placeholder="steve_@email.com">
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="bg-light form-control" placeholder="+607-1234567">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="bg-light" style="color: #000000;">
                        <option style="color: #000000;" value="india">Malaysia</option>
                        <option style="color: #000000;" value="india">India</option>
                        <option style="color: #000000;" value="usa">USA</option>
                        <option style="color: #000000;" value="uk">UK</option>
                        <option style="color: #000000;" value="uae">UAE</option>
                        <option style="color: #000000;" value="canada">Canada</option>
                        <option style="color: #000000;" value="australia">Australia</option>
                        <option style="color: #000000;" value="germany">Germany</option>
                        <option style="color: #000000;" value="france">France</option>
                        <option style="color: #000000;" value="spain">Spain</option>
                        <option style="color: #000000;" value="italy">Italy</option>
                        <option style="color: #000000;" value="japan">Japan</option>
                        <option style="color: #000000;" value="brazil">Brazil</option>
                        <option style="color: #000000;" value="china">China</option>
                        <option style="color: #000000;" value="south-korea">South Korea</option>
                        <option style="color: #000000;" value="russia">Russia</option>
                        <option style="color: #000000;" value="mexico">Mexico</option>
                        <option style="color: #000000;" value="argentina">Argentina</option>
                        <option style="color: #000000;" value="egypt">Egypt</option>
                        <option style="color: #000000;" value="south-africa">South Africa</option>
                        <option style="color: #000000;" value="turkey">Turkey</option>
                        <option style="color: #000000;" value="greece">Greece</option>
                        <option style="color: #000000;" value="sweden">Sweden</option>
                        <option style="color: #000000;" value="norway">Norway</option>
                        <option style="color: #000000;" value="poland">Poland</option>
                        <option style="color: #000000;" value="netherlands">Netherlands</option>
                        <option style="color: #000000;" value="belgium">Belgium</option>
                        <option style="color: #000000;" value="switzerland">Switzerland</option>
                        <option style="color: #000000;" value="austria">Austria</option>
                        <option style="color: #000000;" value="indonesia">Indonesia</option>
                    </select>
                </div>
                
                <div class="col-md-6 pt-md-0 pt-3" id="lang">
                    <label for="language">Language</label>
                    <div class="arrow">
                        <select name="language" id="language" class="bg-light" style="color: #000000;">
                            <option style="color: #000000;" value="english" selected>English</option>
                            <option style="color: #000000;" value="english_us">English (United States)</option>
                            <option style="color: #000000;" value="enguk">English UK</option>
                            <option style="color: #000000;" value="arab">Arabic</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="py-3 pb-4 border-bottom">
                <button class="btn border button">Save Changes</button>
                <button class="btn border button">Cancel</button>
            </div>
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                <div>
                    <b>Deactivate your account</b>
                    <p>Details about your company account and password</p>
                </div>
                <div class="ml-auto">
                    <button class="btn border button" style="background-color: #e20404;">Deactivate</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
