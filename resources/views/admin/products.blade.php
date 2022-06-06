@extends('layouts.appadmin')

@section('title')
    Products
@endsection

@section('content')
{{Form::hidden('',$increment=1)}}
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Productos</h4>
              @if (Session::has('status'))
                              <div class="alert alert-success">
                                {{Session::get('status')}}    
                          </div>
                        @endif   
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Imagen</th>
                            <th>Nombre del producto</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                              <tr>
                                <td>{{$increment}}</td>
                                <td><img src="/storage/product_images/{{$product->product_image}}" alt=""></td>
                                <td>{{$product->product_name}}</td>
                                <td>S/{{$product->product_price}}</td>
                                <td>{{$product->product_category}}</td>
                                @if ($product->status == 1)
                                  <td>
                                    <label class="badge badge-success">Activo</label>
                                  </td>
                                    @else
                                    <td>
                                      <label class="badge badge-danger">Inactivo</label>
                                    </td>
                                @endif
                                
                                <td>
                                  <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_product/'.$product->id)}}'" >Editar</button>
                                <a href="/delete_product/{{$product->id}}" class="btn btn-outline-danger" id="delete">Eliminar</a>
                                  @if ($product->status == 1)
                                    <button class="btn btn-outline-warning" onclick="window.location='{{url('/unactivate_product/'.$product->id)}}'"  >Desactivar</button>
                                  @else
                                    <button class="btn btn-outline-success" onclick="window.location='{{url('/activate_product/'.$product->id)}}'" >Activar</button>
                                  @endif
                                  
                                </td>
                            </tr>    
                            {{Form::hidden('',$increment=$increment +1)}}
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
  <script src="{{asset('backend/js/data-table.js')}}"></script>
@endsection