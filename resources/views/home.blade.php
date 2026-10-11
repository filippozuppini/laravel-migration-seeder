<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Home Train</title>
</head>
<body>

    <h1>Tabellone dei Treni</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Azienda</th><th>Partenza</th><th>Arrivo</th><th>Orario</th><th>Codice</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->start_station }}</td>
                    <td>{{ $train->end_station }}</td>
                    <td>{{ $train->leave_time }}</td>
                    <td>{{ $train->code }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>