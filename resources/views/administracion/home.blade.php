@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')

<div class="row">
<br>
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Panel de Administracion - Bienvenid@ {{ Auth::user()->name }} </h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              
              
            </div>
            <!-- /.box-body -->
          </div>

      
@endsection
