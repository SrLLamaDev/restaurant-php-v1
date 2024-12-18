<!doctype html>
<!--bs-5$ lo que genere-->
<html lang="en">
  <head>
    <title>SrLLamaDev's Restaurant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
  
    <!--SECCION DE MENU-->
      <!--bs5-navbar-minimal-ul lo que genere-->
    <nav id="inicio" class="navbar navbar-expand-lg navbar-dark" style="background-color: #001f3f">
        <div class="container">

        <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> SrLLamaDev's Restaurant </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#inicio" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Begin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Today Menu
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#chefs" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Chefs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonios" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Test
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#horario" style="color: #fffffb; text-decoration: none;" 
                onMouseOver="this.style.cssText='color: #faff5e; text-decoration: underline;'" 
                onMouseOut="this.style.cssText='color: #fffffb; text-decoration: none;'">
                Schedule
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    
    <!--BANNER-->
    <section class="container-fluid p-0">
      <div class="banner-img" style="position:relative; background:url('images/imagen2.webp') center/cover no-repeat; height:400px;">
        <div class="banner-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; color: #fffffb">
          <h1>Restaurant project: PHP-mysql-html-css-bootstrap-js</h1>
          <p>Restaurant with the best flavor, delicious daddy!</p>
          <a href="#menu" class="btn" 
            style="background-color: #001f3f; color: #fffffb; border: none; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; transition: background-color 0.3s, transform 0.2s;" 
            onmouseover="this.style.backgroundColor='#003366'; this.style.transform='scale(1.05)'; this.style.color='#f1f1f1';" 
            onmouseout="this.style.backgroundColor='#001f3f'; this.style.transform='scale(1)'; this.style.color='#fffffb';">
            Menus
          </a>
        </div>
      </div>
    </section>
    <!--FIN BANNER-->

    <section id="id" class="container mt-4 text-center">
      <div class="jumbotron text-white" style="background-color: #001f3f;">
        <br/>
        <h2>Welcome to the restaurant</h2>
        <p>Discover the best culinary experience in the world</p>
        <br/>
      </div>
    </section>

    <!--CHEFS-->
    <section id="chefs" class="container mt-4 text-center">
      <h2>About Chefs</h2>
      
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="images/colaboradores/aa.webp" class="card-img-top" alt="Chef 1">
          </div>
          
          <div class="card-body">
            <h5 class="card-title">Chef 1</h5>
            <p class="card-text">El Chef Macmani</p>
            <div class="social-icons mt-3">
              <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
          
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="images/colaboradores/bb.webp" class="card-img-top" alt="Chef 1">
          </div>
          
          <div class="card-body">
            <h5 class="card-title">Chef 2</h5>
            <p class="card-text">El Chef Quispe</p>
            <div class="social-icons mt-3">
              <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
          
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="images/colaboradores/ccc.webp" class="card-img-top" alt="Chef 1">
          </div>
          
          <div class="card-body">
            <h5 class="card-title">Chef 3</h5>
            <p class="card-text">El Chef Riquito</p>
            <div class="social-icons mt-3">
              <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    
    <header>
      <!-- place navbar here -->
      <h1>asd</h1>
    </header>

    <!--TESTIMONIOS-->
    <section id="testimonios" class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-4">Testimonios</h2>
        <div class="row">

          <div class="col-md-6 d-flex">
            <div class="card mb-4 w-100">
              <div class="card-body">
                <p class="card-text"> Riquito papitoy! </p>
              </div>
              <div class="card-footer text-muted">
                Oscar XD
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex">
            <div class="card mb-4 w-100">
              <div class="card-body">
                <p class="card-text"> Riquito papitoy! </p>
              </div>
              <div class="card-footer text-muted">
                Oscar XD
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--MENU-->
    <section id="menu" class="container mt-4">
      <h2 class="text-center"> Menu (nuestra recomendacion) </h2>
      <br>
      <div class="row row-cols-1 row-cols-md-4 g-4">

        <div class="col d-flex">
          <div class="card">
            <img src="images/menu/caldo.jpeg" alt="caldo" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Caldo de Maiz</h5>
              <p class="card-text small"><strong>Ingredientes:</strong>Arroz, Sal, Agua</p>
              <p class="card-text"> <strong>Precio:</strong> $3.99</p>
            </div>
          </div>
        </div>
        
        <div class="col d-flex">
          <div class="card">
            <img src="images/menu/caldo2.jpeg" alt="caldo2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Caldo Semola</h5>
              <p class="card-text small"><strong>Ingredientes:</strong>Arroz, Sal, Agua</p>
              <p class="card-text"> <strong>Precio:</strong> $3.99</p>
            </div>
          </div>
        </div>

        <div class="col d-flex">
          <div class="card">
            <img src="images/menu/caldo3.jpeg" alt="caldo3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Caldo de Huevo</h5>
              <p class="card-text small"><strong>Ingredientes:</strong>Arroz, Sal, Agua</p>
              <p class="card-text"> <strong>Precio:</strong> $3.99</p>
            </div>
          </div>
        </div>

        <div class="col d-flex">
          <div class="card">
            <img src="images/menu/caldo.jpeg" alt="caldo4" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Caldo de Carne</h5>
              <p class="card-text small"><strong>Ingredientes:</strong>Arroz, Sal, Agua</p>
              <p class="card-text"> <strong>Precio:</strong> $3.99</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--CONTACTO-->
    <section id="contacto" class="container mt-4">
      <h2>Contacto</h2>
      <p>Estamos aqui para servirle</p>
      <form action="?" method="post">

        <div class="mb-3">
          <label for="name">Nombre</label><br>
          <input class="form-control" type="text" name="nombre" placeholder="Esxribe tu nombre..." required>
        </div>

        <div class="mb-3">
          <label for="email">Correo Electronico</label><br>
          <input class="form-control" type="email" name="correo" placeholder="Escribe tu correo..." required>
        </div>

        
        <div class="mb-3">
          <label for="message">Mensaje</label><br>
          <textarea class="form-control" name="mensaje" id="message" cols="50" rows="6"></textarea><br>
        </div>
        
        <div>
          <input class="btn btn-primary" type="submit" value="Enviar Mensaje">
        </div>

      </form>
    </section>
    <br><br>
    <!--HORARIO-->
    <div id="horario" class="text-center bg-light p-4">
      <h3 class="mb-4">Horario de atencion</h3>

      <div>
        <p><strong>Lunes a Viernes</strong></p>
        <p><strong>11:00 a.m. - 10:00 p.m.</strong></p>
      </div>

      <div>
        <p><strong>Sabado</strong></p>
        <p><strong>12:00 a.m. - 5:00 p.m.</strong></p>
      </div>

      <div>
        <p><strong>Domingo</strong></p>
        <p><strong>07:00 a.m. - 2:00 p.m.</strong></p>
      </div>

    </div>
    
    <footer class="bg-dark text-light text-center py-3">
      <!-- place footer here -->
      <!-- Sirve para vision de la empresa, copyrht -->
      <p> &copy; 2024 todos los derechos reservados UwU - Onichan</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
