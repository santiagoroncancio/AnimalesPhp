<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption</title>
</head>
<body>
    <h1>Adoption</h1>
    <table>
        <tr>
            <?php
                require_once 'core/const.php';
                foreach(DATA_ADOPTION as $key=>$value):
            ?>
            <td>
                <?php echo $value; ?>
            </td>
                <?php endforeach; ?>
        </tr>
        <?php foreach($this->model->getAll() as $adoption): ?>
        <tr>
            <?php echo $adoption->id?>
            <td><?php echo $adoption->id ?></td>
            <td><?php echo $adoption->idAnimal ?></td>
            <td><?php echo $adoption->idUser ?></td>
            <td><?php echo $adoption->date ?></td>
            <td><?php echo $adoption->reason ?></td>
            <td><a href="index.php?controller=adoption&action=showById&id=<?php echo $adoption->id; ?>">Editar</a></td>
            <td><a onclick="javascript:return confirm('¿Seguro desea eliminarlo?')" href="index.php?controller=adoption&action=quit&id=<?php echo $adoption->id; ?>">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>