<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Link JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <title>Laravel Model Controller</title>
</head>

<body>

    <div class="container py-2">

        <div class="card-container d-flex flex-wrap gap-5 justify-content-center">

            @foreach ($movies as $movie)
                <div class="card col-4 p-2">
                    <h1> {{ $movie['title'] }} </h1>
                    <h5> {{ $movie['original_title'] }} </h5>

                    <p class="text-capitalize"> Nazionalità: {{ $movie['nationality'] }} </p>
                    <p> Anno pubblicazione: {{ $movie['date'] }} </p>
                    <p> Voto: {{ $movie['vote'] }} </p>
                </div>
            @endforeach

        </div>

    </div>

</body>

</html>
