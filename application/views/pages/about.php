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
        <h3>Hello</h3>

        <?php
        echo "Hi My name is vamsi <br>";
        echo "<h3>Total ".$count." news displayed</h3>";
        
        ?>
        
        <?php
        
        foreach ($news as $row) {
            echo '<h2>'.$row->title.'</h2>';
            echo '<div id="main">'.$row->text.'</div>';
            echo '<h4 style="font-size: 12px"> Created On <span style="font-weight:300">'.$row->time.'</span></h4>'; //inview
        }
        ?>
        

    </body>
</html>
