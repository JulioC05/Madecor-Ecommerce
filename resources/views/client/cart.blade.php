@extends('layouts.app1')

@section('title')
    Carrito
@endsection

@section('content')
    


    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Mi Carrito</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>Product</th>
						     	<th>Price</th>
						     	<th style="width: 260px;">Quantity</th>
						     	<th>Total</th>
						     	<th>&nbsp;</th>
						    </tr>
						  </thead>
						<tbody>
						@if (Session::has('cart'))
							@foreach ($products as $product)
							<tr class="alert" role="alert">
								<td>
										<label class="checkbox-wrap checkbox-primary">
											<input type="checkbox" checked>
											<span class="checkmark"></span>
											</label>
									</td>
									<td>
										<div class="img" style="background-image: url('/storage/product_images/{{$product['product_image']}}');"></div>
									</td>
								<td>
									<div class="email">
										<span>{{$product['product_name']}}</span>
										<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
									</div>
								</td>
								<td>S/{{$product['product_price']}}</td>
								{!!Form::open(['action' => 'ClientController@updateqty', 'method' => 'POST'])!!}
								{{csrf_field()}}
									<td class="quantity" >
										<div class="input-group mb-3">
											<input type="number" name="quantity" class="quantity form-control input-number" value="{{$product['qty']}}" min="1" max="100" >
											
											<input type="hidden" name="id" value="{{$product['product_id']}}">
										</div>
										{{Form::submit('Update', ['class' => 'btn btn-success'])}}
									</td>
									
                   				{!!Form::close()!!}
							<td>S/{{$product['product_price']*$product['qty']}}</td>
								<td>
									<a href="/removeitem/{{$product['product_id']}}" class="close">
									<span aria-hidden="true"><i class="fa fa-close"></i></span>
									</a>
								</td>
						    </tr>
							@endforeach

						@else
							@if (Session::has('success'))
								@foreach (Session::get('success') as $message)
								<div class="alert alert-success">{{ $message }}</div>			
								@endforeach
							@endif

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

               

						    
						  </tbody>
						</table>
					</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>S/{{Session::get('cart')->totalPrice}}</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>S/0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Descuento</span>
    						<span>S/0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>S/{{Session::get('cart')->totalPrice}}</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
    	</div>
    </section>

  

@endsection

  
   