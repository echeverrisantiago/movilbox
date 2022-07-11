@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Prueba BackEnd MovilBox</h1>
                    <div class="row">
                        <div class="col-4">Nombre Aspirante:<br/> Juan Santiago Echeverri Diosa</div>
                        <div class="col-5">Correo Aspirante:<br/> echeverrisantiago2018@gmail.com</div>
                        <div class="col-3">Celular Aspirante:<br/> 3104930744</div>
                    </div>
                    <br />
                    <h2 class="text-center">Menú</h2>
                    <div class="card">
                        <div class="card-body">
                            <ol>
                                <li>
                                    <a href="/buildX">La x</a>
                                </li>
                                <li>
                                    <a href="/histogram">Histograma</a>
                                </li>
                                <li>
                                    <a href="/matriz">Matriz</a>
                                </li>
                                <li>
                                    <a href="/histogram">SQL departamentos</a>
                                </li>
                                <li>
                                    <a href="/histogram">SQL -> Json</a>
                                </li>
                                <li>
                                    <a href="/histogram">SQL trigger</a>
                                </li>
                                <li>
                                    <a href="/histogram">SQL -> Json</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
