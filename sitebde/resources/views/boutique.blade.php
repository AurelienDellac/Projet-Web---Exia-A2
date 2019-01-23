<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/boutique.css" media="all"/>

    <title>Boutique</title>
</head>
<body>
    

@extends('layout')

@section('content')
<aside>
<form>
  <p>Catégorie :</p>
  <div>
    <input type="radio" id="catégorieChoix1"
     name="catégorie" value="catégorieChoix1">
    <label for="catégorieChoix1">Vetement</label><br>

    <input type="radio" id="catégorieChoix2"
     name="catégorie" value="catégorieChoix2">
    <label for="catégorieChoix2">Accessoires</label> <br>

    <input type="radio" id="catégorieChoix3"
     name="catégorie" value="catégorieChoix3">
    <label for="catégorieChoix3">Billets</label> <br>	
  </div>
  <div>
    <button type="submit">Envoyer</button>
  </div>
</form>
</aside>

<div class='displayprod'>
	<img src="images/produits/pull.png", class='prodpic' />
		<div class='price'> 20€ </div>
		<div class='description'> 
			<strong>Pull</strong></br>
			Ce pull est idéal pour la team JUL.
		</div>
	</div>  



<div class='displayprod'>
	<img src="images/template/logoInvert.png", class='prodpic' />
		<div class='price'> 20€ </div>
		<div class='description'> 
			<strong>Rouge</strong></br>
			Ce pull est idéal pour la team JUL.
		</div>
	</div>
  
  @stop

</body>
</html>
