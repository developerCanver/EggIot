@extends('layouts.app')

@section('content')

<div class="row bg-title m-3">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Mi perfil</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
            class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
            Now</a>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Dashboard</a></li>
            <li class="active">Mi Perfil</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<br>
<br>
@livewire('miperfil.mi-perfil')


@endsection