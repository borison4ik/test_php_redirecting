<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>forms</title>

  <style type="text/css">
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px 16px;
    font-size: 16px;
    line-height: 120%;
  }

  .field {
    margin-bottom: 16px;
  }

  label {
    display: block;
    margin-bottom: 8px;
  }

  input {
    display: block;
    width: 100%;
  }
  </style>
</head>

<body>
  <div class="container">
    <p>
      <?php
        session_start();
        echo isset($_SESSION['badPassword']) ? '<h2>Try again!</h2><br/><a href="./index.php">To Home</a> or ' : '';
      ?>
    </p>
    <form action="./logout.php" method="POST">
      <div class="field">
        <label for="password">Enter your password</label>
        <input type="text" id="password" name="password">
      </div>
      <div class="field">
        <button type="submit">Logout</button>
      </div>
    </form>
  </div>
</body>

</html>