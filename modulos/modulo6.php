<?php
session_start();
if (isset($_SESSION['login'])) {
}else{
  header('Location: /decie');
}?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body{
        position: relative;
    }
    </style>
    <title>Modulo 6: MARCO LEGAL</title>
</head>
<body data-spy="scroll" data-target="#menu">
    <br>
    <br>
    <br>
    <br>
    <br>
<h1 class="display-4">Modulo 6: MARCO LEGAL</h1>

    <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light bg-faded fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/decie">Volver a Decie</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#seccion-1">EMPRESARIO INDIVIDUAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-2">SOCIEDADES MERCANTILES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-3">FACTURACIÓN ELECTRÓNICA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-4">SERVICIO DE ADMINISTRACION TRIBUTARIA (SAT)</a>
              </li>
              
          </ul>
        </div>
      </nav>

      <div class="container">
            <div id="seccion-1" class="mt-5 pt-5">
                <br>
                <h1 class="display-4">EMPRESARIO INDIVIDUAL</h1>
                <br>
                <p>
                Personas Físicas: Es una mujer o un hombre mayor de edad, susceptible a adquirir derechos y obligaciones. Una sola persona puede constituirse en una organización económica y comenzar a realizar el objetivo planeado.  
                <br>
                Como persona física se tienen varias opciones para realizar actividades y poder obtener ingresos:
                <br>
a.	Salarios
<br>
b.	Actividades empresariales o profesionales
<br>
<h2>ACTIVIDADES EMPRESARIALES 
</h2><br>
Aplica para quienes vayan a realizar actividades comerciales, industriales, agrícolas, ganaderas, de pesca o silvícolas. No tiene límite en los ingresos y deberá emitir facturas

<br>
<h2>ACTIVIDADES PROFESIONALES 
</h2><br>
Aplica para quienes se dedican a prestar servicios profesionales de manera independiente y cobran a través de un recibo de honorarios.

<br>
<h2>ARRENDAMIENTO DE BIENES INMUEBLES 
</h2><br>
Aplica para quienes obtienen ingresos por dar en renta o alquiler edificios, locales comerciales, casas habitación, departamentos, oficinas, bodegas, entre otros viene inmuebles.

                </p>
                
                
                  
      <div class="container">
          <div id="seccion-2" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">SOCIEDADES MERCANTILES</h1>
              <br>
              <p>
              La información que se debe tener a la mano, para constituir la empresa a través de este portal es:
<br>
•	Domicilio completo del usuario<br>
•	Domicilio de la empresa (convencional, fiscal y/o de establecimiento)<br>
•	Datos Generales, RFC O CURP de los accionistas, socios y administradores<br>

              </p>
              <br>
              
              <div class="card" style="width: 50rem;">
                  <img class="card-img-top" src="../img/25.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Nota: Este medio solo sirve para constituir sociedades anónimas y de responsabilidad limitada de capital variable. Trámite de Registro Federal de Contribuyentes (RFC)
                  </p>
                  </div>
                  </div>
<p><br><br>
Para solicitar el Registro Federal de Contribuyentes (RFC), es necesario iniciar el trámite a través de Internet (www.sat.gob.mx) y concluirlo en cualquier administración local de servicios al contribuyente dentro de los diez días hábiles siguientes al envío de la solicitud. 
<br><br>
•	Acta de Nacimiento o Constancia de CURP<br>
•	Comprobante de Domicilio<br>
•	Identificación Personal<br>
•	Número de Folio asignado<br><br>
A finalizar el trámite se le entregarán los siguientes documentos:<br><br>
•	Copia de la solicitud de inscripción<br>
•	Cédula de Identificación Fiscal o Constancia de registro<br>
•	Guía de Obligaciones<br>
•	Acuse de Inscripción al RFC<br><br>
En la Guía de Obligaciones, se pueden consultar todas las obligaciones con las que se debe cumplir<br><br>
•	ISR: Impuesto sobre la Renta<br>
•	IEPS: Impuesto Especial sobre Producción y Servicios<br>
•	IVA: Impuesto al Valor Agregado<br>
</p>


          </div>
          </div>
      <div class="container">
            <div id="seccion-3" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">FACTURACIÓN ELECTRÓNICA</h1>
                <p>
                Una factura electrónica es un documento electrónico que cumple con los requisitos legal como la autenticidad de su origen y la integridad de su contenido.
                <br>
                Una factura electrónica se construye en 2 etapas:
                <br><br>
1. Se crea la factura tal y se almacena en un fichero de datos
<br>
2. Se procede a su firma con un certificado digital propiedad del emisor que cifra el contenido de factura y añade el sello digital a la misma
                <br>
                <h2>BENEFICIOS DE LA FACTURACIÓN ELECTRÓNICA</h2><br><br>
