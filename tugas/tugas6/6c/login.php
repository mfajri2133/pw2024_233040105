<?php
if (isset($_POST["submit"])) {
     if ($_POST["username"] == "admin" && $_POST['password'] == "admin") {
          header("Location: admin.php");
          exit;
     } else {
          $error = true;
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Submission</title>
     <style>
          body {
               font-family: Arial, sans-serif;
               background-color: #f4f4f4;
               margin: 0;
               padding: 0;
               display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
          }

          .form-container {
               background-color: #fff;
               padding: 20px;
               border-radius: 5px;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
               width: 300px;
          }

          .form-container label {
               font-weight: bold;
               margin-bottom: 5px;
          }

          .form-container input[type="text"],
          .form-container input[type="password"] {
               width: calc(100% - 20px);
               padding: 10px;
               margin-bottom: 10px;
               border: 1px solid #ccc;
               border-radius: 5px;
          }


          .form-container button {
               width: 100%;
               padding: 10px;
               border: 1px solid #ccc;
               background-color: lightblue;
               border-radius: 5px;
               cursor: pointer;
          }
     </style>
</head>

<body>
     <form action="" method="post" class="form-container">
          <h2>Login</h2>

          <?php if (isset($error)) {
               echo "<p style='color: red; font-style: italic; font-size: 10px'>Username atau password salah!</p>";
          }
          ?>


          <input type="text" id="username" placeholder="Username" name="username" required>
          <input type="password" id="password" placeholder="Password" name="password" required>
          <button type="submit" name="submit">Login</button>

     </form>
</body>

</html>