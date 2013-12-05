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

        <?php // echo validation_errors('<div class="error">', '</div>'); ?>

        <?php echo form_open_multipart('signup'); ?>

        <h5>Username</h5>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>"  />
        <?php echo form_error('username', '<div class="error">', '</div>'); ?>

        <h5>Password</h5>
        <input type="password" name="password" value=""  />
        <?php echo form_error('password', '<div class="error">', '</div>'); ?>

        <h5>Password Confirm</h5>
        <input type="password" name="passconf" value=""  />
        <?php echo form_error('passconf', '<div class="error">', '</div>'); ?>

        <h5>Email Address</h5>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>"  />
        <?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
        <h5>Gender</h5>
        <input type="radio" name="gender" value="male"<?php echo set_radio('gender', 'male') ?>/>Male
        <input type="radio" name="gender" value="female"<?php echo set_radio('gender', 'female') ?>/>Female
        <?php echo form_error('gender', '<div class="error">', '</div>'); ?>
        <h5>Technologies</h5>
        <input type="checkbox" name="tech[]" value="php"<?php echo set_checkbox('tech[]', 'php') ?>>PHP
        <input type="checkbox" name="tech[]" value="codeigniter"<?php echo set_checkbox('tech[]', 'codeigniter') ?>>Codeigniter
        <input type="checkbox" name="tech[]" value="majento"<?php echo set_checkbox('tech[]', 'majento') ?>>Majento
        <input type="checkbox" name="tech[]" value="drupal"<?php echo set_checkbox('tech[]', 'drupal') ?>>Drupal
        <?php echo form_error('tech[]', '<div class="error">', '</div>'); ?>
        <h5>City</h5>
        <select name="city">
            <option value=""<?php echo set_select('city', '') ?>>Select City</option>
            <option value="Ahmedabad"<?php echo set_select('city', 'Ahmedabad') ?>>Ahmedabad</option>
            <option value="Guntur"<?php echo set_select('city', 'Guntur') ?>>Guntur</option>
            <option value="Vijayawada"<?php echo set_select('city', 'Vijayawada') ?>>Vijayawada</option>
            <option value="Mumbai"<?php echo set_select('city', 'Mumbai') ?>>Mumbai</option>
        </select><br>
        <?php echo form_error('city', '<div class="error">', '</div>'); ?>
        	
        <label>Upload Image<label><input type="file" name="userfile" >
        <input type="submit" name="submit" value="Submit">
        <?php echo form_close(); ?>

    </body>
</html>
