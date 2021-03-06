<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de animal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
</head>
<body>
    <h1 class="title">Formulario de animal</h1>
    <form action='index.php?controller=animal&action=save' method='post'>
        <table class="table">
            <input type='hidden' name='id' value='<?php echo $animal->id;?>'>
            <tr>
                <td>Nombre</td>
                <td><input type='text' name='name' value='<?php echo $animal->name;?>'></td>
            </tr>
            <tr>
                <td>Especie</td>
                <td><input type='text' name='specie' value='<?php echo $animal->specie;?>'></td>
            </tr>
            <tr>
                <td>Raza</td>
                <td><input type='text' name='breed' value='<?php echo $animal->breed;?>'></td>
            </tr>
            <tr>
                <td>Genero</td>
                <td>
                    <select name='gender'>
                        <option <?php echo $animal->gender=='Macho'?'Select':''?> value='macho'>Macho</option>
                        <option <?php echo $animal->gender=='Hembra'?'Select':''?> value='hembra'>Hembra</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type='text' name='color' value='<?php echo $animal->color;?>'></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type='text' name='age' value='<?php echo $animal->age;?>'></td>
            </tr>
            <tr>
                <td><input type='submit' name='send' value='Guardar'></td>
            </tr>
        </table>
    </form>
</body>
</html>