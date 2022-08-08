<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Redireccionando</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <html>
        <head>
        <meta http-equiv="Refresh" content="5;url={{$urls->url}}">
        </head>

        <body>
        
        <div style="display: flex; align-items: center; justify-content: center; min-height: 100vh;">
            <div class="card border-primary mb-3" style="max-width: 50%;">
                <div class="card-header">Redireccionando...</div>
                <div class="card-body text-primary">
                    <h5 class="card-title" style="text-align: center;">Serás dirigido automáticamente en cinco segundos a {{$urls->url}}</h5>
                    <p class="card-text" style="text-align: center;">En caso contrario, puedes acceder haciendo click <a href="{{$urls->url}}">aquí</a></p>
                </div>
            </div>

        </div>
        </body>
        </html>
    </body>
</html>
