<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Welcome To my blog <?=$ccc['name']?></h3>
        <?php
//        echo '<script> alert("Hello !!!")</script>';
        $a = 't-shirt';
        if (strpos($a, 'shirt')) {
            echo 'true';
        }
        else{
            echo 'false';
        }   
        
        ?>
        <div id="calendar">
            <?php echo $this->calendar->generate();?>
        </div>
       <!--alternative syntax of php code calling-->
        
    </body>
</html>
