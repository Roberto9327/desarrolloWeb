@extends('layout')
@section('content')
            <!--inicio content-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Listado Estudiante</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Listado Estudiante</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <table class="table">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Cod</th>
                                <th scope="col">Name</th>
                                </tr>
                            </thead>
                            @foreach ($alumnos as $item)
                            <tbody>
                                
                                <tr>
                                <td>{{ $item->Id }}</td>
                                <td>{{ $item->Cod }}</td>
                                <td>{{ $item->Name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection