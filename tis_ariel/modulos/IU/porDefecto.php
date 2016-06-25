 <div class="container fondo1">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8 fondo3">



               <div class="well boxhorafecha">
<h4>Bienvenidos al sistema <span class="label label-default">"SEVAL"</span></h4>
<span id="liveclock"></span>
   <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='5' face='Arial' ><b><font size='1'>Hora y Fecha actual del Sistema:</font></br>"+hours+":"+minutes+":"
         +seconds+" "+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5
         //-->
     </script>
	 <font size='3' face='Arial' ><b>
		<script>
		//Fecha
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Mi�rcoles","Jueves","Viernes","S�bado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</b></font>

	      </div>




            </div>
            <!-- /.col-md-8 -->
            <?php	
		if(isset($_GET['conte']))
			{
				
switch ($_GET['conte']) {
    case 0:
	            if(isset($_GET['conte1'])){
					   include('modulos/IU/autentificacion.php');
					   echo "<center>Registro sastifatorio</center>";
					}
				
				else{
	        include('modulos/lista_usuario/registro_user_estudiante.php');
				}
        break;    
    default:
            include('modulos/IU/autentificacion.php');
}
			}	
				else{
					 include('autentificacion.php');
					
					}		
 ?>  


<?php

if(isset($obtener_envio))
			{
				mysql_free_result($obtener_envio);
			
			}
?>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

      

        

        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>