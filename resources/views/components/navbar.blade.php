<nav class="navbar navbar-expand-md navbarCustom sticky-top" aria-label="Fourth navbar example">
    <div class="container-fluid">

      <img class="imgLogo" src="/img/logo3.png" alt="logo" data-aos="fade-right"  data-aos-duration="900">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mx-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ Route('home') }}">Home</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">I nostri servizi</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ Route('serviceByType', ['type'=> 'web']) }}">Web Developer</a></li>
              <li><a class="dropdown-item" href="{{ Route('serviceByType', ['type'=> 'sicurezza']) }}">Cybersecurity Expert</a></li>
              <li><a class="dropdown-item" href="{{ Route('serviceByType', ['type'=> 'hardware']) }}">IT Consulant</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ Route ('contacts') }}">Contatti</a>
          </li>


        </ul>

        <form role="search">
          <input class="form-control" type="search" placeholder="Cerca" aria-label="Search">
        </form>
        
      </div>
    </div>
  </nav>