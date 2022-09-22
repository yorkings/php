<?php
if(isset($_POST)){
    $files=$_FILES['file'];
    $name=$_FILES['file']['name']. '<br>';
    $type=$_FILES['file']['type']. '<br>';
    $size=$_FILES['file']['size']. '<br>';
    $error=$_FILES['file']['error']. '<br>';
    $extend= explode(".",$name);
    //end targets last element in an array
    $file=strtolower(end($extend));
    $allowed=array('jpg','pdf','png');
    if(in_array($file,$allowed)){
    if($error == 0 ){
        if($size<3000000){
            $new=uniqid("",true).".".$file;//sets the unique id
        $filedest="super globals/".$new;
        move_uploaded_file($temp,$filedest);
        header("location:files.php?upoad sucess");
        }
    }
    else{
        echo "file is too big";
    }
    }
    else{
        echo "file has error";
    }

}
?>