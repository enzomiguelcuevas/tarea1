<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
</head>
<body>
    
    <?php
    include_once 'navbar-menu.php';
    ?>




    <div class="container">
        <div class="row">


        <!---Tareas-->
        <div class="col-3">
            <div class="taeras">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h5 class="card-title">TAREA 1</h5>
                    </div>
                    <div class="card-body">
                    <form action="../../form-result.php" target="_blank">

                        <p>

                         Edita tu descripción:

            <input type="text" name="desc">

                <input type="submit" value="Guardar cambios">

                        </p>

</form>
            
                        <a href="#" class="btn btn-primary">Eliminar</a>
                        <a href="#" class="btn btn-primary">modificar</a>
                        <p>

                        <p>tarea 2 </p>
                        edita tu descripcion: 
                        <input type="text" name="desc">
                        <input type="submit" value="guardar cambios "> <br>
                        <a href="#" class="button">Eliminar</a>
                        <a href="#" class="button">modificar</a>
                     


                        </p>

            

                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
    <footer>
        <?php 
            include_once 'footer.php';
        ?>
    </footer>
   
</body>
</html>