• Oportunidad en la información, tanto en la recepción como en el envió.<br>
• Facilidad en los procesos de auditoria.<br>
• Mayor seguridad en el resguardo de los documentos.<br>
• Menor probabilidad de falsificación.<br>
• Agilidad en la localización de información.<br>
• Procesos administrativos más rápidos y eficientes.<br>
• Reducción de costos.<br>
• Reducción en tiempos de gestión.<br>
• Reduce errores en el proceso de generación, captura, entrega y almacenamiento.<br>
• Registro de la hora, el minuto y el segundo de emisión del comprobante fiscal digital<br>
• Obtención de sellos en serie y folios de serie ante la Secretaría de Hacienda y Crédito<br>
• Público, con previa obtención de la Firma Electrónica Avanzada.<br>
• Contabilidad automatizada.<br>
• Facilidad para el cálculo de impuestos<br><br>

<h3>¿QUÉ PASOS SE DEBE SEGUIR SI SE DESEA FACTURAR?
</h3><br><br>
•	Primero se debe registrar ante el Sistema de Atención Tributaria (SAT) ingresando el CURP<br>
•	Posteriormente se Prosigue al alta en un régimen fiscal<br>
•	El SAT cuenta con sistema de facturación electrónica gratuita, el cual puede ser<br>
•	utilizado por cualquier persona o en caso contrario se puede acudir con un proveedor<br>
•	autorizado<br><br>


<h3>¿QUIÉNES EMITEN FACTURA ELECTRÓNICA?
</h3><br><br>
Las personas que adquieran bienes, disfruten de su uso o goce temporal, reciban servicios o aquéllas a las que les hubieren retenido contribuciones deberán solicitar el comprobante fiscal digital por Internet respectivo, según el Código Fiscal de la Federación.
<br><br>

<h3>¿QUÉ CONTIENE?
</h3><br><br>
Cada factura electrónica emitida cuenta con un sello digital que le da validez ante el SAT, es un código que sirve como resumen del contenido de la factura. Al emitir una factura se generan dos archivos, uno en formato PDF y otro en XML.
<br><br>
<h3>¿EN DÓNDE SE EMITEN?
</h3><br><br>
Para emitir una factura electrónica los contribuyentes pueden utilizar el portal del SAT, el cual es gratuito o bien, si tienen una carga administrativa alta y deben emitir gran cantidad de facturas puede contratar a un Proveedor Autorizado de Certificación (PAC).
<br><br>
<h3>CARACTERÍSTICAS DE LA NUEVA VERSIÓN. MÁS INFORMACIÓN PARA EL SAT
</h3><br><br>
Tipo de moneda<br>
Tipo de activo que vende <br>
Bancos<br>
Dirección de postales <br>
<br><br>
<h3>PREPÁRATE PARA EL COMPLEMENTO DE PAGOS
</h3><br><br>
A partir de abril tanto personas físicas como morales tendrán la obligación de acompañar la factura electrónica con el complemento para la recepción de pagos.
<br><br>
<h3>MULTAS POR FACTURAR ERRÓNEAMENTE

</h3><br><br>
El SAT otorgó un periodo de gracia hasta mediados de año en el cual no aplicará ninguna multa o sanción para los contribuyentes que cometan errores, principalmente en el uso del catálogo de productos y servicios.
<br><br>
Cuando termine la prórroga, los usuarios que cometan errores pueden hacerse acreedores a las siguientes multas:<br><br>
•	Persona física: de 1,240 pesos a 2,410 pesos.<br>
•	Persona moral: de 13,5470 pesos a 77,580 pesos y en caso de reincidencia el fisco podrá clausurar sus actividades de tres a 15 días.<br>
•	Donataria autorizada: de 12,070 pesos a 69,000 pesos y en caso de reincidencia se le revocará su autorización.<br>

                </p>
                
              
              
            </div>
      </div>

      <div class="container">
            <div id="seccion-4" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">SERVICIO DE ADMINISTRACION TRIBUTARIA (SAT)</h1>
                
                <p>
                El Servicio de Administración Tributaria (SAT) es un órgano desconcentrado de la Secretaría de Hacienda y Crédito Público, que tiene la responsabilidad de aplicar la legislación fiscal y aduanera, con el fin de que las personas físicas y morales contribuyan proporcional y equitativamente al gasto público; de fiscalizar a los contribuyentes para que cumplan con las disposiciones tributarias y aduaneras; de facilitar e incentivar el cumplimiento voluntario, y de generar y proporcionar la información necesaria para el diseño y la evaluación de la política tributaria.
<br>
<br>
Sus objetivos principales son
<br>
<br>
1. Aumentar la eficiencia recaudatoria.<br>
2. Lograr conciencia de riesgo ante el incumplimiento.<br>
3. Reducir el contrabando y la economía informal.<br>
4. Contar con un padrón completo y confiable.<br>
5. Establecer un control de obligaciones universal, oportuno y exhaustivo.<br>
6. Mejorar la eficiencia de la Administración Tributaria.<br>
7. Contar con una nueva cultura organizacional que impulse los valores de honestidad, calidad, transparencia y vocación de servicio, apegada a la ley y con personal altamente calificado.<br>
8. Disponer de sistemas y procesos informáticos integrados y seguros, orientados a procesos internos y al contribuyente.<br>
9. Cambiar la percepción del contribuyente hacia la Institución por una imagen de honestidad, calidad, transparencia, servicio, apego a la ley y profesionalismo.
<br>

                </p>
                
            </div>
      </div>



</body>
</html>