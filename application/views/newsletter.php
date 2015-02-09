<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    </head>
    <body>
        <h1>This is newsletter</h1>
        <div id='newsletter'>
            <?php echo form_open('email/sendemail'); ?>
            <?php 
                $name_data = array(
                  'name'=>'name',
                  'id'=>'name',
                  'value'=>  set_value('name'),
                );
            ?>
            <p>
                <label for="name">Name : </label>
                <?php echo form_input($name_data); ?>
            </p>
            
            <p>
                <label for="email">Email Address : </label>
                <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" />
                       
            </p>
            <p><?php echo form_submit('submit','submit'); ?></p>
            <?php echo form_close(); ?>
            <?php echo validation_errors(); ?>
        </div>
    </body>


