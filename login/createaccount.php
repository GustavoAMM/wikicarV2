<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createaccount.css">
    <title>wikicar</title>
</head>
<body>
   
<div class="container">

  <div class="brand-logo"></div>
  <div class="brand-title">Wikicar</div>

  <div class="inputs">
    <form action="validateaccount.php" method="post">
      <input type="text" placeholder="Name" values="" name="name"><br>
      <input type="text" placeholder="Last name" values="" name="last"><br>
      <input type="email" placeholder="E-mail" values="" name="email"><br>
      <input type="password" placeholder="Password" values="" name="password">
      <p>
        <select name="gender">
          <option value="" disabled="" selected="">Gender</option>
          <option value="m">Male</option>
          <option value="f">Feminine</option>
        </select>
      </p>
      <button type="submit">Register</button>
    </form>
    <form action="login.php">
      <button type="submit">I already have an account</button>
    </form>
  </div>
</div>

</body>
</html>