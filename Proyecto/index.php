<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/imageStyle.css">
  <link rel="stylesheet" href="css/textStyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">

  <title>Black Crown home</title>

  <!-- Bootstrap core CSS -->
  <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="home/css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Black Crown</a>
      <i class="fas fa-crown" href="index.php"> </i>
       <!--img src="images/crown.png"> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <!-- Sidebar Widgets Column -->
      <div class="col-md-3">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Menú</h5>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="index.php" class="menu">
                <i class="fas fa-home"> Inicio </i> 
                </a>
              </li>
              <li><i class="fas fa-hashtag"> Explorar</i></li>
              <li><i class="fas fa-bell"> Notificaciones</i></li>
              <li><i class="fas fa-envelope"> Mensajes</i></li>
              <li><i class="fas fa-bookmark"> Guardados</i></li>
              <li><i class="fas fa-bookmark"> Listas</i></li>
              <li><i class="fas fa-user"> Perfil</i></li>
              <li><i class="fas fa-ellipsis-h"> Mas opciones</i></li>
            </ul>
          </div>

          <button type="button" class="btn btn-dark">Publicar</button>
        </div>

      </div>

      <!-- Blog Entries Column -->
      <div class="col-md-6">

        <h1 class="my-4">
          Publicaciones recientes
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="images/post1.jpeg" alt="Card image cap">
          <div class="card-body">
            <div>
              <img src="images/avatar1.jpeg" class="avatar"> 
              <a href="#">@abbybb</a>
            </div>
            
            <h2 class="card-title">Mi lindo bebe esta nadando</h2>
            <p class="card-text">
              Hoy fui a la piscina publica con morgan y sin darme cuenta mi bebe nadaba como un angel sobre el agua <a href="#">#pug </a><a href="#">#amante de los perros</a>
            </p>
            <a href="post/post.php" class="btn btn-dark">Leer más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publicado el 15 de Marzo, 2020
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="images/post2.gif" alt="Card image cap">
          <div class="card-body">
            <div>
              <img src="images/avatar2.jpg" class="avatar" >
              <a href="#">@petterArts</a> 
            </div>
            
            <h2 class="card-title">Probando tableta de dibujo</h2>
            <p class="card-text">Hoy me llego una tableta de dibujo nueva asi que hice un garabato en lo que pedia algo de comer <a href="">#art </a> <a href="">#juguete nuevo </a> <a href=""> #art is magic</a> </p>
            <a href="#" class="btn btn-dark">Leer más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
           Publicado el 24 de Marzo, 2020
          </div>
        </div>

        <!-- Blog Post -->

        <div class="card mb-4">
          <img class="card-img-top" src="images/post3.webp" alt="Card image cap">
          <div class="card-body">
            <div>
              <img src="images/avatar3.jpg" class="avatar" >
              <a href="#">@james_06</a>
            </div>
            
            <h2 class="card-title">Lindas vacaciones</h2>
            <p class="card-text"> Mientras disfrutaba de mis vacaciones en los cabos decidi tomar una foto del recuerdo <a href="">#los cabos </a> <a href=""> #vacaciones </a></p>
            <a href="#" class="btn btn-dark">Leer más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publicado el 1 de abril, 2020
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Antiguo</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Nuevo &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-3">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">¿Qué hay de nuevo?</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
              </span>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Black Crown 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
