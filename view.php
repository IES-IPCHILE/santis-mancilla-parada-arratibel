
<?php 
// incluye el archivo de configuracion de la base de datos 
require_once 'dbConfig.php'; 
 
// obtiene la imagen desde la base de datos
$result = $db->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>




<!DOCTYPE html>
<html land= "en-US">
<head>
    <title>mostrar la wea</title>
</head>
<meta charset="utf-8">
<body>

<div class="container">

    <h3>
        mostrando la wea xdxDXd
    </h3>

    <?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
    <?php }else{ ?> 
        <p class="status error">Image(s) not found...</p> 
    <?php } ?>


</div>
        <a href="http://localhost/testBlob/index.php">miau</a>
</body>
</html>