<?php require_once('consultas_bd/porDefecto.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de evaluacion en linea</title>

    <!-- Bootstrap Core CSS -->
    <link href="librerias_iu/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="librerias_iu/css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <link rel="stylesheet" href="librerias_iu/css/styles_menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="librerias_iu/js/script.js"></script>
</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container fondo2" >
              <div> <img src="librerias_iu/images/fondo_1.png" width="100%" height="60" alt=""></div>


                <div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>



        </div>
        <!-- /.container -->
    </nav>

      <?php	
		if(isset($_GET['user']))
			{
				
switch ($_GET['user']) {
    case 0:
	include('modulos/IU/porDefecto.php');
		 echo "Error en la autentificacion";
        break;  	
		 
		   
		case 1:
		include('consultas_bd/Obtener_user.php');

        if($row_user['id_tipo_user']==1){
			  
			include('modulos/IU_estudiante/conte_estudiante.php');
			}
			else{
				
				include('modulos/IU_docente/conte_docente.php');
				}
		  
        break;
    default:
       include('modulos/IU/porDefecto.php');
}
			}	
				else{
					 include('modulos/IU/porDefecto.php');
					
					}		
 ?>  



    <script src="../../librerias_iu/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../librerias_iu/js/bootstrap.min.js"></script>

</body>

</html>
