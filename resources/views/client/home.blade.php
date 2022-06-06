@extends('layouts.app1')

@section('title')
    Home
@endsection

@section('content')
    
	<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">

		@foreach ($sliders as $slider)
	      <div class="hero-wrap" style="background-image: url('/storage/slider_images/{{$slider->slider_image}}');" data-stellar-background-ratio="0.5">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2"> {{$slider->description1}}</h1>
	              <h1 class="subheading mb-4">{{$slider->description2}}</h1>
	              {{-- <p><a href="#" class="btn btn-primary">View Details</a></p> --}}
	            </div>

	          </div>
	        </div>
	      </div>
		  @endforeach
</section>
	<!--    {{--   <div class="hero-wrap" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div> --}}
	    </div>
    </section>-->
 <!-- <div class="hero-wrap" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-8 ftco-animate d-flex align-items-end">
				<div class="text w-100 text-center">
					<h1 class="mb-4"><span>¿Aburrido de tomar lo mismo? !Ya no más¡</span>.</h1>
					<h2 class="" style="-webkit-text-fill-color: #b5b72a;">!Nuevos Productos ¡</h2>
					<p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
				</div>
			</div>
			</div>
		</div>
		</div>  -->
		<section class="ftco-intro">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex">
						<div class="intro d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-support"></span>
							</div>
							<div class="text">
								<h2> Número para Pedidos</h2>
								<p>	+51 985886450
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="intro color-1 d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-cashback"></span>
							</div>
							<div class="text">
								<h2>Garantía</h2>
								<p>Para todos sus productos</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="intro color-2 d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-free-delivery"></span>
							</div>
							<div class="text">
								<h2>Delivery </h2>
								<p>Gratis - Por Esta Cuarentena</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(frontend/images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
	          <div class="heading-section">
	          	<span class="subheading">Desde 2011</span>
	            <h2 class="mb-4">LA ECONÓMICA</h2>

	            <p>La licorería La Económica fue fundada en el año 2011 en san Gabriel, distrito de Villa María del Triunfo por medio de la necesidad de vender variedad de productos. Desde el comienzo se enfocaron en brindar buenos productos de calidad como también una buena atención al cliente, realizando promociones y realizar descuentos. Con el transcurso de los años la licorería incorporo nuevos productos y a utilizar pagos por tarjeta para brindar una solución a las necesidades del cliente.</p>
	            <p class="year">
	            	<strong class="number" data-number="09">0</strong>
		            <span>Años de experiencia en negocios</span>
	            </p>
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/cateron.jpg);"></div>
							<h3>Ron</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/catewhisky.jpg);"></div>
							<h3>Whisky</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/catevodka.jpg);"></div>
							<h3>Vodka</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/catevinos.jpg);"></div>
							<h3>Vinos</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/catepisco.jpg);"></div>
							<h3>Pisco</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(frontend/images/cervezacate.jpg);"></div>
							<h3>Cervezas</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Nuestras ofertas</span>
            <h2>Productos</h2>
          </div>
        </div>
				<div class="row">
					@foreach ($products as $product)	
						 
							<div class="col-md-3 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('/storage/product_images/{{$product->product_image}}');">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									
									<div class="text text-center">
									<span class="sale">Sale</span>
										
										<span class="category"> </span>  
										<h2>{{$product->product_name}}</h2>
										
										<p class="mb-0"><span class="price">S/{{$product->product_price}}</span></p>
									</div>
								</div>
							</div>
						 
					@endforeach
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<a href="{{ URL::to('/shop') }}" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
{{--   
    <section class="ftco-section testimony-section img" style="background-image: url(frontend/images/bg_4.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(frontend/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(frontend/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(frontend/images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(frontend/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(frontend/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 --}}

		
   {{--  <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_1.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> 23 April 2020</p>
              	</div>
                <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_2.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> 23 April 2020</p>
              	</div>
                <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_3.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> 23 April 2020</p>
              	</div>
                <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_4.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> 23 April 2020</p>
              	</div>
                <h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	 --}}

    

@endsection