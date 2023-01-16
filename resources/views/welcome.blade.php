<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies DB</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <div class="card-container">
            @foreach ($all_movies as $movie)
                <div class="movie-card">
                    <h2>{{strtoupper($movie['title'])}}</h2>
                    <h3>Titolo Originale: {{$movie['original_title']}}</h3>
                    <h3>Produzione: {{$movie['nationality']}}</h3>
                    <h3>Data Uscita: {{$movie['date']}}</h3>
                    <h4><span>IMDB: </span>{{$movie['vote']}}</h4>
                </div>
            @endforeach
        </div>  
    </main>
</body>
</html>