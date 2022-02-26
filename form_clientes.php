<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</head>
<body>
    <div class="container">
    <form method="post" action="recibe_clientes.php">

        <div class="row justify-content-center">
           
                <div class="col-6 p-5 bg-white shadow-lg rounded">
                  <h2>Recibe datos cliente</h2>
                  <hr>
                    <div class="form-group">
                        <label for="codigo">codigo</label>
                        <input id="codigo" class="form-control" type="text" name="codigo">
                    </div>
                    <div class="form-group">
                        <label for="nombres">nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos ">apellidos</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos">
                    </div>


                    <div class="form-group">
                        <label for="dui">dui</label>
                        <input id="dui" class="form-control" type="text" name="dui">
                    </div>
                    <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono">telefono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input id="Email" class="form-control" type="text" name="Email">

                  
                        <br>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                    
        
                </div>
                

            </form>
    
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
