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
        <h2>Create a news item</h2>

        <?php // echo validation_errors('<div class="error">', '</div>'); ?>

       <?php echo form_open('pages/create'); ?>
   <? echo "Title"; ?> 
   <? echo form_input('title'); ?>
        <?php echo form_error('title','<div class="error">', '</div>');?>
   </br>
   <? echo "Description"; ?>: 
   <? echo form_input('text'); ?>
   <?php echo form_error('text','<div class="error">', '</div>');?>
   </br>
   <?php echo form_submit('submit', 'Submit'); ?>
   <?php echo form_close(); ?>
</body>
</html>
