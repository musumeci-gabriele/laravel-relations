<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index in Ajax</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>

        <div class="container">
            <h1>Lista Fumetti</h1>
            <div id="comics" class="row"></div>
        </div>

        <script id="comic-template" type="text/x-handlebars-template">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" style="width: 100%" src="@{{cover}}" alt="@{{title}}">
                    <div class="card-body">
                       <h5 class="card-title">@{{title}}</h5>          
                        <a href="/comics/@{{id}}" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
        </script>
        
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>