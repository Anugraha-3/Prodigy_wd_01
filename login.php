<html>
<head>
  <title>Login Page</title>
<link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
background-image:url('index background.png');
background-size:no-repeat;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="login-form" action="" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>
    <div id="error-message" class="error-message" style="display: none;"></div>
  </div>

  <script>
    document.getElementById('login-form').addEventListener('submit', function(e) {
      e.preventDefault();

      // Get input values
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Check username and password
      if (username === 'Anugraha' && password === 'anugraha@2403') {
        // Successful login
        // Redirect or perform other actions here
        alert('Login successful!');
      } else {
        // Failed login
        var errorMessage = document.getElementById('error-message');
        errorMessage.innerHTML = 'Invalid username or password.';
        errorMessage.style.display = 'block';
      }
    });
  </script>
</body>
</html>