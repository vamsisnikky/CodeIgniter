<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $heading ?></h1>
        <ul>
            <?php foreach ($todolist as $item):?>
            <li><?php echo $item;?></li>
            <?php endforeach;?>
        </ul>
        
    </body>
</html>
