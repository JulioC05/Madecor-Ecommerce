<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ URL::to('/') }}">LA ECONÓMICA</span></a>
      <div class="order-lg-last btn-group">
      <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="flaticon-shopping-bag"></span>
          <div class="d-flex justify-content-center align-items-center"><small>{{Session::has('cart')?Session::get('cart')->totalQty:0}}</small></div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(frontend/images/prod-1.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Bacardi 151</h4>
                        <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(frontend/images/prod-2.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Jim Beam Kentucky Straight</h4>
                        <p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
                    </div>
                </div>
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(frontend/images/prod-3.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Citadelle</h4>
                        <p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
              </div>
    </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ URL::to('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ URL::to('/about') }}" class="nav-link">Sobre Nosotros</a></li>
          <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ URL::to('/shop') }}">Productos</a>
            {{-- <a class="dropdown-item" href="{{ URL::to('/') }}">Single Product</a> --}}
            <a class="dropdown-item" href="{{ URL::to('/cart') }}">Carrito</a>
            <a class="dropdown-item" href="{{ URL::to('/checkout') }}">Checkout</a>
          </div>
        </li>
        
          <li class="nav-item"><a href="{{ URL::to('/contact') }}" class="nav-link">Contáctanos</a></li>
          @if (Session::has('client'))
          <li class="nav-item"><a href="{{ URL::to('/client_logout') }}" class="nav-link">Cerrar Sesión</a></li>
          @else
          <li class="nav-item"><a href="{{ URL::to('/client_login') }}" class="nav-link">Iniciar Sesión</a></li>
          @endif
          

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->