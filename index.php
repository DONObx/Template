<!DOCTYPE html>
<html>
<head>
	<title>SITE</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<header class="sticky-top">
		<div>
		<nav class="nav navbar navbar-expand-lg navbar-light">
		  <a id="logo" class="navbar-brand" href="#"><img src="image/logo" width="350px" class="d-inline-block align-top" alt="nana-gourmande" loading="lazy"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a onmouseover="rose(this)" onmouseout="black(this)" class="pad nav-link" href="#">HOME</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a onmouseover="rose(this)" onmouseout="black(this)" class="pad nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          PRODUITS
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a onmouseover="rose(this)" onmouseout="black(this)" class="dropdown-item" href="#">MINI PÂTISSERIES</a>
		          <a onmouseover="rose(this)" onmouseout="black(this)" class="dropdown-item" href="#">GÂTEAU</a>
		          <a onmouseover="rose(this)" onmouseout="black(this)" class="dropdown-item" href="#">TIRAMISUS</a>
		          <a onmouseover="rose(this)" onmouseout="black(this)" class="dropdown-item" href="#">CANDY BARS</a>
		          <a onmouseover="rose(this)" onmouseout="black(this)" class="dropdown-item" href="#">BOXES SPECIALES</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a onmouseover="rose(this)" onmouseout="black(this)" class="pad nav-link" href="#">A PROPOS</a>
		      </li>
		      <li class="nav-item">
		        <a onmouseover="rose(this)" onmouseout="black(this)" class="pad nav-link" href="#">PARTENARIATS</a>
		      </li>
		      <li class="nav-item">
		        <a onmouseover="rose(this)" onmouseout="black(this)" class="pad nav-link" href="#">CONTACT</a>
		      </li>
		    </ul>
		  </div>
		  <a id="cart" class="navbar-brand" href="#"><img src="image/cart" width="95px" alt="cart"></a>
		</nav>
		</div>
	</header>
	<div class="hero-image">
	  <img src="image/hero-img2" class="img-fluid" alt="hero image" width="100%">
	  <h1 id="title">A Propos</h1>
	  <h1 id="title-text">Sois au courant de<br>tout ce que je sors!</h1>
	  <img src="image/slash" class="slash img-fluid" alt="slash" width="100">
	</div>
	<div class="container">
	<div class="row">
		<div class="col-xl-3 col-md card" style="width: 18rem;">
		  <img src="image/FB" class="icon card-img-top" alt="facebook">
		  <div class="card-body">
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
		<div class="col-xl-3 col-md card" style="width: 18rem;">
		  <img src="image/INSTA" class="icon card-img-top" alt="instagram">
		  <div class="card-body">
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
		<div class="col-xl-3 col-md card" style="width: 18rem;">
		  <img src="image/LI" class="icon card-img-top" alt="linked in">
		  <div class="card-body">
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		</div>
	</div>
	</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>