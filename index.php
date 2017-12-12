<!doctype html>
<html lang="en">
<head>
  <title>Projeto 4!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <!--slide carosel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/slide04.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slide05.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slide06.png" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lorem Ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <!--Menu navbar-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <!--cards-->
  <div class="container mt-5 pt-5">

    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/01.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/02.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4 ">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/03.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--jumbotron-->
  <div class="jumbotron mt-5 rounded-0">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <div class="d-flex justify-content-between align-items-center">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div>
  </div>

  <!--Formulario-->
  <div class="container">
    <h3 class="text-uppercase text-center">Formulario de contacto</h3>
    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit.</p>

    <div class="row">
      <div class="col-6">
        <form action="">
          <div class="form-group row">
            <label for="" class="col-2 col-form-label">Nome:</label>
            <input type="text" placeholder="Informe o seu nome..." class="form-control col-10">
          </div>

          <div class="form-group row">
            <label for="" class="col-2 col-form-label">Email</label>
            <input type="email" placeholder="Informe seu email..." class="form-control col-10">
          </div>

          <div class="form-group">
            <button class="btn btn-danger">Enviar</button>
          </div>
        </form>
      </div>

      <div class="col-6">

      </div>
    </div>
  </div>


  <section class="container">
    <p class="mt-5 pt-5 mb-5 text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p class="bg-primary text-white text-justify p-4 w-25 float-left mr-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum consequat metus, ut elementum ante gravida eu. In vulputate sit amet nisi in suscipit. Donec fringilla quam non mauris interdum, a dictum massa consectetur. Sed eget tempor nisi, in imperdiet lacus. Nunc quis ullamcorper urna. Nulla et turpis nec urna posuere euismod. Duis vel feugiat urna.</p>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>