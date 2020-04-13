<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
</head>
<body>
    <h1 class="title">Tabla de usuarios</h1>
    <a class="button" href='index.php?controller=user&action=showById'>Agregar</a>
    <table class="table">
        <tr>
            <?php require_once 'core/const.php';
                foreach(DATA_USER as $key =>$value):
            ?> 
            <th>
                <?php echo $value;?>
            </th> 
                <?php endforeach;?>
        </tr>
        <?php foreach($this->model->getAll() as $user):?>
        <tr>
            <!-- <?php echo $user->id?> -->
            <td><?php echo $user->document ?></td>
            <td><?php echo $user->name?></td>
            <td><?php echo $user->lastName?></td>
            <td><?php echo $user->sex?></td>
            <td><?php echo $user->address?></td>
            <td><?php echo $user->phone?></td>
            <td><?php echo $user->age?></td>
            <td><a href="index.php?controller=user&action=showById&id=<?php echo $user->id;?>">Editar</a></td>
            <td><a onclick="javascript:return confirm('¿Seguro desea eliminar?');" href="index.php?controller=user&action=quit&id=<?php echo $user->id; ?>">Eliminar</a></td>
        </tr>
        <?php endforeach?> 
    </table>
</body>
</html>