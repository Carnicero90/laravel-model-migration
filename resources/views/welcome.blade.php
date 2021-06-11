<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600;700&display=swap" rel="stylesheet">
        {{-- custom css --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <main>
            @include('components.covid', [
                'top' => '15px',
                'left' => 'calc(100% - 15px); transform: translateX(-100%)'
                // TODO: magari cambialo in un unico argomento opzionale, tipo 'style'
            ])
            {{-- section travels --}}
            <section class="travels">
                <h1>Le nostre offerte</h1>
                <ul>
                    @foreach ($travels as $travel)
                    <li>
                        <ul class="travel-info">
                            <li>Partenza: {{ $travel->from }}</li>
                            <li>Destinazione: {{ $travel->to }}</li>
                            <li>Data partenza: {{ $travel->start }}</li>
                            <li>Data destinazione: {{ $travel->end }}</li>
                            <li class="description"> <p>{{ $travel->description }}</p></li>
                        </ul>
                    </li>   
                    @endforeach
                </ul>

            </section>
            {{-- END section travels --}}
            
        </main>

    </body>
</html>
