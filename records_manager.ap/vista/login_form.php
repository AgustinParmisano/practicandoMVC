<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title id="pageTitle">Welcome to the real World</title>
  </head>
  <body>
    <form id="login_form" action="./controlador/login.php" method="post">
      <label for="user">User:</label>
      <input type="text" name="user" id="user" value="" tabindex="1" required>
      <label for="pass">Password:</label>
      <input type="password" name="pass" id="pass" tabindex="2" required>
      <input type="checkbox" name="persistent" id="persistent_box" value="1" tabindex="3">
      <input type="submit" value="Lug In" id="submit" tabindex="4">
      <div style="padding: 5px 5px 5px 5p; background-color:red">{{error}}</div>
    </form>
  </body>
</html>
