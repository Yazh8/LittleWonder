<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css">
    <style>
    body {
        background-image: url(nonlit.gif);
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
    .wrapper {
        width: 400px;
        border-radius: 8px;
        padding: 30px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(9px);
        -webkit-backdrop-filter: blur(9px);
        justify-content: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    form {
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
    }

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #fff;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #fff;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}

#remember {
  accent-color: #fff;
}

.forget label {
  display: flex;
  align-items: center;
}

.forget label p {
  margin-left: 8px;
}

.wrapper a {
  color: #efefef;
  text-decoration: none;
}

.wrapper a:hover {
  text-decoration: underline;
}

button {
  background: #fff;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}

button:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.15);
}

.register {
  text-align: center;
  margin-top: 30px;
  color: #fff;
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
    <div class="wrapper">
    <h2>Join A Game</h2>
        <form action="your_server_endpoint.php" method="POST">
            <div class="input-field">
                <label for="game-pin">Game PIN</label>
                <input type="text" id="game-pin" name="game-pin" required>
            </div>
            <a href="c:\VSCODE\FYP\LITTLEWONDER\Word Guessing Game\Word Guessing Game\wordguessingname.html" class="PLAY" style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">Play</a>
        </form>
    </div>
</body>
</html>
