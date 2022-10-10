<?php
declare(strict_types=1);
include('./auth.php');

if(!is_null($authUser))
{
  echo '<h1>Добро пожаловать, ' . $authUser . '!</h1><a href="./exit.php">Exit</a>';
} else {
  ?>

<form action="./post.php" method="POST">
  <div class="field">
    <label for="username">Your Username</label>
    <input type="text" id="username" name="username">
  </div>
  <div class="field">
    <label for="password">Enter your password</label>
    <input type="text" id="password" name="password">
  </div>
  <div class="field">
    <button type="submit">Sign in</button>
  </div>
</form>

<?php
};
?>