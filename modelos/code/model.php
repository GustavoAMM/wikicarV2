<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/model.css">
    <title>Wikicar/Model</title>
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
    <form action="validatemodel.php" method="post">
        <input type="text" placeholder="Model name" values="" name="name">
        <input type="text" placeholder="Type of car" values="" name="type">
        <input type="text" placeholder="Number of doors" values="" name="doors">
        <input type="text" placeholder="Number of seats" values="" name="seats">
        <input type="text" placeholder="Tank capacity (L)" values="" name="tank">
        <input type="text" placeholder="Model year" values="" name="year">
        <input type="text" placeholder="Starting price($)" values="" name="starting">
        <input type="text" placeholder="Actual price($)" values="" name="actual">
        <input type="text" placeholder="Special modification" values="" name="modification">

        <button type="submit">Register</button>
    </form>
    </div>
</div>
</nav>
</body>
</html>