<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            #main-container{
                font-family: arial;
                width:98%;
                border:1px solid #ccc;
                float:left;
                overflow: auto;
                margin: 5px;
               
            }
            #search{
                width:20%;
                border:1px solid #ccc;
                float:left;
                 height: 320px;
                overflow: auto;
                margin:5px;
                   
            }
            #search_feilds{
                margin:0 auto;
                padding:25px 0px 25px 0px;
                
            }
            #search_feilds td{
                border: none;
            }
            #userdata{
                width:75%;
                border:1px solid #ccc;
                float:left;
                overflow: auto;
                margin:5px;
                padding-bottom: 30px;
                 height: 290px;
            }
            
            #myTable
            {
                border:1px solid #ccc;
                width: 90%;
                background-color: #ffffff;
                color:#494949;
                margin: auto;
                background-color:#EBF3EC;
            }
            td{border:1px solid #ccc;
               text-align:center ;

               font-size: 12px;
               border:1px solid #ccc;
               padding:3px;
            }
            th{border:1px solid #ccc;
               text-align:center;
               background-color: #4696CB;
               color:#FEFEFF;
               font-family: arial;
               font-size: 14px;
               padding:3px;
            }
            .error{
                color:darkred;
            }
            h2{
                padding:0;
                margin:0;
                text-align: center
            }
            h3{
                padding:5px;
                margin:5px;
                text-align: center
            }
            input{
                width: 100%;
                border: 1px solid #ccc;
                padding: 3px 3px 3px 8px
            }
            p.footer{
                text-align: right;
                font-size: 11px;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 0px 0 0 0;
                position: static;
            }
            input[type="button"]{
                cursor: pointer;
                
            }
            .foot{
               
            }
        </style>
        <script src="http://localhost/CodeIgniter/js/jquery-1.9.1.js"></script>
        <script src="http://localhost/CodeIgniter/js/jquery.tablesorter.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#myTable").tablesorter();
                $("input").keypress(function(event) {
                    if (event.which === 13) {
                        $("form").submit();
                    }
                });
                $('.hide_row').on('click',function(){
                    $(this).closest('tr').hide('slow');
                });
                $('.hide_all').on('click',function(){
                    $(this).closest('table').find('tbody').toggle('slow');
                });
            });
        </script>
        <title>User Details</title>
    </head>
    <body>
        <div id='main-container'>
            <div id='search'>
                <table id='search_feilds'cellpadding='0' cellspacing='0'>
                    <tr>
                        <td colspan='6'><h3>Search Criteria</h3></td>
                    </tr>
                    <form method="GET" action="http://localhost/CodeIgniter/userlisting">
                        <tr><td><input type="search" id="uname" name='uname' placeholder="Search by Username"></td></tr>
                        <tr><td><input type="search" id="gender" name='gender'placeholder="Search by Gender"></td></tr>
                        <tr><td><input type="search" id="dob" name='dob' placeholder="Search by DOB"></td></tr>
                        <tr><td><input type="search" id="email" name='email' placeholder="Search by Email"></td></tr>
                        <tr><td><input type="search" id="mobile"  name='mobile'placeholder="Search by Mobile"></td></tr>
                        <tr><td><input type="search" id="city" name='city' placeholder="Search by City"></td></tr>
                        <tr><td><a href='http://localhost/CodeIgniter/userlisting'>Show All Users</a></td></tr>
                    </form>

                </table>
            </div>
            <div id='userdata'>
                <h3>Users Details</h3>
                <table id="myTable" class='tablesorter' cellpadding="0" cellspacing="0"> 
                    <thead>
                        <tr>
                            <th>Userid</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>City</th>
                            <th style="width:110px"><input type="button" class="hide_all" value="Show/Hide All"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['Id'] ?></td>
                            <td><?php echo $user['uname'] ?></td>
                            <td><?php echo $user['gender'] ?></td>
                            <td><?php echo $user['dob'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['mobile'] ?></td>
                            <td><?php echo $user['city'] ?></td>
                            <td><input class="hide_row" type="button" value="Hide"></td>
                        </tr>
                    <?php endforeach; ?>
                        
                    <?php
                    if (isset($users) && $users != NULL) {
                        
                    } else {
                        ?>
                        <tr><td colspan="6"><div class="error">No data is found</div><td><tr>
<?php } ?>
                </tbody>
                </table>

            </div>
            <div class="foot">
                <p class="footer"><?php echo $link?></p>
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </div>
            
        </div>
    </body>
</html>
