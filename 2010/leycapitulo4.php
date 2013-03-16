<?php 
$sUrl="http://www.colima-estado.gob.mx/cfg/menu.php";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$sUrl);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$sMenu=curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/contenido.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Direcci&oacute;n de Pensiones de Gobierno del Estado de Colima</title>
<!-- InstanceEndEditable -->
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/variaciones/layout_variacion_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/nav_vertical_icc.css" rel="stylesheet" type="text/css" />
<link href="styles/layout_icc_int.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://www.colima-estado.gob.mx/js/mainmenu.js"></script>
<script type="text/javascript" src="js/menu_vertical_ie.js"></script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>

<div id="wrap">
    
    	<div id="header">
        		<div id="logo_administracion"></div>
                <div id="header_left">
                	<div id="titulo_dependencia"></div>
                	<div id="escudo_gobierno_header"></div>
	                <div id="navegacion_header">
					<?php 
					echo $sMenu;                  
					?>
					</div>
                </div>
        </div>
      <div id="container">
      
		<!--Navegacion vertical-->      

           <div id="navegacion_vertical_icc">
           						

				<div id="menu2">
						<!--<ul>
							<li><a href="http://pensiones.col.gob.mx/legislacion.php" title="Ley de Pensiones">Ley de pensiones</a></li>
							<li><a href="http://pensiones.col.gob.mx/mision.php" title="Misión y visión">Misión y Visi&oacute;n</a></li>							
							<li><a href="http://pensiones.col.gob.mx/servicios/index.php" title="Consulta tu saldo de pensiones">Consulta tu saldo</a></li>
							<li><a href="http://pensiones.col.gob.mx/reglamento.php" title="Reglamento de servicios médicos">Reglamento de servicios médicos</a></li>
							<li><a href="http://pensiones.col.gob.mx/organigrama.php" title="Organigrama">Organigrama</a></li>
							<li><a href="http://pensiones.col.gob.mx/cortoplazo.php" title="Requisitos para prestamos a corto plazo">Requisitos para prestamos a corto plazo</a></li>
							<li><a href="http://pensiones.col.gob.mx/hipotecarios.php" title="Requisitos para prestamos hipotecarios">Requisitos para prestamos hipotecarios</a></li>							
							<li><a href="http://pensiones.col.gob.mx/ubicacion.php" title="Ubicación">Ubicación</a></li>                                
						</ul>-->
                        <?php
						require_once('/var/http/htdocs/dirpensiones/2010/clases/sql.php');
						require_once('/var/http/htdocs/dirpensiones/2010/clases/menu/menu.php');
                        $oMenuDpcia = new menu(190000);                                  
                        echo $oMenuDpcia->getMenuLista();                                    
                    	?>
				</div>

             </div>
                                          

        
            
          <!--  Fin de la navegacion vertical-->
      
           
          <!-- inicio de area de contenido    -->
          <div id="contenido_interior_icc">
          			<div id="ruta_sitio"><a href="http://pensiones.col.gob.mx/2010/index.php"><strong>inicio</strong></a>  &nbsp;&nbsp;&nbsp; •  &nbsp; <!-- InstanceBeginEditable name="seccion" --><a href="legislacion.php">Ley de pensiones </a><!-- InstanceEndEditable -->   &nbsp;&nbsp;•    &nbsp;&nbsp;<!-- InstanceBeginEditable name="contenido" --><a href="#">Cap&iacute;tulo IV </a><!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <!-- Búsqueda Google -->
