@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Panel de administración!</div>
                    <div class="panel-body">
                        <p>Bienvenido <strong>{{ Auth::user()->name }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection