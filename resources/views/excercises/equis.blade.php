@extends('layouts.app')

@section('content')
<div>
    <form method="GET">
        <div class="col-md-4 mb-3">
            <label for="x">Ingrese la cantidad de caracteres que va a tener la X</label>
            <input type="number" name="x" class="form-control" id="x" required>
            <br />
            <button class="btn btn-success">Generar X</button>
        </div>
    </form>
    <div class="card pl-5">
        {!! $result !!}
    </div>
</div>
@endsection