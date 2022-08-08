<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="m-3 row justify-content-center">
        <div class="card text-center m-3">
            <div class="card-header">
                Direcciones URL
            </div>
            <div class="card-body text-center">
                <form class="form-inline"method="POST" action="{{route('generar.route')}}">
                    @csrf
                    
                    <div class="row col-sm-8 ">
                        <label for="url" class="col-sm-2 col-form-label">Ingresa url:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="url" name="url" >
                        </div>
                        <button type="submit" class="btn btn-dark col-sm-2">Generar url</button>

                    </div>
                    <br>
                    
                </form>
            </div>
            <div class="card-footer text-muted">
                &nbsp
            </div>
        </div>

        @if ( session('respuesta')  )
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="float: right;font-weight: 700;color: inherit;">&times;</a>
                {{ session('respuesta') }}
            </div>
        @endif

        
        @if($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                
            </div>
        @endif
        
        <div class="row col-sm-8 " >
            <table class="table table-striped table-dark">
                <thead >
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Url</th>
                        <th scope="col">Short url</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $host = request()->getSchemeAndHttpHost(); ?>
                    @forelse($urls as $url)
                    
                        <tr>
                            <th scope="row">{{$url->id}}</th>
                            <td>{{$url->url}}</td>
                            <td><a href="{{$url->short_url}}" target="_blank">{{$host.'/'.$url->short_url}}</a></td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No se han generado urls</td>

                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
        <div class=" row col-sm-8 text-center" >            
            {{ $urls }}
        </div>
        
    </body>
</html>
