<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuarios</title>
</head>
<body>


<?php $data = array(
        'name'          => 'UserName',
        'id'            => 'id',
        'maxlength'     =>  '60',
        'size'          => '50'
);?>

<?php echo form_error('UserName'); ?> 
<?php echo form_open("Welcome/addContact"); ?> 
<?php echo form_label('Nombre de Usuario'); ?> 
<?php echo form_input($data); ?> 
<button type="submit">Ingresar</button>
<?php echo form_close(); ?>    
</body>
</html>