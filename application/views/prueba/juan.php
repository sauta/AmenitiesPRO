<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>juan</title>
</head>
<body>
<center>

<from action="<?=site_url()?>/Prueba/buscarEmpresa" method="post">
    <h1>Seleciona una Empresa</h1>
    </br>
     <?php
     if($men!=null)
        echo $men;
     else
        echo 'puta2';   
     ?>
    </br>
    <button type="submit">Enviar</button>
    </from>
</center>
</body>
</html>