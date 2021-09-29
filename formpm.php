<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="insignia.png">
    

<title>LBDSM-Feria Virtual</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>
<link rel="stylesheet" type="text/css" href="estilo.css">
    <div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
    <nav class="navbar navbar-default redq">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
            <img src="insignia.png" alt="logo" style="width:38px; height: 50px; margin-top: 10px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <a class="mobile-menu-close"><i class="fa fa-close"></i></a>
            <div class="menu-top-menu-container">
                <ul id="menu-top-menu" class="nav navbar-nav nav-list">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#contact">Contactanos</a></li>
                    <li style="background:#50ebd6;"><a target="_blank" href="https://ldsm.aricavirtual.com/">Volver al aula</a></li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
</div>
</head>

<!--   INICIO DE JAVASCRIPT -->
 <script type="text/javascript">



function entrada(){
    var nombre = document.getElementById("name");
    var apellidos = document.getElementById("surnames");
    var telefono = document.getElementById("number");
    var email=document.getElementById("email");
    var curso=document.getElementById("course");    
    regmail=/^([\da-z_\.-]+)@(gmail)\.(com)$/
    regout=/^([\da-z_\.-]+)@(outlook)\.(com)$/
    regldsm=/^([\da-z_\.-]+)@(ldsm)\.(cl)$/
    reghot=/^([\da-z_\.-]+)@(hotmail)\.(com)$/
    var mensajesError = [];

    if(nombre.value == null || nombre.value == '' || apellidos.value == null || apellidos.value == ''){
        swal("¡PROBLEMA!","TIENES CAMPOS VACIOS","error");
        return false;
    }
    else{
        if(!regmail.exec(email.value) && !regout.exec(email.value) && !regldsm.exec(email.value) && !reghot.exec(email.value)){
            swal("¡CORREO NO VALIDO!","INGRESA UN CORREO VALIDO","error");
            return false;
        }
        
        else if(curso.value==0){
                swal("¡CURSO!","SELECCIONA UN CURSO","error");
                return false;
        }
        
        else {

            return true;
        

        }

    }
    

}

</script>
<!-- FIN DE JAVASCRIPT -->
<body>
<section id="home" style="padding:110px 0;background-image: url(imag/backgroundpm.jpg); background-position: center; background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">
	
	<h1 class="toptitle"><i class="fa fa-file-text roundiconpm"></i>
			</h1>
	<div class="container">
		<div class="textwidget">						
			<div class="contactstyle topform">										
				<form method="post" action="registrarad.php">
				<br><h1 align="center">FORMULARIO DE INTERES PROGRAMACIÓN</h1>
						<h5 align="center">Si te interesa esta carrera, completa y envía este formulario para considerarte en nuestra formación.</h5><br>
           <input type="text" name="name" id="name" placeholder="Nombre" maxlength="10" required autocomplete="off" onkeypress="return (event.charCode >= 65 && event.charCode <= 122 || event.charCode==32)" min="1">
    	   <input type="text" name="surnames" id="surnames" placeholder="Apellidos" maxlength="20" required autocomplete="off" onkeypress="return (event.charCode >= 65 && event.charCode <= 122 || event.charCode==32)" min="1">
           <input type="text" name="number" id="number" placeholder="Telefono"  minlength="8"  maxlength="8" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1">
           <input type="text" name="email" id="email" placeholder="Correo electrónico" required autocomplete="off" onkeypress="return (event.charCode != 32 )" min="1">
            <select name="course" id="course" class="select" style="background: transparent; width:100%; margin-top:15px; margin-bottom:15px; border-radius:5px;">
                         <option selected value="0">Curso</option>
                        <optgroup label="Básica">
                        <option value="8°A">8°A</option> 
                        <option value="8°B">8°B</option>
                        <option value="8°C">8°C</option>
                        <option value="8°D">8°D</option>
                        <option value="8°E">8°E</option>
                        <option value="8°F">8°F</option>
                        </optgroup> 
                        <optgroup label="Media"> 
                        <option value="1°A">1°A</option>
                        <option value="1°B">1°B</option> 
                        <option value="1°C">1°C</option> 
                        <option value="1°D">1°D</option> 
                        <option value="1°E">1°E</option>
                        <option value="1°F">1°F</option>
                        <option value="1°G">1°G</option>
                        <option value="1°H">1°H</option>
                        <option value="2°A">2°A</option>
                        <option value="2°B">2°B</option> 
                        <option value="2°C">2°C</option> 
                        <option value="2°D">2°D</option> 
                        <option value="2°E">2°E</option>
                        <option value="2°F">2°F</option>
                        <option value="2°G">2°G</option>
                        <option value="2°H">2°H</option>     
                        </optgroup> 
                        </select> <br>
    	   <input  type="submit" name="register"  value="ENVIAR" style="background:#b10707; border:none; color:white;" onclick="return entrada()">
           </form>
			</div>	

		</div>
		</div>
</section>
    
<section id="about" class="whitetext" style="padding:60px;background-color:#b10707;" >

    
</section>

<!-- CONTACT
================================================== -->
<section id="contact" class="margintop60 nopadding" style="background:#292929;">
        <div class="col-md-6 whitetext" style="padding: 60px;">
            <div class="textwidget">
                <div class="bookarea">
                     CONTACTANOS<br>
                    <span class="bordered">Pedro de Valdivia 2200, Av. Sta. María 2189, Arica, Arica y Parinacota </span><br>
                    <span class="call">&#x1F4DE (58) 258 7754</span>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
</section>

<!-- SCRIPTS-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
