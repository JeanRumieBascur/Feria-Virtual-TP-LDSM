<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 || strlen($_POST['number']) >= 1 || strlen($_POST['surnames']) >= 1 || strlen($_POST['course']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['number']);
	    $surnames = trim($_POST['surnames']);
	    $course = trim($_POST['course']);
	    $interes = "OP";
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO encuestados(nombre, email, telefono, apellidos, curso, carrera_interes, fecha_reg) VALUES ('$name','$email', '$telefono', '$surnames', '$course', '$interes', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    
	    if ($resultado) {
	    	echo"<script language='javascript'>window.location='check.html'</script>;";
	    	$_POST=array();

	    } else {
	    	echo"<script language='javascript'>window.location='die.html'</script>;";
	    	$_POST=array();
	    
	    	}
    
    	}else {
	    	
    }
}

?>