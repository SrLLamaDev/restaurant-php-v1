<?php
// nos mostrara la lista de los registros que habrá en la base de datos
include ("../../bd.php");
if(isset($_GET['txtID'])){

    $txtID=(isset($_GET["txtID"]))?$_GET["txtID"]:"";

    $sentencia=$conexion->prepare("DELETE FROM tbl_banners WHERE ID=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

    header("Location:index.php");
}

$sentencia = $conexion -> prepare("SELECT * FROM `tbl_banners`");
$sentencia -> execute();
$lista_banners = $sentencia-> fetchAll(PDO::FETCH_ASSOC);
//para testear:
//print_r($lista_banners);
include ("../../templates/header.php");
?>
<br>
Lista Registros
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div
            class="table-responsive-sm"
        >
            <table
                class="table"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Enlace</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>

                    

                        <?php foreach($lista_banners as $key => $value){ ?>
                            <tr class=""></tr>
                                <td scope="row"><?php echo $value['ID'];?></td>
                                <!-- <td> <¿php echo print_r($value) ?> </td>  PARA TESTEAR QUE DEVUELVE-->
                                <td> <?php echo $value['titulo']; ?> </td>
                                <td> <?php echo $value['descripcion']; ?> </td>
                                <td> <?php echo $value['link']; ?> </td>
                                <td>
                                    <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $value['ID'];?>" role="button">Editar</a>
                                    <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $value['ID'];?>" role="button">Borrar</a>
                                </td>
                            </tr>
                        <?php } ?>

                    

                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card-footer text-muted"></div>
    
</div>

<?php
include ("../../templates/footer.php");
?>