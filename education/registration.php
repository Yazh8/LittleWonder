<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: url("nonlit.gif"), #000;
    background-position: center;
    background-size: cover;
    align-items: center;
    justify-content: center;
    padding: 0 10px;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #fff;
}

label{
    color: #fff;
}
        

        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container register-container">
        <h2 class="text-center">Registration</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Fullname:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Register</button>
            <a href="index.php" class="btn btn-primary btn-block">Already have account ?</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>