<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>wikicar</title>
</head>
<body>

<div class="container">

  <div class="brand-logo"></div>
  <div class="brand-title">WIKICAR</div>

  <div class="inputs">
  <form action="validateLogin.php" method="post">
    <input type="text" placeholder="Name" name="name"><br>
    <input type="email" placeholder="E-mail" name="email"><br>
    <input type="password" placeholder="Password" name="password"/><br>
    <button type="submit">Login</button>
    </form>
    <form action="createaccount.php">
    <button type="submit">Create account</button>
    </form>
    <a href="../login/newpass.php">Forgot Password? </a>
  </div>

</div>

</body>
</html>