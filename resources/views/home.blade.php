<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="my-4">Treni in partenza oggi:</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->azienda }}</h5>
                            <p class="card-text"><strong>Orario partenza:</strong> {{ $train->orario_partenza }}</p>
                            <p class="card-text"><strong>Orario arrivo:</strong> {{ $train->orario_arrivo }}</p>
                            <p class="card-text"><strong>Partenza da:</strong> {{ $train->stazione_partenza }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
