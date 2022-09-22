<?php
  $pdo=new PDO('mysql:host=localhost;port=3310;dbname=first','root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//sets atrribute to check error
   $new=$pdo->prepare('SELECT * FROM login');
   $new->execute();
   $pro=$new->fetchAll(PDO::FETCH_ASSOC);
   echo '<pre>';
   var_dump($pro);
   echo '</pre>';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      site
    </title>
    <meta charset="UTF_8" >
  </head>
  <body>
    <h1>hi there</h1>
    <table class="lew">
      <caption>items</caption>
      <thead>
       <tr>
        <th>#</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
       </tr>
      <thead>
        <tbody>
          <?php
          foreach($pro as $i=>$pro){?>
            <tr>
             <th><<?php echo $i+1 ; ?></th>
             <td><?php echo $pro['name'] ;?></td>
             <td><?php echo $pro['email'] ;?></td>
             <td><?php echo $pro['password'] ;?></td>
             <td>
              <button type="button" color="red">edit</button>
              <button type="button" color="red">delete</button>

             </td>
            </tr>

          <?php
          };
          ?>
        </tbody>
  </body>
</html>