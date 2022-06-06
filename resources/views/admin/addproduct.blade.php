@extends('layouts.appadmin')

@section('title')
    Agregar Producto
@endsection

@section('content')
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Crear Producto</h4>

                @if (Session::has('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}    
                    </div>
                @endif   
                
                @if (Session::has('status1'))
                     <div class="alert alert-danger">
                    {{Session::get('status1')}}   
                     </div>
                @endif

                    {!!Form::open(['action' => 'ProductController@saveproduct', 'class' => 
                    'cmxform', 'method' => 'POST', 'id' => 'commentForm' , 'enctype' => 'multipart/form-data'])!!}
                        {{csrf_field()}}
                            <div class="form-group">
                                {{Form::label('', 'Nombre del Producto', ['for' => 'cname'])}}
                                {{Form::text('product_name', '', ['class' => 'form-control', 'minlength' => '2'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('', 'Precio del Producto', ['for' => 'cname'])}}
                                {{Form::number('product_price', '', ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('', 'Categoria del Producto', ['for' => 'cname'])}}
                                {{Form::select('product_category',$categories, null, ['placeholder' => 'Seleccionar Categoria', 'class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('', 'Imagen del Producto', ['for' => 'cname'])}}
                                {{Form::file('product_image', ['class' => 'form-control'])}}
                            </div>
                       

                            {{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
@endsection