<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container bg-light rounded">


    <ul class="nav my-5 bg-info rounded">
    <li class="nav-item">
        <a class="nav-link active text-dark" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a href="/movies" class="nav-link text-dark">movies</a>
    </li>
    </ul>

    <h1>Movies</h1>


    <div class="container-cards">

        @foreach( $movies as $elem )
    
            <div class="card">
                <div class="card-body">
                    <h2>{{ $elem['original_title'] }}</h2>
                    <h4>{{ $elem['title'] }}</h4>
                    <h6>Nazionalità: {{ $elem['nationality'] }}</h6>
                    <h6>Uscita: {{ $elem['date'] }}</h6>
                    <h6>{{ $elem['vote'] }} / 10</h6>
                </div>
            </div>
        @endforeach
    </div>

    </div>
    


</body>
</html>