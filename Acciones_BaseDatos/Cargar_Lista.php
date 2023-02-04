<?php
    include("./Conexion_BD.php");
    $Resultado = mysqli_query($connection, "SELECT * FROM `agenda`");
    $Result_array = $Resultado ->fetch_array();
echo "<table class=table>
  <thead>
    <tr>
      <th scope=col>Nombre</th>
      <th scope=col>Apellidos</th>
      <th scope=col>Direccion</th>
      <th scope=col>Telefono</th>
      <th scope=col>Altura</th>
      <th scope=col>Edad</th>
    </tr>
  </thead>
  <tbody>";
  //if($Resultado != null){
    //foreach(mysqli_fetch_array($Resultado) as $columna){
        $col_Nombre = $Result_array['nombre'];
        $col_Apellidos = $Result_array['apellidos'];
        $col_direccion = $Result_array['direccion'];
        $col_telefono = $Result_array['telefono'];
        $col_edad = $Result_array['edad'];
        $col_altura = $Result_array['altura'];
        echo '<tr>
            <td>'.$col_Nombre.'</td>
            <td>'.$col_Apellidos.'</td>
            <td>'.$col_direccion.'</td>
            <td>'.$col_telefono.'</td>
            <td>'.$col_altura.'</td>
            <td>'.$col_edad.'</td>
        </tr>';
        
      //}
      $Resultado->free();
  //}else{
    //echo 'No Cargo';
  //}
echo '</tbody>
</table>';
?>