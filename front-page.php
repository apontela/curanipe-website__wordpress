<?php get_header() ?>

<body>
  <!-- Navigation bar -->
  <nav class="navbar navbar-dark navbar-expand-lg">
    <a href="#">
      <img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="curanipe-surf logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.html">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.html">Eventos y Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.html">Noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contacto</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- Header -->
  <header>
    <img class="header__image header__image--home" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" alt="banner">
    <div class="header__content header__content--home">
      <h1 class="header__title--home">
        <?php the_field("banner_title") ?>
      </h1>
      <a href="#highlights" class="link link--tertiary header__icon">
        <i class="icon-arrow-down"></i>
      </a>
    </div>
  </header>

  <!-- Highlights section -->
  <section id="highlights" class="highlights">
    <h2>
      lo más destacado
    </h2>

    <div class="overlay__container">

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--1">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--2">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--3">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--4">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

    </div>
  </section>

  <!-- Latest events -->
  <section class="latest">

    <h2>últimos eventos</h2>
    <a class="link link--secondary link--center" href="events.html">Ver todos los eventos<i class="icon-arrow-right-circle"></i></a>

    <div class="highlight__container container-fluid">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--1 backgroundImage"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              <?php the_field("titulo_evento") ?>
            </h4>
            <p>
            <?php the_field("evento_texto") ?>
            </p>
            <a class="link link--primary " href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              título evento lorem ipsum dolor sit amet.
            </h4>
            <p>
              Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
              eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
            </p>
            <a class="link link--primary" href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--2 backgroundImage"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--3 backgroundImage"></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
          <div class="highlight__content">
            <h4>
              título evento lorem ipsum dolor sit amet.
            </h4>
            <p>
              Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
              eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
            </p>
            <a class="link link--primary" href="events_single.html">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- brands section -->
  <section class="brands">
    <img class="brands__banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands.png" alt="logos de marcas">
  </section>

  <!-- footer -->
  <footer class="backgroundImage">
    <div class="container">
      <div class="row">

        <div class="offset-xl-0 col-xl-2 offset-lg-0 col-lg-2 offset-md-0 col-md-2 offset-sm-0 col-sm-4 offset-3 col-6 footer__brandContainer">
          <img class="footer__brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
        </div>

        <nav class="offset-xl-1 col-xl-2 offset-lg-1 col-lg-2 offset-md-1 col-md-2 offset-sm-0 col-sm-4 offset-2 col-4 footer__navigation">
          <div class="footer__item"><a class="link--tertiary" href="team.html">Nosotros</a></div>
          <div class="footer__item"><a class="link--tertiary" href="events.html">Eventos y Galería</a></div>
          <div class="footer__item"><a class="link--tertiary" href="services.html">Servicios</a></div>
          <div class="footer__item"><a class="link--tertiary" href="news.html">Noticias</a></div>
        </nav>

        <div class="offset-xl-0 col-xl-3 offset-lg-0 col-lg-3 offset-md-0 col-md-3 offset-sm-0 col-sm-4 offset-0 col-6 footer__contact">
          <div class="footer__item">Contacto</div>
          <div class="footer__item footer__item--secondary"><i class="fab fa-whatsapp"></i> +56 9 81 965 127</div>
          <div class="footer__item footer__item--secondary">Síguenos <a class="link--tertiary" href=""><i class="fab fa-facebook-f"></i></a> <a class="footer__link link--tertiary" href=""><i class="fab fa-instagram"></i></a> </div>
        </div>

        <form class="offset-xl-0 col-xl-4 offset-lg-0 col-lg-4 offset-md-0 col-md-4 offset-sm-1 col-sm-10 offset-1 col-10 footer__form">

          <input type="text" class="form__input form-control" id="inputName" placeholder="Nombre">
          <input type="email" class="form__input form-control" id="inputMail" placeholder="Mail" aria-describedby="emailHelp">
          <input type="text" class="form__input form-control" id="inputMessage" placeholder="Mensaje">

          <button type="submit" class="form__button btn">Enviar</button>
        </form>

      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
</body>
</html>