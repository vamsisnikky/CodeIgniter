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
                    </tr>                 <?php endforeach; ?>
                <tr>
                    <td>Total <?php echo $count ?> records in table</td>
                </tr>
            </table>
        <?php endif; ?>

        <?php if (isset($data_single_row) && $data_single_row != NULL): ?>

            <h3> Result of single row (`->row()`) </h3>
            <h4>Employee With Highest Salary</h4>
            <label> Employee Id :   </label> <?php echo $data_single_row->employee_id; ?> <br>
            <label> Employee Name : </label> <?php echo $data_single_row->employee_name; ?> <br>
            <label> Designation :   </label> <?php echo $data_single_row->designation; ?><br>
            <label> Salary :        </label> <?php echo $data_single_row->salary; ?><br>
            <label> Reporting Person : </label> <?php echo $data_single_row->reporting_person; ?><br>
        <?php endif; ?>

        <?php if (isset($data_get) && $data_get != NULL): ?>
            <h3> Result of single row (`->get('table_name')`) </h3>
            <table>
                <?php foreach ($data_get as $row): ?>
                    <tr>
                        <td><?php echo $row['username']; ?> </td>
                        <td><?php echo $row['password']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['technology']; ?> </td>
                        <td><?php echo $row['city']; ?> </td>
                        <td><div><img height="100" width="100" src="http://localhost/CodeIgniter/uploads/<?php echo $row['image']; ?>"></div></td>
                    </tr> 
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <?php if (isset($data_get_blob) && $data_get_blob != NULL): ?>
            <h3> Result of single row (`->get('table_name')`)  but image using blob</h3>
            <table>
                <?php foreach ($data_get_blob as $row): ?>
                 <tr>
                        <td><?php echo $row['username']; ?> </td>
                        <td><?php echo $row['password']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['technology']; ?> </td>
                        <td><?php echo $row['city']; ?> </td>
                        <td><div><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100" height="100">';?></div></td>
                    </tr> 
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </body>
</html>
