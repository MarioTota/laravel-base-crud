@extends('layouts.main')

@section('header')
     <h1>Aggiungi una birra</h1>
@endsection

@section('content')
    <form action="{{ route('beers.update', $beer->id) }}" method="post">       

            @csrf
            @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="form-group">
                <label for="nome">Inserisci il nome</label>
                <input type="text" name="nome" placeholder="Inserisci il nome"  id="nome" class="form-control" value="{{ $beer->nome }}"> 
            </div>
            {{-- @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

             <div class="form-group">   
                <label for="produttore">Inserisci il produttore</label>
                <input type="text" name="produttore" placeholder="Inserisci il produttore"  id="produttore" class="form-control" value="{{ $beer->produttore }}">
            </div>

            <div class="form-group">
                <label for="grado_alcolico">Inserisci il grado alcolico</label>
                <input type="text" name="grado_alcolico" placeholder="Inserisci il grado alcolico"  id="grado_alcolico" class="form-control" value="{{ $beer->grado_alcolico }}">
            </div>

            <div class="form-group">
                <label for="nazionalità">Inserisci la nazionalità</label>
                <input type="text" name="nazionalità" placeholder="Inserisci la nazionalità"  id="nazionalità" class="form-control" value="{{ $beer->nazionalità }}">
            </div>

            <button type="submit" class="btn btn-lg btn-primary">Salva</button>           
        
    </form>
@endsection


@section('footer')
     <div class="text-right">
        <a href="{{ route('beers.index') }}" class="btn btn-lg btn-primary">torna all'elenco libri</a>
     </div>
@endsection