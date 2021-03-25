@extends('layout')
@section('content')
            <!--inicio content-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Formulario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Formulario de Carrera</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form method="POST" action="{{ route('careerlist.crear') }}">
                            @csrf
                                <div class="form-group row">
                                    <label for="inputNombre3" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control"name="inputNombre3" id="inputNombre3" placeholder="Nombre de Carrera">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection