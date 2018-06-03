<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>juan</title>
</head>
<body>

<form action="<?=site_url()?>/Prueba/guardar" method="post">
    <h1>Hola mundo ql</h1> 
    
    <?php
        echo $mensaje1;
        echo "My first PHP script!";
    ?>

    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    <button type="submit" name="guardar">Guardar</button>

</form>

</body>
</html>