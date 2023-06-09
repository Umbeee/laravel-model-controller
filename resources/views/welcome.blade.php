<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
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

        <h1>Home page del sito</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam temporibus ut tempora, ea magnam consequatur praesentium consequuntur accusamus labore porro illum voluptate, consectetur voluptatem quod non voluptates earum recusandae? Sunt.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat soluta, repellat beatae ullam velit ex possimus corrupti sit est veniam neque necessitatibus, et aspernatur ea architecto repudiandae blanditiis sequi vitae!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui voluptatum beatae molestiae dolores commodi deserunt alias optio quod animi labore rerum cum natus officiis nulla, expedita illo, incidunt quasi tenetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dolorum sunt quidem sapiente saepe nemo autem distinctio rerum, quia reprehenderit placeat voluptates veniam eligendi, alias quaerat sit! Nam, aliquid alias?
        </p>


    </div>

</body>

</html>