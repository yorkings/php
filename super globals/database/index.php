
<?php
 require_once 'connect.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>logi</title>

</head>
<body>
    <?php
     $sql="SELECT * FROM  login ";
     $result= mysqli_query($conn,$sql);
     $row=mysqli_num_rows($result);
     if($row > 0){
        while($row= mysqli_fetch_assoc($result)){
            echo $row['name']. $row['password']. '<br>';
        }
     }
    ?>
</body>
</html>
