<?php
include_once('db.php');
//Se recibe todos los datos del formulario
$primernombre=$_POST['primernombre'];
$segundonombre=$_POST['segundonombre'];
$primerapellido=$_POST['primerapellido'];
$segundoapellido=$_POST['segundoapellido'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];

echo "Los datos ingresados son: <br>";
echo "$primernombre,$segundonombre,$primerapellido,$segundoapellido,$ciudad y $edad";

           
        $conectar=conn(); //ejecuta conexiones con la BD
        $sql="INSERT INTO usuarios (primernombre, segundonombre, primerapellido, segundoapellido, ciudad, edad)
        VALUES ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$ciudad', '$edad')";
        $resul = mysqli_query($conectar, $sql);

        echo "$sql";



?>