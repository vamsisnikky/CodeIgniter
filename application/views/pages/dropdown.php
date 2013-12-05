<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {
                    <?php
                            mysql_connect("localhost", "root", "root");
                            mysql_select_db("php");
                            $select_country = mysql_query("SELECT iCountryId,vCountryName FROM country_master");
                            while ($row = mysql_fetch_assoc($select_country)) {
                            ?>
                             $("#country").append("<option value=<?php echo $row['iCountryId']; ?>> <?php echo $row['vCountryName']; ?> </option>");
                            <?php
                             }

                    ?>
                      $("#country").change(function() {
                var txt = $(this).val();
                alert(txt);
                <?php
                $select_state = mysql_query("SELECT iStateId,vStateName FROM state_master where iCountryId ="+ txt +"");
                while ($row = mysql_fetch_assoc($select_state)) {
                            ?>
                             $("#state").append("<option value=<?php echo $row['iStateId']; ?>> <?php echo $row['vStateName']; ?> </option>");
                            <?php
                             }

                    ?>
            });
       
           
            });
        </script>

        <div>
            <div>Country:<select id="country">
                    <option value="">Select Country</option>
                </select></div> 
            <div>State:<select id="state"></select></div>
            <div>City:<select id="city"></select></div>

        </div>
    </body>
</html>
