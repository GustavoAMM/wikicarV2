<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/newpass.css">
    <title>Wikicar</title>
</head>
<body>
<div class="container">

<div class="brand-logo"></div>
<div class="brand-title">WIKICAR</div>
<div class="inputs">
  <form action="validatenewpass.php" method="post">
    <input type="email" placeholder="E-mail" name="email"><br>
    <input type="password" placeholder="New password" name="password"/><br>
    <button type="submit">Send</button>
  </form>
  <form action="login.php">
    <button type="submit">Back</button>
  </form>
</div>

</div>
</body>
</html>