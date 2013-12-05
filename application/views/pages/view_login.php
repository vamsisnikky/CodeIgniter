<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form id="login" method="post" action="http://localhost/CodeIgniter/index.php/dbpractice/login">
        <p><label>Username :</label> <input type="text" name="username"></p>
        <p><label>Password :</label> <input type="password" name="password"></p>
        <?php if(isset($captha)){
            echo $captha['image'];
            echo '<p><label>Enter Captha:</label> <input type="text" name="captha"></p>';
        }
        if(isset($_GET['invalidcaptcha']) ){
            echo 'invalid captch';
        }
        
        ?>
        <p><input type="submit" name="login"></p>
        <form>
        <?php
        // put your code here
        ?>
    </body>
</html>
