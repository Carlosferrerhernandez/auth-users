@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3 card-header-title">Bienvenido {{ Auth::user()->nombre }}</div>
            </div>
        </div>
    </div>
</div>

<!-- Boton flotante -->
<a href="#" title="Registrar skill">
	<button class="botonF1" url="http://google.com">
		<span>+</span>
	</button>
</a>
@endsection