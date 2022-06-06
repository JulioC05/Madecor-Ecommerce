@extends('layouts.app1')

@section('title')
	Sobre Nosotros
@endsection

@section('content')
 
<section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
			<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ URL::to('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sobre Nosotros<i class="fa fa-chevron-right"></i></span></p>
		  <h2 class="mb-0 bread">Sobre Nosotros</h2>
		</div>
	  </div>
	</div>
  </section>
 
	 

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
    						<p>Desde  7.50</p>
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
                <h2 class="mb-4">Misión</h2>
                <span> 
                    Ser el market de licores más reconocido a nivel nacional por su variedad, calidad de productos y servicios
                </span>
                <h2 class="mb-4">Visión</h2>
                <span> 
                    Brindar a nuestros clientes la más variada selección de licores importados y nacionales, ofreciendo calidad en nuestros productos y el mejor servicio para satisfacer los gustos más exigentes.</span>
	             
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb">
			 
		</section>

		 
  
    <section class="ftco-section testimony-section img" style="background-image: url(frontend/images/bg_2.jpg);">
    	 
    </section>

 
    

@endsection