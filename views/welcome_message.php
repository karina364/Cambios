<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>


</head>
<body>	
<a href="<?php echo base_url()?>index.php/Welcome/addContact">Agregar usuario</a><br>


<?php if (empty($lista)){ ?>
		<h4><?php echo 'No hay usuarios registrados';?></h4>
	  <?php }else{
       echo '<table border="1">';
	   
		foreach($lista as $key)
		{ 
			echo'<tr>';
			echo '<td>'.$key->UserName;?>-<a href="<?php echo base_url()?>index.php/Welcome/editContact/<?php echo $key->Id;?>">Editar usuario</a></tr>
			
<?php	echo '</tr>';	}
   	
   echo '</table>';
	
	}
?>
	
</body>
</html>