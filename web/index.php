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
    <?php 
  include('./auth.php');
  
  if(isset($authUser)){
  ?>

    <h1>Добро пожаловать, <?php echo $authUser;?></h1>
    <a href="./exit.php">Exit</a>

    <?php
  } else {
  ?>

    <form action="./post.php" method="POST">
      <div class="field">
        <label for="username">Your Username</label>
        <input type="text" id="username" name="username">
      </div>
      <div class="field">
        <button type="submit">Sign in</button>
      </div>
    </form>

    <?php
  }
  ?>
  </div>
</body>

</html>