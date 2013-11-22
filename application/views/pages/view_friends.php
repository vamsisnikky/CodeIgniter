<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../../../css/view_friends_style.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <title>Friends list</title>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {

            });
        </script>
        <div id="main-container">
            <div id="left-container">
                <h4>Select user to view friends</h4>
                <form method="get" action="http://192.168.42.10/CodeIgniter/friends"  >
                    <select name="user" onchange="this.form.submit()">
                        <option value="">Select user</option>
                        <?php if (isset($users) && $users != NULL): ?>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user['user_name']; ?>"><?php echo $user['user_name']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </form>
                
                <h4>Select users  see their mutual friends</h4>
                <form method="get" action="http://192.168.42.10/CodeIgniter/friends"  >
                    <!--user 1-->
                    <select name="user1" >
                        <option value="">Select user</option>
                        <?php if (isset($users) && $users != NULL): ?>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user['user_name']; ?>"><?php echo $user['user_name']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <!--user 2-->
                    <select name="user2" onchange="this.form.submit()">
                        <option value="">Select user</option>
                        <?php if (isset($users) && $users != NULL): ?>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user['user_name']; ?>"><?php echo $user['user_name']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </form>
                <a href="http://192.168.42.10/CodeIgniter/friends">Show All Friends </a>
            </div>
            <div id="right-container">
                <?php if (isset($name) && $name != NULL) { ?>
                    <h4>Friends List Of <?php echo $name ?></h4>
                <?php } else { ?>
                    <h4>All Friends List</h4>
                <?php } ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($friends) && $friends != NULL){ ?>
                            <?php foreach ($friends as $friend): ?>
                                <tr>
                                    <td><?php echo $friend['friend_name']; ?></td>
                                    <td><?php echo $friend['friend_email']; ?></td>
                                    <td><?php echo $friend['friend_mobile']; ?></td>
                                    <td><?php echo $friend['friend_city']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php }else {?>
                                <tr><td colspan="4"><h5>No Friends for <?php echo $name?></h5></td></tr>
                                <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
            <div class="foot">
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </div>
        </div>
    </body>
</html>
