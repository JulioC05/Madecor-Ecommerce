@extends('layouts.appadmin')

@section('title')
    Sliders
@endsection

@section('content')
{{Form::hidden('',$increment=1)}}
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Sliders</h4>
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
                            <th>Orden #</th>
                            <th>Imagen</th>
                            <th>Descripción #1</th>
                            <th>Descripción #2</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sliders as $slider)
                              <tr>
                                <td>{{$increment}}</td>
                                <td><img src="/storage/slider_images/{{$slider->slider_image}}" alt=""></td>
                                <td>{{$slider->description1}}</td>
                                <td>{{$slider->description2}}</td>
                                @if ($slider->status == 1)
                                  <td>
                                    <label class="badge badge-success">Activo</label>
                                  </td>
                                    @else
                                    <td>
                                      <label class="badge badge-danger">Inactivo</label>
                                    </td>
                                @endif
                                
                                <td>
                                  <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_slider/'.$slider->id)}}'" >Editar</button>
                                <a href="/delete_slider/{{$slider->id}}" class="btn btn-outline-danger" id="delete">Eliminar</a>
                                  @if ($slider->status == 1)
                                    <button class="btn btn-outline-warning" onclick="window.location='{{url('/unactivate_slider/'.$slider->id)}}'"  >Desactivar</button>
                                  @else
                                    <button class="btn btn-outline-success" onclick="window.location='{{url('/activate_slider/'.$slider->id)}}'" >Activar</button>
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