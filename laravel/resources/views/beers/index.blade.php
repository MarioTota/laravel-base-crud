<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body>
        <main class="container">
            <h1>le mie birre</h1>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>produttore</th>
                        <th>grado alcolico</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beers as $beer)
                        <tr>
                            <td>{{ $beer->id }}</td>
                            <td>{{ $beer->nome }}</td>
                            <td>{{ $beer->produttore }}</td>
                            <td>{{ $beer->grado_alcolico }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </body>
</html>
