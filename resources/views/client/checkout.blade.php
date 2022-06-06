@extends('layouts.app1')

@section('title')
    Checkout
@endsection

@section('content')
    

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('frontend/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Checkout</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
		@if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <ul>
                            @foreach (session()->get('success') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				@if(Session::has('error'))
				<div class="alert alert-danger">
					{{Session::get('error')}}
					{{Session::put('error', null)}}
				</div>
				@endif
    		<div class="row justify-content-center">
			
				
          <div class="col-xl-7 ftco-animate">
		  {!!Form::open(['action' => 'PaymentController@pay', 'method' => 'POST', 'id' => 'paymentForm'])!!}
				{{csrf_field()}}
		  <label for="">Select the desired payment platform:</label>
		  <div class="form-group" id="toggler">
		  <div class="btn-group btn-group-toggle" data-toggle="buttons"> 
				@foreach ($paymentPlatforms as $paymentPlatform)
					<label class="btn btn-outline-secondary rounded m-2 p-1" data-target="#{{ $paymentPlatform->name }}Collapse" data-toggle="collapse">
						<input type="radio" name="payment_platform" value="{{ $paymentPlatform->id }}" required>
						<img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
					</label>
				@endforeach
		  </div>
		  @foreach ($paymentPlatforms as $paymentPlatform)
			<div id="{{ $paymentPlatform->name }}Collapse" class="collapse" data-parent="#toggler">
				@includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
			</div>
		  @endforeach
		  
		  <div class="col-md-12">
	                <div class="form-group">
						<p><button type="submit" id="payButton" class="btn btn-primary py-3 px-4">Buy now</button></p>
	                </div>
                </div>
				{!!Form::close()!!}
		</div>
		
				</div>
				
				<div class="col-xl-5">
	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-12 d-flex">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>S/{{Session::get('cart')->totalPrice}}</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>S/0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>S/0.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>S/{{Session::get('cart')->totalPrice}}</span>
		    					</p>
								</div>
	          	</div>

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
    	</div>
    </section>

@endsection



  

    