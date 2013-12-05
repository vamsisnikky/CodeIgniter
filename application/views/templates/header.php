<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <title> <?php $title ?> CodeIgniter  </title>
<!--        <script src="<?php echo base_url(); ?>js/jquery.js"></script>-->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"> 
        
    </head>
    <body>
        <h1>CodeIgniter 2 </h1>
        <!--                <a href="index">Home</a>
                        <a href="about">About Us</a>
                        <a href="create">Posts</a>
        -->                
        <?php echo anchor('pages/index', "Home"); ?>
        <?php echo anchor('pages/about', "News"); ?>
        <?php echo anchor('pages/create', "Share"); ?>
        <?php echo anchor('signup/index', "Signup"); ?>

        <a href="<?php echo base_url(); ?>signup/index">Signup anchor tag</a>
        <?php echo anchor('userlisting', "Users"); ?>

    </body>
</html>
