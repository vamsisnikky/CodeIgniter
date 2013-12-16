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
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script>
            $(document).ready(function(){
                var word = $('#confirm_captcha').val();
                var captcha = $('#captcha').val();
                
                $('#confirm_captcha').blur(function(){
                    if(captcha!=word){
                        alert('Invalid Captcha');
                        $('#captcha').attr('value','');
                    }
                    else{
                        $('#login').submit();
                    }
                });
            });
        </script>
    </head>
    <body>
        
        <form id="login" method="post" action="http://localhost/CodeIgniter/index.php/dbpractice/login">
            <?if(isset($fail) && $fail = 'yes'){ echo '<label style="color:darkred">Invalid Login</label>'; }?>
        <p><label>Username :</label> <input type="text" name="username" required></p>
        <p><label>Password :</label> <input type="password" name="password" required></p>
        <?php if(isset($captcha)){
            echo $captcha['image'];
            echo '<p><label>Enter Captha:</label> <input type="text" name="captcha" id="captcha" required>';
            echo '<input type="hidden" id="confirm_captcha" value="'.$captcha['word'].'">';
        }
        if(isset($captcha_fail) && $captcha_fail == 'yes'){
            echo '<label>invalid captcha</label></p>';
        }
        
        ?>
        <input type="hidden" id="confirm_captcha" value=" echo $captcha['word'];">
        <p><input type="submit" id="submit" name="login"></p>
        <form>
        <?php
        // put your code here
        ?>
    </body>
</html>
