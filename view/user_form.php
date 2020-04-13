<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
</head>
<body>
    <h1 class="title">Folmulario de usuario</h1>
    <form action='index.php?controller=user&action=save' method='post'>
        <table class="table">
            <input type='hidden' name='id' value='<?php echo $user->id;?>'>
            <tr>
                <td>Documento</td>
                <td><input type='text' name='document' value='<?php echo $user->document;?>'></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type='text' name='name' value='<?php echo $user->name;?>'></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type='text' name='lastName' value='<?php echo $user->lastName;?>'></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <select name='sex'>
                        <option <?php echo $user->sex=='Masculino'?'Select':''?> value='Masculino'>Masculino</option>
                        <option <?php echo $user->sex=='Femenino'?'Select':''?> value='Femenino'>Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><input type='text' name='address' value='<?php echo $user->address;?>'></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><input type='text' name='phone' value='<?php echo $user->phone;?>'></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type='text' name='age' value='<?php echo $user->age;?>'></td>
            </tr>
        </table>
        <input class="button" type='submit' name='send' value='Guardar'>
    </form>
</body>
</html>