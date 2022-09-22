<?php
 if(isset($_POST)){
    echo $_POST['password']. "," ."your form is submittted";
 } 
 else{
        echo "invalid";
    }
?>
<form action="post.php" method="post">
   <p> Name </p><input type="text" name="name" maxlength="12" size=14 minlength="4"/><br>
    <p>password</p><input type="password" name="password" minlength="6"/><br>
   
   <h>choose</h> <select>
        <option value="big">big</option>
        <option value="young">young</option>
        <option value="15-20">15-20</option>
    
    </select><br>
    <textarea rows="22" cols="22" marquee="up" placeholder="description">

    </textarea>
    <input type="file" value=".pdf" />
    <input type="submit" value="submit" />
</form>