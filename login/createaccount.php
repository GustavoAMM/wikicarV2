<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createaccount.css">
    <title>Document</title>
</head>
<body>
   
<div class="container">

<div class="brand-logo"></div>
<div class="brand-title">WIKICAR</div>

<div class="inputs">

  <input type="text" placeholder="Name"><br>
  <input type="text" placeholder="Last name"><br>
  <input type="email" placeholder="E-mail"/><br>
  <input type="password" placeholder="Password"/>
  <p>
    <select name="gender">
        <option disabled="" selected="">Gender</option>
        <option value="m">Male</option>
        <option value="f">Feminine</option>
    </select>
  </p>

  <button type="submit">Register</button>
  <form action="login.php">
  <button type="submit">I already have an account</button>
  </form>

</div>

</div>
</body>
</html>