</div>
                    <div id="titulo_contenido"><a name="start" id="start"></a><!-- InstanceBeginEditable name="titulo" -->Ley de Pensiones - Cap&iacute;tulo IV <!-- InstanceEndEditable --></div>
                    <div id="texto_contenido">
                      <p><!-- InstanceBeginEditable name="cuerpo" -->
					    <p class="titulo_bold_negro">CAPITULO IV</p>
					    <p align="center"><span class="txt_normal"><strong>Del Fondo de la Direcci&oacute;n </strong></span><br />
                        </p>
					    <p class="enlaces">Art. 25&ordm;.-  El Fondo de la Direcci&oacute;n de Pensiones, exceptuadas aquellas cantidades que se destinen a su sostenimiento administrativo, calculado en tres meses, podr&aacute; invertirse en las siguientes operaciones:</p>
					    <p align="center" class="menu">-	A  - </p>
					    <p align="center" class="menu">PRESTAMOS A CORTO PLAZO<br />
                        </p>
					    <p align="justify"> <span class="enlaces">Art. 26&ordm;.-  En pr&eacute;stamos a empleados y funcionarios acogidos a los t&eacute;rminos de esta Ley que tengan cuando menos seis meses de nombrados.<br />
					    </span><span class="enlaces"><br />
  Art. 27&ordm;.-  Los pr&eacute;stamos a que se contrae el art&iacute;culo anterior, podr&aacute;n autorizarse hasta por el importe de tres meses de sueldo de que disfrute el solicitante, salvo pr&eacute;stamos especiales que autorice el Consejo<br />
  En caso de que el cr&eacute;dito se conceda con cargo al fondo de garant&iacute;a, podr&aacute; hacerse solo hasta el por el importe de tres meses de sueldo, y su concesi&oacute;n quedar&aacute; al exclusivo criterio del Consejo Directivo. (Decreto No. 81, 02 de diciembre de 1966).<br />
                        </span><br />
                        Art. 28&ordm;.-  Los pr&eacute;stamos ser&aacute;n, en cuanto a su monto,  de tal manera que los abonos para reintegrar la cantidad pedida y sus intereses sumados a los descuentos que deban hacerse por cualquier otro adeudo a favor de la Direcci&oacute;n, no excedan del cincuenta por ciento de los sueldos del interesado.</p>
					    <p align="justify" class="enlaces"> Art. 29&ordm;.-  El plazo para la devoluci&oacute;n de la cantidad prestada y sus accesorios ser&aacute; hasta de treinta quincenas, salvo el caso de los cr&eacute;ditos sobre fondo de garant&iacute;a  que no podr&aacute;n concederse a m&aacute;s de diecis&eacute;is quincenas. (Decreto No. 40,  10 de mayo 1968).</p>
					    <p align="justify" class="enlaces"> Art. 30&deg;.-.  Los pr&eacute;stamos causar&aacute;n el inter&eacute;s del nueve por ciento anual calculados sobre saldos insolutos.</p>
					    <p align="justify" class="enlaces"> Art. 31&ordm;.-  El pago del capital e intereses se har&aacute; en abonos quincenales iguales.</p>
					    <p align="justify" class="enlaces">Art. 32&ordm;.-  No se conceder&aacute; nuevo pr&eacute;stamo mientras permanezca insoluto el anterior; pero podr&aacute; renovarse cuando haya transcurrido la cuarta parte el plazo por el que fue concedido, se hayan cubierto los abonos de dicho per&iacute;odo, y el solicitante cubra una prima de renovaci&oacute;n del uno al millar entre el total del nuevo pr&eacute;stamo, adem&aacute;s de los intereses correspondientes.<br />
                          <br />
                          Art. 33&ordm;.-  Para que pueda concederse un pr&eacute;stamo a corto plazo deber&aacute; el funcionario o empleado suscribir la obligaci&oacute;n en forma solidaria son otro empleado o funcionario en servicio o contribuir al  Fondo de garant&iacute;a  con el dos por ciento sobre el monto del adeudo al iniciarse la operaci&oacute;n, despu&eacute;s de ajustarse  a lo previsto en el Art&iacute;culo 27. <br />
					      Los  pr&eacute;stamos hasta el importe del fondo propio no requieren aquellas garant&iacute;as.</p>
					    <p align="justify" class="enlaces">Art. 34&ordm;.-  Los adeudos por concepto de pr&eacute;stamos a corto plazo, que no fueren cubierto por los trabajadores despu&eacute;s de un a&ntilde;o de su vencimiento, ser&aacute;n pagados por el fondo de garant&iacute;a a que se refiere el Art&iacute;culo 34  de esta Ley, quedando sin embargo vivo el cr&eacute;dito contra el deudor pudiendo la Direcci&oacute;n recurrir a los medios legales de recobro, en cuyo caso deber&aacute; abonar a dicho fondo las cantidades que se recuperen. Los cr&eacute;ditos a favor de la Direcci&oacute;n de Pensiones del Estado, prescriben en un t&eacute;rmino de diez a&ntilde;os.</p>
					    <p align="center" class="menu">-B-</p>
					    <p align="center" class="menu">PRESTAMOS HIPOTECARIOS<br />
                        </p>
					    <p align="justify"> <span class="enlaces">Art. 35&ordm;.-  Se  conceder&aacute;n pr&eacute;stamos con garant&iacute;a hipotecaria a empleados y funcionarios acogidos a esta Ley, que tengan m&aacute;s de seis meses de servicio, debiendo ser dicha garant&iacute;a en primer lugar, y sobre fincas urbanas.<br />
                        </span><br />
                        Art. 36&ordm;.-  El importe de cada pr&eacute;stamo no exceder&aacute; de treinta mil pesos, salvo casos especiales que considere el Consejo <br />
                        <br />
                        Art. 37&ordm;.- El plazo m&aacute;ximo para el pago del capital e intereses, ser&aacute; de quince a&ntilde;os y deber&aacute; cubrirse mediante amortizaciones quincenales, que incluir&aacute;n capital e intereses. (Decreto No. 31, 29 de mayo de 1965)<br />
                        <br />
                      Art. 38&ordm;.-  El pr&eacute;stamo hipotecario no deber&aacute; pasar del setenta y cinco por ciento del valor comercial de la finca, fijado por peritos que designe la Direcci&oacute;n de Pensiones. Sin embargo, trat&aacute;ndose de la construcci&oacute;n o adquisici&oacute;n de casas precisamente nuevas y que no pasen de veinte mil pesos de valor comercial pesos de valor comercial, podr&aacute; ampliarse el pr&eacute;stamo hasta el cinco por ciento de tal cantidad.</p>
					    <p align="justify" class="enlaces"> Art. 39&ordm;.- Los pr&eacute;stamos hipotecarios a que se refiere el presente cap&iacute;tulo causar&aacute;n el inter&eacute;s del nueve por ciento anual sobre saldos insolutos. La Direcci&oacute;n formular&aacute; tablas generales anuales se&ntilde;alando las cantidades m&aacute;ximas que puedan prestarse a cada trabajador tomando en consideraci&oacute;n los sueldos que perciban.</p>
					    <p align="justify" class="enlaces"> Art. 40&ordm;.- Los pr&eacute;stamos se destinar&aacute;n a construir o adquirir casas para habitaci&oacute;n de los beneficiarios, para hacerles mejoras o redimirlas de grav&aacute;menes.</p>
					    <p align="justify" class="enlaces"> Art. 41&ordm;.- En caso de separaci&oacute;n definitiva del trabajador podr&aacute; concederse a &eacute;ste un plazo de espera de seis meses sin causamiento de intereses para continuar en el pago de sus obligaciones.</p>
					    <p align="center" class="menu">-C-</p>
					    <p align="center" class="menu">CASAS PARA FUNCIONARIOS Y EMPLEADOS<br />
                        </p>
					    <p> <span class="enlaces">Art. 42&ordm;.- Cuando la Direcci&oacute;n adquiera o construya casas para ser vendidas o arrendadas a funcionarios o empleados al servicio del Estado y dem&aacute;s beneficiarios de esta Ley, se seguir&aacute;n las reglas siguientes:<br />
				        <br />
					      a).- Se entrar&aacute; en posesi&oacute;n de las casas una vez que se hubiere firmado el contrato de compra-venta con reserva de dominio o garant&iacute;a hipotecaria a favor de la Direcci&oacute;n.<br />
					      b).- El plazo para cubrir el precio del inmueble no exceder&aacute; de diez a&ntilde;os.<br />
					      c).- Los gastos e impuestos que se causen por el contrato ser&aacute;n por cuenta exclusiva de los trabajadores; los honorarios notariales por el otorgamiento de la misma por mitad entre la Direcci&oacute;n y los trabajadores.<br />
					      d).- Los pensionados de acuerdo con esta Ley podr&aacute;n tambi&eacute;n gozar de los beneficios de este art&iacute;culo.<br />
					      e).- De ser arrendadas las fincas a los trabajadores, el arrendamiento se regir&aacute; por las normas generales de Derecho, pugnando siempre porque el importe de la renta sea lo mas barato posible.<br />
  <br />
					      Art. 43&ordm;.- Las casas adquiridas o constru&iacute;das por los beneficiarios de esta Ley para su propia habitaci&oacute;n con fondos obtenidos de la Direcci&oacute;n de Pensiones, quedar&aacute;n exentas por diez a&ntilde;os a partir de la fecha de su adquisici&oacute;n o construcci&oacute;n, del pago de impuesto predial y ser&aacute;n inembargables en tanto se conserven dentro del patrimonio del beneficiario, siempre que no tengan en propiedad ning&uacute;n otro bien inmueble, excepto en el caso de que el cr&eacute;dito provenga de alimentos.<br />
				      Este beneficio quedar&aacute; sin efecto si los inmuebles fueren arrendados, enajenados o destinados a otros fines sin permiso de la Direcci&oacute;n de Pensiones.</span></p>
					    <p class="enlaces"> Art. 44&ordm;.- Los bienes adquiridos por los beneficiarios deber&aacute;n ser destinados precisamente a habitaci&oacute;n de los trabajadores siendo causa bastante la violaci&oacute;n de este precepto para dar por vencida la totalidad del adeudo, con todas las consecuencias legales.</p>
					    <p class="enlaces"> Art. 45&ordm;.-  Si el trabajador hubiere pagado sus abonos con regularidad durante cinco a&ntilde;os o m&aacute;s y se viere imposibilitado de continuar cubri&eacute;ndolos tendr&aacute; derecho a que la Direcci&oacute;n remate el inmueble en p&uacute;blica subasta y que del producto, una vez pagado el cr&eacute;dito insoluto, se le entregue el remanente y si la imposibilidad del pago ocurre dentro de los cinco primeros a&ntilde;os, el inmueble ser&aacute; devuelto a la Direcci&oacute;n, rescindi&eacute;ndose el contrato respectivo y s&oacute;lo se cobrar&aacute; al trabajador el importe de las rentas causadas devolvi&eacute;ndosele la diferencia que resulte. Para los efectos de este  art&iacute;culo, se fijar&aacute; al otorgarse la escritura la renta mensual que se asigne al inmueble.</p>
					    <p class="enlaces">Art. 45 Bis.-  La Direcci&oacute;n de Pensiones Civiles del Estado prestar&aacute; servicios M&eacute;dico-Asistenciales a los trabajadores que contribuyan econ&oacute;micamente al fondo de la misma, y a sus familiares, en la forma y proporci&oacute;n que determine el Consejo de la propia Instituci&oacute;n a trav&eacute;s de un reglamento interno que regir&aacute; lo conducente<br />
					      La cantidad necesaria para la atenci&oacute;n de los servicios ser&aacute; la que se&ntilde;ale el propio Consejo, tomada del fondo de la Direcci&oacute;n, a la que se agregar&aacute; el importe de lo que autorice el Ejecutivo del Estado como contribuci&oacute;n a los servicios, y en su caso, lo que aporten los Ayuntamientos, seg&uacute;n convenio con la Instituci&oacute;n.  (Decreto No. 53,  23 de diciembre de 1968).</p>
					    <!-- InstanceEndEditable --></p>
            </div>
                    <div id="control_navegacion_inferior"></div>
          
          </div>
     		  
      </div>
      <div id="footer">
        <div id="escudo_gobierno_pie"></div>
        <div id="pie_left">
          <div id="enlaces_pie"> </div>
          					<div id="datos_pie" >
          						Torres Quintero No. 156   CP 28000, Col.Centro Colima,Col. <a href="ubicacion.php"><img src="imagenes/ico/ico_ubicacion.png" alt="Ver Ubicación" border="0" style="cursor:pointer" title="Ver Ubicación" onclick="javascript:window.open('ubicacion.php','_self');" /></a>
                                contacto:dir_pensiones@prodigy.net.mx.
                                Teléfonos: 312 31 21116.
							</div>   
        </div>
      </div>
</div>
	<script type="text/javascript">qm_create(0,false,0,500,'lev2',false,false,false,true);</script>
</body>
<!-- InstanceEnd --></html>