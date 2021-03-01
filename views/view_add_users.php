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



<?php
$data = array(
    'type'  => 'txt',
    'id'    => 'id',
    'name'  => 'UserName',
    'value' =>  set_value('UserName', @$data_contactos[0]->UserName)
); 

?>

<?php echo form_error('UserName'); ?> 
<?php echo form_open("Welcome/addContact"); ?> 
<?php echo form_label('Nombre de Usuario'); ?> 
<?php echo form_input($data); ?> 
<?php echo form_submit('btn_enviar', 'Guardar'); ?>
<!-- <button type="submit">Ingresar</button> -->
<?php echo form_close(); ?>    
</body>
</html>