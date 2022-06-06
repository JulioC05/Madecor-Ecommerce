@extends('layouts.login')

@section('title')
	LOGIN
	
@endsection

@section('content')


	
<div class="limiter">
	<div class="container-login100" style="background-image: url('frontend/images/bg_4.jpg');">
		<div class="wrap-login100">
			@if (Session::has('error'))
					<div class="alert alert-danger">
						{{Session::get('error')}}
					</div>			
			@endif
			{{-- @if (Session::has('status'))
					<div class="alert alert-success">
						{{Session::get('status')}}
					</div>			
			@endif --}}
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>	
			@endif
		<form action="{{url('/accessaccount')}}" method="POST" class="login100-form validate-form">
			 {{ csrf_field() }}

				
			 <a href="{{URL::to('/')}}"> 
				<span class="login100-form-logo">
					<i class="zmdi zmdi-account"></i>
				</span>
			{{-- 	<img src="frontend/login/images/la_economica.jpg" style="width: 250px;
				height: 150px;
				text-align: center;
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 100%;"> --}}
			</a>
				<span class="login100-form-title p-b-34 p-t-27">
					Iniciar Sesión
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Ingresar nombre de usuario">
					<input class="input100" type="email" name="email" placeholder="Email">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>

				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">
						Recuerdame
					</label>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn"  type="submit">
						Login
					</button>
				</div>

				<div class="text-center p-t-90 txt1">
					No tienes una cuenta ?
					<a class="txt1" href="/signup">
						 Registrate aqui
					</a>
				</div>
				<div class="text-center p-t-10">
					<a class="txt1" href="/">
						Volver a {{ config('app.name') }}
					</a>
				</div>
			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

	
@endsection
