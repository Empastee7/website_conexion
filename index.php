<?php
session_start();
$agendaUrl = isset($_SESSION['user_name']) ? 'View/html/agendar.php' : 'View/html/login.php';
$logoutSuccess = isset($_GET['logout']) && $_GET['logout'] == 'success';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Agregar Titulo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Conexión Perfecta | Agenda tu cita de billar</title>
</head>
<body>
    <header class="header">
        <nav class="navegation">
            <div class="vacio"></div>
            <h2 class="logo">Conexión Perfecta</h2>
            <div class="info">
                <a class="in in1" href="#">Inicio</a>
                <a class="in in2" href="#">Nosotros</a>
                <a class="in in3" href="<?php echo $agendaUrl; ?>">Agenda tu cita</a>
            </div>
            <div class="social">
              <a href="https://www.instagram.com/juan.no.15/" target="_blank" class="hover:underline me-4 md:me-6"><i class="fa-brands fa-instagram"></i></a>
              <a href="http://www.youtube.com/@juandavidmalaverorganista8132" target="_blank" class="hover:underline me-4 md:me-6"><i class="fa-brands fa-youtube"></i></a>
              <a href="https://twitter.com/JUANDAVIDMALA12" target="_blank" class="hover:underline me-4 md:me-6"><i class="fa-brands fa-x-twitter"></i></a>
              <?php if (isset($_SESSION['user_name'])): ?>
                    <a href="View/html/account.php" class="boton-mi-cuenta"><i class="fa-solid fa-user"></i>Mi cuenta</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <div class="calculate">
    <section class="pagprin">
        <div class="contenido">
            <div class="logo2">
            <?php if (isset($_SESSION['user_name'])): ?>
                        <h3>Bienvenido/a, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h3>
                    <?php else: ?>
                        <h3></h3>
                    <?php endif; ?>
                <h1 class="part1 logogrand">Conexión</h1>
                <h1 class="part2 logogrand">Perfecta</h1>
            </div>
            <p>¡Agendar tu cita para jugar billar ahora es mas facil!</p>
            <a href="<?php echo $agendaUrl; ?>" class="btnprin">Agenda Ya</a>
        </div>
    </section>
    </div>

    <div class="carrusell">
        <h1 class="news">Noticias</h1>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="View/assets/prueba1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Ofertas de Primavera</h1>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis, nostrum laboriosam ducimus earum id. Reprehenderit quos autem quia quibusdam tempore, impedit, et reiciendis facilis, quae obcaecati animi sapiente asperiores?</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="View/assets/prueba2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Nueva Sede</h1>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda modi consectetur, eius enim cumque magni ut voluptatibus nihil, itaque ipsum deserunt voluptatem rem dolorum ipsa necessitatibus! Eligendi dolore libero ullam.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="View/assets/prueba3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Descuentos del 15% en licores</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error totam tenetur officia laborum mollitia qui ad ea, consectetur exercitationem tempore corporis nobis laudantium hic perferendis nisi fuga cum eos? Blanditiis.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <a class="news2" href="#"><h5>Ver todas las noticias</h5></a>
    </div>

    <section class="segpag">
        <div class="cosas1">

            <div class="informacion3">
              <img src="" class="img-fluid" alt="...">
                <div class="texto">
                    <h2>En mantenimiento</h2>
                    <p>Disponible proximamente... </p>
                </div>
            </div>

            <div class="informacion3">
                <img src="View/assets/Ubicación.jpg" class="img-fluid" alt="...">
                <div class="texto">
                    <h2>Ubicación</h2>
                    <p><a href="#">Descubre mas <i class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>
            
        </div>
        <div class="cosas2">
            <div class="informacion3">
                <img src="View/assets/Servicios.jpg" class="img-fluid" alt="...">
                <div class="texto">
                    <h2>Servicios</h2>
                    <p><a href="#">Descubre mas <i class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>

            <div class="informacion3">
                <img src="View/assets/Horario.png" class="img-fluid" alt="...">
                <div class="texto">
                    <h2>Horario</h2>
                    <p><a href="#">Descubre mas <i class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="suscribirse">
        <h2 class="suscribe-logo">Mantente informado</h2>
        <p class="suscribe_info">No te pierdas de las ultimas novedades del mundo del billar</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Suscribete</button>
    </div>
    <!-- Background -->

    <div id="video-container">
        <video id="video-background" autoplay muted loop>
            <source src="View/assets/Video1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div id="video-overlay"></div>
    </div>

    <!-- Menu Lateral -->

    <div class="offcanvas fondox3 offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h2 class="offcanvas-title" id="offcanvasRightLabel">Suscríbete a Conexión Perfecta</h2>
        </div>
        <div class="offcanvas-body">
            <form class="row g-3" method="POST" id="subscriptionForm">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Dirección</label>
                  <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Teléfono</label>
                  <input type="number" class="form-control" id="inputAddress2" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Barrio</label>
                  <select id="inputState" class="form-select" required>
                    <option selected>Ferias</option>
                    <option>Minuto de Dios</option>
                  </select>
                </div>
                <div class="col-12">
                  <a class="terms" href="#">Términos y Condiciones</a>
                  <div class="form-check">
                    <input type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                      Acepto los términos y condiciones
                    </label>
                  </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        Suscribirse
                    </button>
                </div>
              </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Te has Suscrito</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Gracias por suscribirse a nuestros Servicios
            </div>
          </div>
        </div>
    </div>

    <div id="splash-screen">
        <img src="View/assets/prueba1.jpg" alt="Logo de la Empresa" id="logo">
    </div>

    <!-- Footer -->
<footer class="text-center text-lg-start fondito textito --bs-gray-900">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Mantente informado de las ultimas novedades con nuestras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-youtube"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa-brands fa-x-twitter"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Conexión Perfecta
          </h6>
          <p>
          Domina el arte del billar: reserva tu mesa y perfecciona tu técnica en un ambiente exclusivo.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Servicio al cliente
          </h6>
          <p>
            <a href="#!" class="text-reset">Mi cuenta</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Atención al cliente</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tarjetas de regalo</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Compañia
          </h6>
          <p>
            <a href="#!" class="text-reset">Sobre nosotros</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Empleo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Satisfacción garantizada</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Av. El Dorado #103, Bogotá </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            ConexiónPerfecta@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +57 302 404 7788 </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright
    <p class="text-reset fw-bold">Conexión Perfecta</p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<?php if ($logoutSuccess): ?>
    <div id="myModal" class="modal1">
        <div class="modal-content1">
            <span class="close"></span>
            <p><i class="fa-solid fa-check"></i> Sesión cerrada con éxito</p>
        </div>
    </div>
    <?php endif; ?>

    <script>
        var modal = document.getElementById("myModal");

        var span = document.getElementsByClassName("close")[0];

        function fadeInModal() {
            modal.classList.add('fade-in');
        }

        function fadeOutModal() {
            modal.classList.add('fade-out');
            setTimeout(function() {
                modal.style.display = "none";
                window.location.href = 'index.php';
            }, 1000);
        }
        span.onclick = function() {
            fadeOutModal();
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                fadeOutModal();
            }
        }

        <?php if ($logoutSuccess): ?>
        window.onload = function() {
            fadeInModal();
            setTimeout(function() {
                fadeOutModal();
            }, 3000);
        }
        <?php endif; ?>
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="View/js/modal.js"></script>
    <script src="View/js/Pantalla.js"></script>
</body>
</html>