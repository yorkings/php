<?php
echo $name= $_FILES['file']['name'].'<br>';
echo $type= $_FILES['file']['type'].'<br>';
echo $tmp= $_FILES['file']['tmp_name'].'<br>';
echo $error= $_FILES['file']['error'].'<br>';
?>
<form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" />
    <input type="file" name="file"/>
    <button type="submit" >submit</button>
</form>
</form>