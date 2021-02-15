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
                            <td style="text-align: center;">
                                <a href="{{ route('beers.show', ['beer' => $beer->id]) }}" class="btn btn-outline-light"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('beers.edit', ['beer' => $beer->id]) }}" class="btn btn-outline-light"><i class="far fa-edit"></i></a>
                                <form action="{{ route('beers.destroy', ['beer' => $beer->id]) }}" method="POST" style="display: inline-block;">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
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