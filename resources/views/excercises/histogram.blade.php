@extends('layouts.app')

@section('content')
<div id="histogram">
    <div>
        <form method="GET">
            <div class="col-md-4 mb-3">
                <label for="histograma">Ingrese los valores del histograma separados por ","</label>
                <input type="text" name="histogram" class="form-control" id="histograma" placeholder="1,4,5,2..." required>
                <br />
                <button class="btn btn-success">Generar histograma</button>
            </div>
        </form>
    </div>
    <div class="card p-3 mt-2">
        @foreach($histograms as $histogram)
        {{ $histogram['position'] }}:
        @for($i = 0; $i < $histogram['quantity']; $i++) * @endfor <br>
            @endforeach
    </div>
</div>
@endsection