<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-s, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Elhobbit.css">
      <title >EL HOBBIT</title>
  </head>
  <body >
    
    <div class="container">
    <!--Linkeado con el header.php -->
      <?php include 'header.php';
      ?>

      <div class="container">
      <!-- Linkeado con el navbar.php -->
        <?php include 'navbar.php';
        ?>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-xl-12 offset-lg-1 offset-xl-0 offset-md-1 offset-sm-0 offset-1">
              <h1 id="centro">DESCUBRIREMOS PERSONAJES Y LUGARES DIFÍCILES DE OLVIDAR</h1>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 offset-xl-0 offset-md-2 offset-lg-3 offset-sm-1 offset-0">
              <aside>
                <img  id="imagenes" src="../imagenes/elhobbit.jpg.jpg" width="400" height="600">
              </aside>
            </div>
            <div class="col-xl-6 col-lg-6 offset-xl-0 offset-lg-3 offset-md-2 offset-sm-1 offset-0">
              <section>
                <img id="imagenes"  src="../imagenes/la comarca.jpg" width="400" height="600">
              </section> 
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12  offset-xl-0 offset-md-1 offset-lg-1 offset-sm-0 offset-1">
              <h1 id="centro">Y TAMBIÉN DESCUBRIREMOS EL SIGNIFICADO DE TENER UN HOGAR </h1>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xl-4 offset-xl-0 offset-lg-3 offset-md-3 offset-sm-2 offset-1">
              <iframe width="320" height="315" src="https://www.youtube.com/embed/sI8OQRXhcZE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-xl-4 offset-xl-0 offset-lg-3 offset-md-3 offset-sm-2 offset-1">
              <iframe width="320" height="315" src="https://www.youtube.com/embed/4SLBizx05Bo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-xl-4 offset-xl-0 offset-lg-3 offset-md-3 offset-sm-2 offset-1">
              <iframe width="320" height="315" src="https://www.youtube.com/embed/ZlOwYNS7-ec" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <!-- Linkeo con el footer-->
        <?php include 'footer.php';?>
        <div class="container">
          <div class="row">
            <div class="col-xl-12  offset-xl-0 offset-lg-0 offset-md-0 offset-sm-0 offset-2">
              <section>
                <form class="formulario">
                  <h4 class="muxho">FORMULARIO DE REGISTRO</h4>
                  <input id="control" type="text" name="nombres" id="nombres" placeholder="Introduzca un nombre">
                  <input id="control" type="text" name="apellidos" id="apellidos" placeholder="Introduzca sus apellidos">
                  <input id="control" type="email" name="email" id="email" placeholder="Introduzca su correo">
                  <input id="control" type="password" name="contraseña" id="contraseña" placeholder="Introduzca la contraseña">
                  <input class="boton" type="submit" value="Registrar">
                </form>
              </section>
            </div>
          </div>
        </div>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="//firebase/8.1.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="//firebase/8.1.1/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
  </body>
</html>
