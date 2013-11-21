<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            body{
                font-family: arial;
                font-size: 14px;
                text-shadow: 0 0 10px darkslategray;
            }
            h3,h4{
                text-shadow: none;
            }
            td{
                box-shadow: 0 0 1px darkslategray;
                padding:4px;
            }
        </style>
        <title>DB Practice</title>
    </head>
    <body>
        <?php if (isset($data_obj) && $data_obj != NULL): ?>
            <h3> Result Using Object(`result();`) </h3>
            <table>
                <?php foreach ($data_obj as $row): ?>
                    <tr>
                        <td><?php echo $row->Customer_id; ?> </td>
                        <td><?php echo $row->Customer_name; ?> </td>
                        <td><?php echo $row->Mobile; ?> </td>
                        <td><?php echo $row->Address; ?> </td>
                        <td><?php echo $row->City; ?> </td>
                        <td><?php echo $row->Postalcode; ?> </td>
                        <td><?php echo $row->Country; ?> </td>
                    </tr>   
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <?php if (isset($data_arr) && $data_arr != NULL): ?>
            <h3> Result Using array (`result_array();`) </h3>
            <table>
                <?php foreach ($data_arr as $row): ?>
                    <tr>
                        <td><?php echo $row['Customer_id']; ?> </td>
                        <td><?php echo $row['Customer_name']; ?> </td>
                        <td><?php echo $row['Mobile']; ?> </td>
                        <td><?php echo $row['Address']; ?> </td>
                        <td><?php echo $row['City']; ?> </td>
                        <td><?php echo $row['Postalcode']; ?> </td>
                        <td><?php echo $row['Country']; ?> </td>
                    </tr>   
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        <?php if (isset($data_rows) && $data_rows != NULL): ?>

            <h3> Result testing  (`num_rows();`) </h3>
            <table>
                <?php foreach ($data_rows as $row): ?>
                    <tr>
                        <td><?php echo $row['Customer_name']; ?> </td>
                    </tr> 
                <?php endforeach; ?>
                <tr>
                    <td>Total <?php echo $count ?> records in table</td>
                </tr>
            </table>
        <?php endif; ?>

        <?php if (isset($data_single_row) && $data_single_row != NULL): ?>
          
            <h3> Result of single row (`->row()`) </h3>
            <h4>Employee With Highest Salary</h4>
           Employee Id : <?php echo $data_single_row->employee_id; ?> <br>
           Employee Name : <?php echo $data_single_row->employee_name; ?> <br>
           Designation : <?php echo $data_single_row->designation; ?><br>
           Salary : <?php echo $data_single_row->salary; ?><br>
           Reporting Person : <?php echo $data_single_row->reporting_person; ?><br>
        <?php endif; ?>
    </body>
</html>
