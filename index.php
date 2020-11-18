
<?php
    include 'upload.php'

?>

<!DOCTYPE html>
<html>
<head>
    <title>Guardar la wea</title>
</head>
<meta charset="utf-8">
<body>

<div class="container">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>

</div>

</body>
    <a href="http://localhost/testBlob/view.php">miau</a>   
</html>