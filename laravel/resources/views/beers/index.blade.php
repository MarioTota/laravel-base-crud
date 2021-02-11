@extends('layouts.main')

@section('header')
     <h1>Le mie birre</h1>
@endsection

@section('content')
    <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>produttore</th>
                        <th>grado alcolico</th>
                        <th>nazionalità</th>
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
                            <td>{{ $beer->nazionalità }}</td>
                            <td><a href="{{ route('beers.show', ['beer' => $beer->id]) }}" class="btn btn-outline-light">mostra</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
@endsection

@section('footer')
     <div class="text-right">
        <a href="{{ route('beers.create') }}" class="btn btn-lg btn-primary">crea birra</a>
     </div>
@endsection