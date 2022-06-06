@extends('layouts.app1')

@section('title')
    Shop
@endsection

@section('content')
    

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ URL::to('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Productos</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row mb-4">
            @if (Session::has('success'))
								@foreach (Session::get('success') as $message)
								<div class="alert alert-success">{{ $message }}</div>			
								@endforeach
							@endif

              @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
							<div class="col-md-12 d-flex justify-content-between align-items-center">

								<h4 class="product-select">Categorías</h4>

						<!--	<a href="{{URL::to('/shop')}}" class="{{(request()->is('shop')?'active':'')}}">-->
								<select class="selectpicker" multiple></a>
									@foreach ($categories as $category)
									<option>{{$category->category_name}}</option>
									@endforeach  
								  </select>
								  
							</div>
						</div>
						<div class="row">
						
							@foreach ($products as $product)
								
								<div class="col-md-4 d-flex">
									<div class="product ftco-animate">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url('/storage/product_images/{{$product->product_image}}');">
											<div class="desc">
												<p class="meta-prod d-flex">
													<a href="/addToCart/{{$product->id}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
													<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
													<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
												</p>
											</div>
										</div>
										<div class="text text-center">
											<span class="sale">Sale</span>				
											<span class="category">{{$product->product_category}}</span>
											<h2>{{$product->product_name}}</h2>
											<p class="mb-0"><span class="price">S/{{$product->product_price}}</span></p>
										</div>
									</div>
								</div>
								
							@endforeach
						
						</div>
						<div class="row mt-5">
		          
		        </div>
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categorias</h3>
                <ul class="p-0">
					@foreach ($categories as $category)

				<li><a href="/view_by_cat/{{$category->category_name}}">{{$category->category_name}}<span class="fa fa-chevron-right"></span></a></li> 
					@endforeach 
				<li><a href="/shop">Todos<span class="fa fa-chevron-right"></span></a></li> 	
	                 
                </ul>
              </div>
            </div>

           {{--  <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(frontend/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(frontend/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(frontend/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div> --}}
					</div>
				</div>
			</div>
		</section>

  

@endsection

  