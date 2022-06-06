<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/admin')}}">
              <i class="fas fa-home"></i>
              <span class="menu-title">&nbsp;&nbsp;Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fas fa-plus"> </i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;Creación&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
              <i class="fas fa-arrow-down"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/addcategory')}}">Agregar Categoria</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/addproduct')}}">Agregar Producto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/addslider')}}">Agregar Panel</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="fas fa-eye" size="9"></i>
              <span class="menu-title">&nbsp;&nbsp; Vista&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <i class="fas fa-arrow-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/categories')}}">Categoria</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/products')}}">Productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/sliders')}}">Panel</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/orders')}}">Ordenes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>