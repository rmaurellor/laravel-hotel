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
                            <th scope="col">Tipo Habitación</th>
                            <th scope="col">Acomodación</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($habitaciones as $h)
                            <tr>
                            <td>{{ $h->habitaciones_tipo }}</td>
                            <td>{{ $h->habitaciones_acomodacion }}</td>
                            <td>{{ $h->habitaciones_cantidad }}</td>
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
