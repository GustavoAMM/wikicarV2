<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/brand.css">
    <title>Wikicar/Brand</title>
</head>
<body>
<nav>
	<a href="../../homescreen/code/mainscreen.php">Home</a>
	<a href="../../brand/code/brand.php">Brand</a>
	<a href="../../modelos/code/model.php">Models</a>
	<a href="../../about/code/about.php">About</a>
	<a href="../../index.php">Exit</a>
	<div class="animation start-main"></div>
	  
<div class="container">

<div class="brand-logo"></div>
<div class="brand-title">Wikicar</div>

<div class="inputs">
  <form action="validatebrand.php" method="post">
	<input type="text" placeholder="Brand" values="" name="brand">
	<input type="text" placeholder="Founders" values="" name="founders">
	<input type="date" placeholder="Foundation date" values="" name="date">
	<input type="text" placeholder="country" values="" name="country">
	<input type="text" placeholder="history" values="" name="history">
	<button type="submit">Register</button>
  </form>
</div>
</div>

</nav>
</body>
</html>