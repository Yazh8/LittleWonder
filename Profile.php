<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Profle Card</title>
  <link rel="stylesheet">
  <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  color: #ffffff;
}
body {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: url("nonlit.gif");
    background-position: no-repeat;
    background-size: cover;
}
.main{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.profile-card{
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 400px;
  width: 100%;
  border-radius: 25px;
  background-position: no-repeat;
  background-size: cover;
  padding: 30px;
  border: 1px solid #ffffff90;
  box-shadow: 0 5px 20px rgba(255, 251, 251, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(9px);
  -webkit-backdrop-filter: blur(9px);
}
.image{
  position: relative;
  height: 150px;
  width: 150px;
}
.image .profile-pic{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 5px 20px rgba(255, 255, 255, 0.4);
}
.data{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 15px;
}
.data h2{
  font-size: 25px;
  font-weight: 600;
}
span{
  font-size: 18px;
}
.row{
  display: flex;
  align-items: center;
  margin-top: 30px;
}
.row .info{
  text-align: center;
  padding: 0 20px;
}
.buttons{
  display: flex;
  align-items: center;
  margin-top: 30px;
}
.buttons .btn{
  color: #000000;
  text-decoration: none;
  margin: 0 20px;
  padding: 8px 25px;
  border-radius: 25px;
  font-size: 18px;
  white-space: nowrap;
  background: linear-gradient(to left, #33ccff 0%, #ff99cc 100%);
}
.buttons .btn:hover{
  box-shadow: inset 0 5px 20px rgba(0,0,0,0.4);
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
    margin-left: 0 auto;
    width: 75px;
}
  </style>
</head>
<body>
    <header>
        <nav class="menu">
            <ul>
            <li><a href="Homepage.php">Home</a></li>
                <li><a href="Join.php">Play</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
  <section class="main">
  <div class="profile-card">
    <div class="image">
      <img src="profilepictureacc.jpg" alt="" class="profile-pic">
    </div>
    <div class="data">
      <h2>MADAM NORSHADILA</h2>
      <span>TEACHER</span>
    </div>
    <div class="row">
      <div class="info">
        <h3>Following</h3>
        <span>120</span>
      </div>
      <div class="info">
        <h3>Followers</h3>
        <span>5000</span>
      </div>
      <div class="info">
        <h3>Points</h3>
        <span>209</span>
      </div>
    </div>
    <div class="buttons">
      <a href="editacc.php" class="btn">Edit Account</a>
      <a href="logout.php" class="btn">Log Out</a>
    </div>
  </div>
</section>
</body>
</html>

 