<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Sign Up Form</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
  }
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100%;
    margin: 0; /* Added to remove default margin */
    padding: 0 10px;
  }
  
  body::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: url("nonlit.gif"), #000;
    background-position: center;
    background-size: cover;
  }
  
  .wrapper {
    width: 400px;
    border-radius: 8px;
    padding: 30px;
    text-align: center 0;
    border: 1px solid rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(9px);
    -webkit-backdrop-filter: blur(9px);
  }
  
  form {
    display: flex;
    flex-direction: column;
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
  <div class="wrapper">
    <form id="signup-form" method="post">
      <h2>Sign Up</h2>
      <div class="input-field">
        <input type="email" id="email" name="email" required>
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
        <label>Enter your Password (Minimum 8 characters, at least one symbol)</label>
      </div>
      <button type="submit">Sign Up</button>
    </form>
  </div>

  <script>
  document.getElementById('signup-form').addEventListener('submit', function(event) {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Email validation using regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Invalid email address.');
      event.preventDefault();
      return;
    }

    // Password validation
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z]){8,}$/;
    if (!passwordRegex.test(password)) {
      alert('Password must meet the following requirements:\n' +
        '- Minimum 8 characters\n' +
        '- At least one uppercase letter\n' +
        '- At least one lowercase letter\n' +
        '- At least one digit\n' +
        '- At least one special character (@$!%*?&)');
      event.preventDefault();
    }
  });
</script>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['email']) && isset($_POST['password'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Your database connection parameters
          $servername = "localhost";
          $username = "root";
          $db_password = ""; // Change this to your actual database password
          $database = "fyp";

          // Create connection
          $conn = new mysqli($servername, $username, $db_password, $database);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Using prepared statement to prevent SQL injection
          $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
          $stmt->bind_param("ss", $email, $hashed_password);

          // Hash the password
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          // Execute the query
          if ($stmt->execute()) {
              echo "<script>alert('New record created successfully');</script>";
          } else {
              echo "Error: " . $stmt->error;
          }

          // Close the prepared statement and connection
          $stmt->close();
          $conn->close();
      } else {
          // Handle invalid or incomplete data
          echo "<script>alert('Invalid data submitted');</script>";
      }
  }
  ?>
</body>
</html>




