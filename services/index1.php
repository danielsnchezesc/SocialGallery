<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--ESPECIFICAMOS EL NOMBRE DE LA PESTANA-->
        <title>INSERTA TU VEHICULO - Daniel Sanchez Escolano</title>
        <style type="text/css">
        #formu {
            background-color: white;
            border-color: #0B2736;
            border-radius: 5px;
            width: 500px;
            height: 225px;
            margin: 0 auto;
            text-align: center;
        }
        body {
            background-color: #5FC7FF;
        }
        h1 {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 32px;
            letter-spacing: 2px;
            word-spacing: -5px;
            color: black;
            font-weight: 700;
            font-style: normal;
            font-variant: small-caps;
            text-transform: none;
        }
        h3 {
            font-family: Tahoma, Geneva, sans-serif;
            color: white;
        }
        .mensaje{
            display: none;
        }
        </style>
        <script type="text/javascript" src="codi.js"></script>
    </head>
    <!--ABRIMOS EL BODY CON UN COLOR DE BACKGROUND DIFERENTE-->
    <body>
    <?php
        include "../header.php"
    ?>
    <div id="formu">
    <h1>● INSERTA TU VEHICULO ●</h1>
    <!--EMPEZAMOS CON EL FORMULARIO PARA INSERTAR DATOS-->
    <p id="mensaje" class="mensaje"></p>
    <form action="processa.php" method="POST" name="formulario" enctype="multipart/form-data" onsubmit="return segundavalidacion()">
        <br>
        <!--Campo marca-->
        <input type="text" placeholder="Modelo de coche..." name="marca" id="marca">
        <br>
        <!--Campo password-->      
        <input type="text" placeholder="Indica la potencia" name="potencia" id="potencia">
        <br>
        <!--Campo Archivo-->        
        <input type="file" id="imagen" name="imagen" lang="es"> 
        <br>
        <!--Boton enviar-->     
        <input type="submit" class="btn btn-primary" value="Enviar" >
    </form>

    </div>
    <?php
    include "connection.php";
    
    $id=$_SESSION['nombre'];
        $txt_emp="SELECT * FROM usuarios, vehiculo WHERE usuarios.id_usuario LIKE vehiculo.id_usuario AND usuarios.nombre='$id'";


        //Consulta en la base de datos con los parámetros del filtro
            

        $qry_res=mysqli_query($conn,$txt_emp);
        while($row=mysqli_fetch_array($qry_res)){
            $img=$row['imagen'];
            echo "<div style='width=100% height=100% text-align: center'>";
            echo "<img src='../web/galeria/".$img."'  >";
            echo "<h3>".$row['marca']."</h3>";



            echo "</div>";
        }

    ?>

    </body>
</html>