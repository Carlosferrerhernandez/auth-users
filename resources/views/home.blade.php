@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                    @else
                        <div>Acceso usuario</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
