<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <main>
            <ul>
                @foreach ($travels as $travel)
                <li>
                    <ul>
                        <li>Partenza: {{ $travel->from }}</li>
                        <li>Destinazione: {{ $travel->to }}</li>
                        <li>Data partenza: {{ $travel->start }}</li>
                        <li>Data destinazione: {{ $travel->end }}</li>
                    </ul>
                </li>
                    
                @endforeach
            </ul>
        </main>

    </body>
</html>
