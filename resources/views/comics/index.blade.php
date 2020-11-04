!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}} ">
</head>
<body>
    <div class="container">
        @foreach ($data as $comic)
            <ul class="scheda">
                    <li class="scheda_item"><h3>{{$comic->title}}</h3> </li>
                    <li class="scheda_item">Titolo originale: {{$comic->original_title}}</li>
                    <li class="scheda_item">Editore: {{$comic->publisher}}</li>
                    <li class="scheda_item">Anno: {{$comic->year}}</li>
                    <li class="scheda_item">Numero: {{$comic->number}}</li>
                    <li class="scheda_item">Pagine: {{$comic->pages}}</li>
                    <li class="scheda_item">Prezzo: €{{$comic->price}}</li>
                    <li class="scheda_item"><a href="{{route('comics.show', $comic->id)}} "> <img src="{{$comic->img_cover}}" alt=""> </a> </li>

            </ul>
        @endforeach
    </div>

</body>
</html  