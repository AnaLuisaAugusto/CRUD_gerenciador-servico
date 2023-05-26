<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> @yield('title') </title>
      
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        
        <<div class="card w-75 d-flex justify-content-center" id="MainContent">
            <div class="card-body">

                <!-- navbar -->  
                <nav class="navbar navbar-dark navbar-expand-lg bg-primary">         
                    <div class="container-fluid">
                        <a class="navbar-brand text-white">&nbsp;&nbsp;SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-dark" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- navbar  -->
                  
                <div class="container" id="Main">
                    @yield('content')
                </div> 
            </div>       
        </div>
    </body>
</html>