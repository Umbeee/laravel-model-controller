<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>pagina movies</h1>

    @foreach( $movies as $elem )

        <div class="card">
            <h3>{{ $elem['title'] }}</h3>
        </div>

    @endforeach

    @php  dd($movies)  @endphp

</body>
</html>