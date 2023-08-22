@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Nit</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Habitaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $h)
                                <tr>
                                <td>{{ $h->hotel_nombre }}</td>
                                <td>{{ $h->hotel_nit }}</td>
                                <td>{{ $h->hotel_ciudad }}</td>
                                <td>{{ $h->hotel_direccion }}</td>
                                <td><a class="btn btn-link" href="{{ url('habitaciones/show/'.$h->hotel_id) }}">
                                    {{ $h->hotel_habitaciones }}
                                </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
