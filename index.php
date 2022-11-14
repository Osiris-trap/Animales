<?php 
include "./conexion.php";
include "./header.php";
$conexion = conexion();



$sql = "SELECT * FROM t_animales";
$animal = mysqli_query($conexion,$sql);

 ?>



    <center><h2>Listado de Animales</h2></center>
    <p>
        <center><a href="./agregar.php">
            Agregar Animal
        </a>
    </center>
    </p>
    <center><table border>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Region</th>
                <th>Comida</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ver= mysqli_fetch_array($animal)): ?>
            <tr>
                <td> <?php echo $ver['id']; ?> </td>
                <td> <?php echo $ver['nombre']; ?> </td>
                <td> <?php echo $ver['region']; ?> </td>
                <td> <?php echo $ver['comida']; ?> </td>
                <td> <a href="./editar.php?idp=<?php echo $ver['id']; ?>">
                        editar</td>
                <td>
                    <a href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>">
                        eliminar
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    </center>
<?php include "./footer.php"; ?>