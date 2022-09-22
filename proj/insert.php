<?php
 $conn=new PDO('mysql:host=localhost;port=3310;dbname=first', 'root' ,'');
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
if($_SERVER['REQUEST_METHOD']==='post'){
    
 $name= $_POST['name'];
 $email= $_POST['email'];
 $pass= $_POST['password'];
 $errors= [] ;
 if(!$name){
  error[]=  'invaild name';

 };
 if(!$email){
    errors[]=  "invaild email";
  
   };
   if(!$pass){
    errors[]=  "invaild password";
  
   };
 $set= $conn->prepare(" INSERT INTO login(name,email,password) VALUES('$name','$email',' $pass') ");
 $set->execute();
}
?>
<div>
    <?php foreach($errors as $error){
     echo $error;
    }?>
</div>
<form action="insert.php" method="post"> 
    <label>name</label>
    <input type="text"  name="name" placeholder="name" size="10"/>
    <label>email</label>
    <input type="text" placeholder="text"  name="email" value=""/>
    <label>password</label>
    <input type="pasword"  name="password" placeholder=" " value=""/>
     <button type="submit" value="submit"> SUBMIT</button>

</form>