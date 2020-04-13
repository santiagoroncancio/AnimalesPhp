<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
</head>
<body>
    <h1 class="title">Tabla de animales</h1>
    <a href='index.php?controller=animal&action=showById'>Agregar</a>
    <table class="table">
        <tr>
            <?php require_once 'core/const.php';
                foreach(DATA_ANIMAL as $key =>$value):
            ?>
            <td><?php echo $value;?></td>
                <?php endforeach; ?>
        </tr>
        <?php foreach($this->model->getAll() as $animal):?>
        <tr>
            <!-- <td><?php echo $animal->id?></td> -->
            <td><?php echo $animal->name?></td>
            <td><?php echo $animal->specie?></td>
            <td><?php echo $animal->breed?></td>
            <td><?php echo $animal->gender?></td>
            <td><?php echo $animal->color?></td>
            <td><?php echo $animal->age?></td>
            <td><a href='index.php?controller=animal&action=showById&id=<?php echo $animal->id;?>'>Editar</a></td>
            <td><a onclick="javascript:return confirm('¿Seguro desea eliminarlo?');" href='index.php?controller=animal&action=quit&id=<?php echo $animal->id;?>'>Eliminar</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>