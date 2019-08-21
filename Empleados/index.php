<?php
//print_r($_POST);

$txtID=(issets($_POST['txtId']))?$_POST['txtId']:"";
$txtNoFolio=(isset($_POST['txtNoFolio']))?$_POST['txtNoFolio']:"";
$txtNoOficio=(isset($_POST['txtNoOficio']))?$_POST['txtNoOficio']:"";
$txtEmisor=(isset($_POST['txtEmisor']))?$_POST['txtEmisor']:"";
$txtCategoria=(isset($_POST['txtCategoria']))?$_POST['txtCategoria']:"";
$txtAsunto=(isset($_POST['txtAsunto']))?$_POST['txtAsunto']:"";
$txtObservaciones=(isset($_POST['txtObservaciones']))?$_POST['txtObservaciones']:"";
$txtFechaDocumento=(isset($_POST['txtFechaDocumento']))?$_POST['txtFechaDocumento']:"";
$txtFechaExpiracion=(isset($_POST['txtFechaExpiracion']))?$_POST['txtFechaExpiracion']:"";
$txtDocumento=(isset($_POST['txtDocumento']))?$_POST['txtDocumento']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include ("../Conexion/conexion.php");

switch ($accion) {
    case 'btnAgregar':
/*INSERTAR EN BASE DE DATOS (Esta comentado porque lo inserta directo a una tabla y nosostros tenemos foreign, necesitamos hacerlo mediante sql)
    $sentencia = $pdo->prepare("INSERT INTO tabla(valor1,valor2,valor3,valor4)
    VALUES (:Id,:NoFolio,:NoOficio,:Emisor,:Categoria,:Asunto,:Observaciones,:FechaDocumento,:FechaExpiracion,:Documento)");

    $sentencia->bindParam(':Id',$txtId);
    $sentencia->bindParam(':NoFolio',$txtNoFolio);
    $sentencia->bindParam(':NoOficio',$txtNoOficio);
    $sentencia->bindParam(':Emisor',$txtEmisor);
    $sentencia->bindParam(':Categoria',$txtCategoria);
    $sentencia->bindParam(':Asunto',$txtAsunto);
    $sentencia->bindParam(':Observaciones',$txtObservaciones);
    $sentencia->bindParam(':FechaDocumento',$txtFechaDocumento);
    $sentencia->bindParam(':FechaExpiracion',$txtFechaExpiracion);
    $sentencia->bindParam(':Documento',$txtDocumento);
    $sentencia->execute();

*/
        echo $txtId;
        echo "Presionaste btnAgregar";
        break;
    case 'btnModificar':

/* MODIFICAR
$sentencia = $pdo->prepare("UPDATE tabla SET
   
    NoFolio=:NoFolio,
    NoOficio=:NoOficio,
    Emisro=:Emisor,
    Categoria=:Categoria,
    Asunto=:Asunto,
    Observaciones=:Observaciones,
    FechaDocumento=:FechaDocumento,
    FechaExpiracion=:FechaExpiracion,
    Documento=:Documento WHERE 
    
    //Este seria el numero de ID
    Id=:Id");


    $sentencia->bindParam(':NoFolio',$txtNoFolio);
    $sentencia->bindParam(':NoOficio',$txtNoOficio);
    $sentencia->bindParam(':Emisor',$txtEmisor);
    $sentencia->bindParam(':Categoria',$txtCategoria);
    $sentencia->bindParam(':Asunto',$txtAsunto);
    $sentencia->bindParam(':Observaciones',$txtObservaciones);
    $sentencia->bindParam(':FechaDocumento',$txtFechaDocumento);
    $sentencia->bindParam(':FechaExpiracion',$txtFechaExpiracion);
    $sentencia->bindParam(':Documento',$txtDocumento);
    
    // Este sera el Id
    $sentencia->bindParam(':Id',$txtId);
    
    $sentencia->execute();

    header('Location: index.php');


*/
        echo $txtId;
        echo "Presionaste btnModificar";
        break;
    case 'btnEliminar':

    /*ELIMINAR FUNCION
$sentencia = $pdo->prepare("DELETE FROM tabla WHERE 
    //Este seria el numero de ID
    Id=:Id");

    // Este sera el ID
    $sentencia->bindParam(':Id',$txtId);
    
    $sentencia->execute();
    header('Location: index.php');

     */
        echo $txtId;
        echo "Presionaste btnEliminar";
        break;
    case 'btnCancelar':
        echo $txtId;
        echo "Presionaste btnCancelar";
        break;
   
}
/*     ACCEDER A LA INFORMACION DE LA BASE DE DATOS
    $sentencia = $pdo->prepare("SELECT * FROM `tabla` WHERE 1");
    $sentencia->execute();
//Se asigna lo que encontro anteriormente y a la listaInfo de abajo
    $listaInfo=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    print_r($listaInfo);




    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD con php y MySQL</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
   <div class ="container">
   <form action="" method="post" ectype="multipart/form-data">
   
   <label for="">Id:</label>
   <input type="text" name="txtId" value="<?php echo $txtId;?>" placeholder="" id="txtId" require="">
   <br>

   <label for="">No Folio:</label>
   <input type="text" name="txtNoFolio" value="<?php echo $txtNoFolio;?>" placeholder="" id="txtNoFolio" require="">
   <br>

   <label for="">No Oficio:</label>
   <input type="text" name="txtNoOficio" value="<?php echo $txtNoOficio;?>" placeholder="" id="txtNoOficio" require="">
   <br>

   <label for="">Emisor:</label>
   <input type="text" name="txtEmisor" value="<?php echo $txtEmisor;?>" placeholder="" id="txtEmisor" require="">
   <br>

   <label for="">Categoria:</label>
   <input type="text" name="txtCategoria" value="<?php echo $txtCategoria;?>" placeholder="" id="txtCategoria" require="">
   <br>

   <label for="">Asunto:</label>
   <input type="text" name="txtAsunto" value="<?php echo $txtAsunto;?>" placeholder="" id="txtAsunto" require="">
   <br>

   <label for="">Observaciones:</label>
   <input type="text" name="txtObservaciones" value="<?php echo $txtObservaciones;?>" placeholder="" id="txtObservaciones" require="">
   <br>
   
   <label for="">Fecha de Documento:</label>
   <input type="text" name="txtFechaDocumento" value="<?php echo $txtFechaDocumento;?>" placeholder="" id="txtFechaDocumento" require="">
   <br>

   <label for="">Fecha de Expiracion:</label>
   <input type="text" name="txtFechaExpiracion" value="<?php echo $txtFechaExpiracion;?>" placeholder="" id="txtFechaExpiracion" require="">
   <br>

   <label for="">Documento:</label>
   <input type="text" name="txtDocumento" value="<?php echo $txtDocumento;?>" placeholder="" id="txtDocumento" require="">
   <br>


   <button value="btnAgregar" type="submit" name="accion">Agregar</button>
   <button value="btnModificar" type="submit" name="accion">Modificar</button>
   <button value="btnEliminar" type="submit" name="accion">Eliminar</button>
   <button value="btnCancelar" type="submit" name="accion">Cancelar</button>
   
   </form>

   <div class="row">
   
    <table class="table">
    
        <thead>
            <tr>
                <th>Id<th>
                <th>No Folio</th>
                <th>No Oficio</th>
                <th>Emisor</th>
                <th>Categoria</th>
                <th>Asunto</th>
                <th>Observaciones</th>
                <th>Fecha de Documento</th>
                <th>Fecha de Expiracion</th>
                <th>Documento</th>
            </tr>
        </thead>
        <?php foreach($listaInfo as $Info){ ?>
                <tr>
                    <td><?php echo $Info['Id'];?></td>
                    <td><?php echo $Info['NoFolio'];?></td>
                    <td><?php echo $Info['NoOficio'];?></td>
                    <td><?php echo $Info['Emisor'];?></td>
                    <td><?php echo $Info['Categoria'];?></td>
                    <td><?php echo $Info['Asunto'];?></td>
                    <td><?php echo $Info['Observaciones'];?></td>
                    <td><?php echo $Info['FechaDocumento'];?></td>
                    <td><?php echo $Info['FechaExpiracion'];?></td>
                    <td><?php echo $Info['Documento'];?></td>
                    
                    <td>
                    <form action="" method="post">
                    <input type="hidden" name="txtId" value="<?php echo $Info['Id'];?>">
                    <input type="hidden" name="txtNoFolio" value="<?php echo $Info['NoFolio'];?>">
                    <input type="hidden" name="txtNoOficio" value="<?php echo $Info['NoOficio'];?>">
                    <input type="hidden" name="txtEmisor" value="<?php echo $Info['Emisor'];?>">
                    <input type="hidden" name="txtCategoria" value="<?php echo $Info['Categoria'];?>">
                    <input type="hidden" name="txtAsunto" value="<?php echo $Info['Asunto'];?>">
                    <input type="hidden" name="txtObservaciones" value="<?php echo $Info['Observaciones'];?>">
                    <input type="hidden" name="txtFechaDocumento" value="<?php echo $Info['FechaDocumento'];?>">
                    <input type="hidden" name="txtFechaExpiracion" value="<?php echo $Info['FechaExpiracion'];?>">
                    <input type="hidden" name="txtDocumento" value="<?php echo $Info['Documento'];?>">
                    
                    <input type="submit" value="Seleccionar" name="accion" >
                    <button value="btnEliminar" type="submit" name="accion">Eliminar</button>
                    
                    </form>
                    
                    </td>
                </tr>
        <?php } ?>


    </table>
   
   </div>
</div>
</body>
</html>