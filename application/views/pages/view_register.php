<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>:::Register:::</title>
        <link href="<?php echo base_url(); ?>css/view_register_style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox.js"></script>
        <script src="<?php echo base_url(); ?>js/register_main.js"></script>
    </head>
    <body>
        <div id="main-container">
            <h4>REGISTER</h4>
            <form id="register" action="user_register" method="post">
                <p> <input type="text" name="vFirstName" id="vFirstName" placeholder="First Name" value="<?php echo set_value('vFirstNname'); ?>">  <?php echo form_error('vFirstName', '<label class="error">', '</label>'); ?></p>
                <p> <input type="text" name="vLastName" id="vLastName" placeholder="Last Name" value="<?php echo set_value('vLastName'); ?>"> <?php echo form_error('vLastName', '<label class="error">', '</label>'); ?></p>
                <p> <input type="text" name="vUserName" id="vUserName" placeholder="Username" value="<?php echo set_value('vUserName'); ?>"> <?php echo form_error('vUserName', '<label class="error">', '</label>'); ?></p>
                <p><input type="radio" name="gender" id="gender" value="Male"<?php echo set_radio('gender', 'Male') ?> /> Male 
                    <input type="radio" name="gender" id="gender" value="Female" <?php echo set_radio('gender', 'Female') ?>/> Female <?php echo form_error('gender', '<label class="error">', '</label>'); ?> <label for="gender" class="error"></label></p>
                

                <p class="password"> <input type="text" name="vPassword" id="vPassword" placeholder="Password" > <?php echo form_error('vPassword', '<label class="error">', '</label>'); ?></p><p> <input type="button" id="genrate_password" value="Genrate Password"></p>
                <p> <input type="password" name="vConfirmPassword" id="vConfirmPassword" placeholder="Confirm Password"> <?php echo form_error('vConfirmPassword', '<label class="error">', '</label>'); ?></p>
                <p> <input type="email" name="vEmail" id="vEmail" placeholder="Email Address" value="<?php echo set_value('vEmail'); ?>"> <?php echo form_error('vEmail', '<label class="error">', '</label>'); ?></p>
                <p> <input type="date" name="vDob" id="vDob" placeholder="Date Of Birth" value="<?php echo set_value('vDob'); ?>">  <?php echo form_error('vDob', '<label class="error">', '</label>'); ?></p>
                <p class="captcha_image"><? echo $captcha['image']; ?> </p><input type="button" id="refresh_captcha" value="Refresh">
                <p> <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha"> <?php echo form_error('captcha', '<label class="error">', '</label>'); ?></p>
                <input type="hidden" name="confirm_captcha" value="<? echo $captcha['word']; ?>" id="confirm_captcha">
                <p><input type="submit" value="Register" id="submit" name="submit"></p>
            </form>
        </div>
    </body>
</html>
<script language="Javascript" type="text/javascript">
    $(document).ready(function() {
        $('#genrate_password').on('click', function() {
            $.ajax({
                url: "ranPassword",
                success: function(result) {
                    $("#vPassword").attr('value', result);
                }
            });
        });
        $('#refresh_captcha').on('click', function() {
            $.ajax({
                url: "show_captcha",
                datatype: 'json',
                success: function(result) {
                    var captcha = jQuery.parseJSON(result);
                    $(".captcha_image").html(captcha.image);
                    $('#confirm_captcha').attr('value', captcha.word);
                }
            });
        });

    });
</script>  
