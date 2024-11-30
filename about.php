<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LITTLE WONDER</title>
    <link rel="stylesheet" type="text/css">
    <script>document.addEventListener('DOMContentLoaded', function () {
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
     
        .profile-picture {
            position: absolute;
            top: 20px; 
            right: 20px; 
            width: 50px; 
            border-radius: 50%; 
            border: 2px solid white; 
        }
        /* Footer */
.footer-title {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #37475a;
    color: #fff;
    font-size: 0.875rem;
    font-weight: 600;
    height: 60px;
  }
  .footer-items {
    display: flex;
    justify-content: space-evenly;
    width: 100%;
    margin: 0 auto;
    background: #232f3e;
  }
  .footer-items h3 {
    font-size: 1rem;
    font-weight: 500;
    color: #fff;
    margin: 20px 0 10px 0;
  }
  .footer-items ul {
    list-style: none;
    margin-bottom: 20px;
  }
  .footer-items li a {
    color: #ddd;
    font-size: 0.875rem;
  }
  .footer-items li a:hover {
    text-decoration: underline;
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
<body style="background-image: url(nonlit.gif)">
    <header>
        <nav class="menu">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="Join.php">Play</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="education/">Education</a></li>
                <li><a href="about.php">About</a></li>
                <li class="dropdown" id="profile-dropdown">
                    <img src="blacks.jpeg" alt="Profile Picture" class="profile-picture" id="profile-picture">
                    <div class="dropdown-content" id="dropdown-content">
                        <a href="Profile.php">Profile</a>
                        <a href="Signin.php">Login</a>
                        <a href="login.php">Sign Up</a>
                        <a href="Homepage.php">Guest</a>
                        <a href="#">Settings</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <nav>-----</nav>
    <header>
    <div class="contentt" style="color: white;", font-family="Georgia, serif;">
        <h2>About Us</h2>
        <p>
            Kids' interactive games, which range from colourful puzzles that promote problem-solving to immersive experiences that spark creativity, have become an essential component of modern childhood.
        </p>
        <p>
            Kids' interactive games, which range from colourful puzzles that promote problem-solving to immersive experiences that spark creativity, have become an essential component of modern childhood.
        </p>
        <p>
            We appreciate your choice in us !!
        </p>
        <p>
            Let's work together to mould and sculpt our Wonder Kids.        
        </p>
    </div>
</header>
</body>
<footer style="bottom: 0; position: absolute; width: 100%;">
    <div class="footer-items">
      <ul>
        <h3>Let Us Help You</h3>
        <li><a href="#">Your Account</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>
  </footer>
</html>
