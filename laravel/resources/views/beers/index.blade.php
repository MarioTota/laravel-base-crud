@extends('layouts.main')

@section('content')
    <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>produttore</th>
                        <th>grado alcolico</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beers as $beer)
                        <tr>
                            <td>{{ $beer->id }}</td>
                            <td>{{ $beer->nome }}</td>
                            <td>{{ $beer->produttore }}</td>
                            <td>{{ $beer->grado_alcolico }}</td>
                            <td><a href="{{ route('beers.show', ['beer' => $beer->id]) }}" class="btn btn-outline-light">mostra</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
@endsection

@section('header')
     <h1>Le mie birre</h1>
@endsection
