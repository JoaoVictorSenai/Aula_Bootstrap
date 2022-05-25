<!-- Bootstrap https://getbootstrap.com/ -->
<!-- para visualizar, abra o navegador> ctrl+O > abra index.php> delete o 
	endereço de C: ate htdocs e mude para localhost-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site Bootstrap</title>
	<!-- Bootstrap -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color: #F4A460;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	    	<img src="images/logo.png" alt="" width="60" class="d-inline-block align-text-top">
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Empresa</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Serviços
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">UX & UI</a></li>
	            <li><a class="dropdown-item" href="#">Mobile</a></li>
	            <li><a class="dropdown-item" href="#">Sistemas</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link">Fale Conosco</a>
	        </li>
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Buscar</button>
	      </form>
	    </div>
	  </div>
	</nav>

<!-- aqui entra o slide e inserindo o slide abaixo -->

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/img-01.jpg" class="d-block w-100" alt="Foto de Praia 1 - Photo by Camille Minouflet on Unsplash">
	    </div>
	    <div class="carousel-item">
	      <img src="images/img-02.jpg" class="d-block w-100" alt="Foto de Praia 2 - Photo by Elizeu Dias on Unsplash">
	    </div>
	    <div class="carousel-item">
	      <img src="images/img-03.jpg" class="d-block w-100" alt="Foto de Praia 3 - Photo by Sean Oulashin on Unsplash">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

<!-- Aqui começa o main -->

	<main>
		<div class="container">
			<h1>Nossas Praias</h1>
			<!-- aqui entram os cards -->
			<div class="row row-cols-1 row-cols-md-2 g-4">
			  <div class="col">
			    <div class="card">
			      <img src="images/img-card-01.jpg" class="card-img-top" alt="Photo by Pedro Monteiro on Unsplash">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="images/img-card-02.jpg" class="card-img-top" alt="Photo by Ethan Robertson on Unsplash">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="images/img-card-03.jpg" class="card-img-top" alt="Photo by Rowan Heuvel on Unsplash">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			      <img src="images/img-card-04.jpg" class="card-img-top" alt="Photo by frank mckenna on Unsplash">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</main>

	<!-- Aqui começa o footer -->

	<footer class="mt-5">
		<div class="container">
			&copy; Todos os direitos reservados.
		</div>
	</footer>

</body>
</html>