<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<form action="./usuario.php" method="POST">
<div class="container">
    <div class="row">
        <div class="col">
           <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
               <div class="card-header text-center">Login</div>

                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1" name="usuario">
                        <br>
                        <input type="number" class="form-control" placeholder="Contraseña" aria-label="Constraseña" aria-describedby="basic-addon1" name="contraseña">
                        <br>
                        <button type="submit" class="btn btn-light">Ingresar</button>
                    </div>

           </div>
        </div>
    </div>
</div>
</form>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>