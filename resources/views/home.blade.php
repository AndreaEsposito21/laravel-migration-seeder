<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista viaggi</h1>

    <ul>
        @foreach ($travels as $travel)
            <li>
                <h2>Località: {{ $travel->località }},</h2>
                <h3>Prezzo: {{ $travel->prezzo }} €,</h3>
                <div>Viaggio in: {{ $travel->tipo_viaggio }},</div>
                <div>Tipologia: {{ $travel->tipo_località }}.</div>
            </li>
        @endforeach
    </ul>
</body>
</html>