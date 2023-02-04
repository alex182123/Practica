<?php //include("./Acciones_BaseDatos/Conexion_BD.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Crud Agenda</title>
</head>

<body>
    <div class="container">
        <div class="Contenedor">
            <div class="card">
                <div class="card-header text-center">
                    Crud Agenda
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <form action="./Acciones_BaseDatos/Crud_Agenda.php" method="post">
                            <label for="input_nombre">Nombre</label>
                            <br>
                            <input type="text" required="true" name="input_nombre">
                            <br>
                            <label for="input_apellido">Apellido</label>
                            <br>
                            <input type="text" required="true" name="input_apellido">
                            <br>
                            <label for="input_direccion">Dirección</label>
                            <br>
                            <input type="text" required="true" name="input_direccion">
                            <br>
                            <label for="input_telefono">Telefono</label>
                            <br>
                            <input type="number" required="true" name="input_telefono">
                            <br>
                            <label for="input_edad">Edad</label>
                            <br>
                            <input type="text" required="true" name="input_edad">
                            <br>
                            <label for="input_altura">Altura</label>
                            <br>
                            <input type="number" required="true" name="input_altura">
                            <br>
                            <br>
                            <div class="col">
                                <button type="submit" name="Registrar" class="btn btn-success"><i class="bi bi-save">
                                        Registrar</i></button>
                                <button type="submit" name="Eliminar" class="btn btn-danger"><i class="bi bi-trash">
                                        Eliminar</i></button>
                                <button type="submit" name="Modificar" class="btn btn-warning"><i class="bi bi-pencil">
                                        Modificar</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <?php include("./Acciones_BaseDatos/Cargar_Lista.php")?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>
<?php

//Ejemplo aprenderaprogramar.com

/*function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Apellidos: ".$resultados['apellidos']."<br/>";
echo "- Dirección: ".$resultados['direccion']."<br/>";
echo "- Teléfono: ".$resultados['telefono']."<br/>";
echo "- Edad: ".$resultados['edad']."<br/>";}
else {echo "<br/>No hay más datos: <br/>".$resultados;}
}
$link = mysqli_connect("localhost", "jagueroc", "holamundo");
mysqli_select_db($link, "tiusr2pl_agendajostin");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM agenda");
$extraido1= mysqli_fetch_array($result);
mostrarDatos($extraido1);
$extraido2= mysqli_fetch_array($result);
mostrarDatos($extraido2);
$extraido3= mysqli_fetch_array($result);
mostrarDatos($extraido3);
$extraido4= mysqli_fetch_array($result);
mostrarDatos($extraido4);
$extraido5= mysqli_fetch_array($result);
mostrarDatos($extraido5);
$extraido6= mysqli_fetch_array($result);
mostrarDatos($extraido6);
mysqli_free_result($result);
mysqli_close($link);
*/
?>