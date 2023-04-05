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
    <title>Modulo 2: EL PERSONAL COMO ESTRATEGIA</title>
</head>
<body data-spy="scroll" data-target="#menu">
    <br>
    <br>
    <br>
    <br>
    <br>
<h1 class="display-4">Modulo 2: EL PERSONAL COMO ESTRATEGIA</h1>
<br>
<p>
La mayoría de las mipymes inicia con un numero de personal bajo, entre los cuales se destacan el autoempleo, la participación de familiares y amistades. 
<br>Esto puede significar una gran problemática, ya que en lugar de ser provechoso puede resultar contraproducente.  
</p>
<div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RbiUC1iDkes" allowfullscreen></iframe>
                </div>


    <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light bg-faded fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/decie">Volver a Decie</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#seccion-1">Organización</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-2">NIVELES DE ORGANIZACIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-3">¿QUE ES UN ORGANIGRAMA?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-4">CAPITAL HUMANO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-5">SEGURIDAD SOCIAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-6">ANÁLISIS Y DESCRIPCIÓN DE PUESTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-7">PLAN DE NEGOCIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-8">MODELO CANVAS</a>
              </li>
          </ul>
        </div>
      </nav>

      <div class="container">
            <div id="seccion-1" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">Organización</h1>
                <br>
                <p>Una organización es un sistema de actividades conscientemente coordinadas de dos o más personas.</p>
                
                <table>
                  <tr><td colspan="3">
                  Una organización existe sólo cuando:
                  </td>               
                  <tr><td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/5.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Hay personas capaces de comunicarse por la cual están dispuestas a contribuir en una acción conjunta, con el fin de alcanzar un objetivo en común.
                  </p>
                  </div>
                  </div>
                  </td>

                  <td width="200">
                  </td>

                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/6.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  La disposición a contribuir con la organización significa, principalmente, la capacidad de sacrificar el control sobre la propia conducta en beneficio de la coordinación. Esta disposición a participar y contribuir con la organización varía de individuo a individuo, aun en un mismo individuo, con el paso del tiempo.
                  </p>
                  </div>
                  </div>
                  </td></tr>
                  </table>
                  <h1 class="display-4">
                  PARTICIPANTES DE LA ORGANIZACIÓN</h1>
                  <p>
                  Las organizaciones existen debido a que las personas tienen objetivos que solamente pueden alcanzarse mediante la actividad organizada. A medida que las organizaciones crecen, desarrollan sus propios objetivos que se vuelven independientes y hasta diferentes de los objetivos de las personas que las formaron.
                  </p>
                  
      <div class="container">
          <div id="seccion-2" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">NIVELES DE ORGANIZACIÓN</h1>
              <p>La estructura y el comportamiento organizacional son variables dependientes, mientras que el ambiente y la tecnología son variables independientes. El ambiente impone a la organización desafíos externos mientras que la tecnología impone desafíos internos.<br>
              </p>

              <table>
                  <tr><td>NIVEL INSTITUCIONAL</td>
                  <td width="50"></td>
                  <td>NIVEL INTERMEDIO</td>
                  <td width="50"></td>
                  <td>NIVEL OPERACIONAL</td>
                  </tr>
                  <tr><td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/7.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Se le denomina también nivel estratégico debido a que es el nivel en el que se toman las decisiones y en el que se establecen tanto los objetivos de la organización, como las estrategias necesarias para alcanzarlos.</p>
                  </div>
                  </div>
                  </td>
                  <td>
                  </td>
                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/8.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  A este nivel pertenecen los departamentos y las divisiones de la empresa. Se encuentra entre el nivel institucional y el nivel operacional, y se ocupa de articularlos internamente.</p>
                  </div>
                  </div>
                  </td>
                  <td>
                  </td>
                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/9.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Es el nivel organizacional más bajo, en donde se realizan las tareas y también las operaciones. Comprende la programación y realización de las actividades cotidianas de la empresa.
                  </p>
                  </div>
                  </div>
                  </td></tr>
                  </table>

          </div>
          </div>
      <div class="container">
            <div id="seccion-3" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">¿QUE ES UN ORGANIGRAMA?</h1>
              
                <p>Es la representación gráfica de la estructura organizativa, usualmente aplicados a empresas u organización, define la división de funciones, niveles jerárquicos, líneas de autoridad y responsabilidad.<br>
                 </p>
                 <br>
                 <table>
                 <tr>
                 <td>VERTICAL</td>
                 <td width="30"></td>
                 <td>HORIZONTAL</td>
                 <td width="30"></td>
                 <td>CIRCULAR</td>
                 </tr>
                 <tr>
                 <td> En los organigramas verticales, cada puesto subordinado a otro se representa por cuadros en un nivel inferior, ligados a aquel por líneas que representan lacomunicación de responsabilidad y autoridad.</td>
                 <td></td>
                 <td> Despliegan las unidades de izquierda a e derecha y colocan al titular en el extremo izquierdo. Los niveles jerárquicos se ordenan en forma de columnas, en tanto que las relaciones entre las unidades se ordenan por líneas dispuestas horizontalmente.</td>
                 <td></td>
                 <td>Son formados por un cuadro central, que corresponde a la autoridad máxima de la empresa, a cuyo derredor se trazan circulos concéntricos, cada uno de los cuales constituye un nivel de organización.</td>
                 </tr>
                 </table>
            </div>
      </div>
      <div class="container">
            <div id="seccion-4" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">CAPITAL HUMANO</h1>
                <p>
                Es el capital de gente, de talentos y de competencias. La competencia de una persona es la capacidad de actuar en diversas situaciones para crear activos, tanto tangibles como intangibles. No es suficiente tener personas. Son necesarios una plataforma que sirva de base y un clima que impulse a las personas y utilice los talentos existentes. De este modo, el capital humano está constituido básicamente por los talentos y competencias de las personas.
                </p><br>
                <br>
                <br>
                <h1 class="display-4">FUNCIÓN DEL PERSONAL</h1>
                <p>
                Es indispensable contar con el personal adecuado para su empresa, ya que ellos representaran la imagen hacia el cliente. Una buena y una excelente comunicación interna pueden representar la permanencia en el mercado. Para lograr esto, es importante definir las actividades de cada puesto, los requerimientos y habilidades. </p>
                <br>
                <br>
                <br><h1 class="display-4">MOTIVACIÓN</h1>
                <table>
                <tr><td>
                <p>
                motivación del personal representa una pieza clave para el buen funcionamiento de sus labores</td>
                <td>
                <img class="card-img-top" src="../img/10.jpg" alt="Card image cap">

                </td> 
                <tr></table>
<br>
Existen muchas formas para motivar al personal, desde remuneraciones económicas, reconocimiento de logros, creación de un clima laboral estimulante, desarrollo de una cultura de confianza. 
<br>
Es muy importante que usted ponga el ejemplo de la motivación; si usted está motivado, empresa tendrá un rumbo distinto.</p>
                
            </div>
      </div>


      <div class="container">
            <div id="seccion-5" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">SEGURIDAD SOCIAL</h1>
                <p>
                Parte de la competitividad de una empresa está en el buen manejo de su recurso humano, que al final es el que hace la diferencia competitiva. Una parte de cuidar a los empleados es darles seguridad social. 
                <br><br>
                Existen diversas razones por las cuales se debe de dar de alta en el Seguro Social de un trabajador. 
                <br><br>
                Es una obligación patronal brindar seguridad social a los trabajadores, puesto que al hacerlo les brindan acceso a atención médica, les permiten ahorrar para el retiro y acceder a un financiamiento para vivienda, mediante e INFONAVTT.
                <br><br>
                Se evita entrar en conflicto con la autoridad. El IMSS tiene la facultad de inspeccionar todas las empresas de manera aleatoria o bajo una denuncia que entable el empleado afectado, en cuyo caso se puede pagar una multa de hasta el 100 % de las cuotas omitidas. 
                <br><br>
                Hacer la nómina deducible. Cuando se dan de alta a los empleados en el IMSS la nómina se deduce de impuestos, lo cual no sucede cuando se les paga por otros métodos, teniendo una percepción de ahorro mal entendido.

                </p>
            </div>
      </div>


      <div class="container">
          <div id="seccion-6" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">ANÁLISIS Y DESCRIPCIÓN DE PUESTOS</h1>
              <p>Es el procedimiento metodológico nos permite toda la información relativa a un puesto de trabajo.
              </p>

              <table>
                  <tr><td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/11.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Análisis de puesto de trabajo: puede comprendida como la identificación de los requerimientos, es decir, una descripción lo que deber ser realizado.
                  </div>
                  </div>
                  </td>
                  <td width="100">
                  </td>
                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/12.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Descripción de puestos de trabajo: exposición detallada, estructurada ordenada sistemática
puestos de trabajo: es exposición detallada, estructurada, ordenada y sistemática.</div>
                  </div>
                  </td></tr>
                  </table>

          </div>
          </div>

          <div class="container">
          <div id="seccion-7" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">PLAN DE NEGOCIO</h1>
              <p>Es una guía para el emprendedor, ya que reúne la información verbal y gráfica de lo que el negocio es o tendrá que ser. 
<br><br>
Se utiliza al crear una empresa o iniciar un negocio nuevo dentro de una empresa ya existente. 
<br><br>
En la parte financiera: describe de manera general la viabilidad financiera de tu empresa a través de proyecciones ingresos proyectados, gastos y ganancias). 
<br><br>
En el resumen ejecutivo, este es una descripción corta de tu empresa, un resumen breve de los servicios o productos que ofreces. Incluye una síntesis de tus proyecciones financieras, incluyendo ganancias y gastos esperados durante los próximos cinco años.</p>
              
<br>
                <br>
                <br>
              <h1 class="display-4">MODELO NEGOCIO</h1>
              
              <p>Describe el modo en que una organización crea, distribuye y captura la atención de un segmento de mercado.</p>
              <table>
                  <tr><td>
                  <div class="card" style="width: 18rem;">
                  
<div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kEg8nh9_AvI" allowfullscreen></iframe>
                </div>
                  <div class="card-body">
                  <p class="card-text">
                  Es la forma mediante la cual una empresa genera su sustento, esto es, genera ingresos.
                  </div>
                  </div>
                  </td>
                  <td width="100">
                  </td>
                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/13.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Indica explícitamente cómo la empresa genera dinero mediante su posicionamiento en la cadena de valor.
                  </div>
                 </td>
                  <td width="100">
                  </td>
                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/14.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Un Modelo de Negocio es dinámico y mucho menos rígido que un Plan de Negocio
                  </div>
                  </td></tr>
                  </table>
          </div>
          </div>

          <div class="container">
          <div id="seccion-8" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">MODELO CANVAS</h1>
              
              <div class="card" style="width: 40rem;">
                  <img class="card-img-top" src="../img/15.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Es una herramienta para definir y crear modelos de negocio innovadores que simplifica 4 grandes áreas: clientes oferta, infraestructura y viabilidad económica en un recuadro con 9 divisiones.
                  </div></div>
              
              <h1 class="display-4">SEGMENTO DE MERCADO (CLIENTES)</h1>
              <table>
              <tr>
              <td>Debes segmentar los clientes, para conocer el nicho de mercado y las oportunidades de nuestro negocio. La propuesta de valor es importante, pero no más que los clientes quienes son o deberían ser el centro de cualquier modelo, porque sin clientes no hay negocio. En la mayoría de los casos los proyectos nacen enfocados a producto y no al cliente.
              </td>
              <td width="500">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RbiUC1iDkes" allowfullscreen></iframe>
              </div>
              </td>
              </tr>
              </table>
              <h1 class="display-4">PROPUESTA DE VALOR</h1>
              <table>
              <tr>
              <td>Es todo aquello que te hace diferente de la competencia, pero sin olvidar un pequeño detalle: aquello que te hace diferente y por lo que tu cliente está dispuesto a pagarte. Puedes tener la idea del siglo, pero si no tienes clientes, de nada sirve. Ambos propuesta de valor y cliente- se necesitan como el oxígeno para respirar.
              </td>
              <td width="500">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NItf1By4_Wo" allowfullscreen></iframe>
              </div>
              </td>
              </tr>
              </table>
              <h1 class="display-4">CANALES DE DISTRIBUCION </h1>
              <table><tr><td>
              Se pueden utilizar y combinar diferentes canales (directos, propios y de socios). 
              <br>
              Los canales de socios reportan menos márgenes de beneficios, pero permiten a las empresas aumentar su ámbito de actuación y aprovechar los puntos fuertes de cada uno de ellos. 
              <br>En los canales propios, especialmente en los directos, los márgenes de beneficios son mayores, pero el coste de su puesta en marcha y gestión puede ser elevado.
              </td><td width="500">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cGwlGtu14O0" allowfullscreen></iframe>
              </div>
              </td></tr></table>
              <h1 class="display-4">RELACIONES CON LOS CLIENTES </h1>
              <table><tr><td>
              Las relaciones con los clientes pueden ser, entre otras, personales (cara a cara, telefónicas, etc.), automatizadas (a través de tecnología como e-mail, buzones.), a través de terceros (externalización de servicios), individuales (personalizadas), colectivas (a través de comunidades de usuarios). La clave aquí es cómo vas a conectar tu propuesta de valor con el cliente. Y eso tiene que ver con la sensación que quieres
que produzca tu marca en el cliente.</td><td width="350">
              <img class="card-img-top" src="../img/16.jpg" alt="Card image cap">
              </td></tr></table>
              <p>
              </p>
              <h1 class="display-4">FUENTES DE INGRESOS</h1>
              <table><tr><td>
              Las fuentes de ingresos, son la consecuencia de lo demás módulos, pero paradójicamente tiene que ser a priori, es decir, antes de empezar debes saber cuáles serán tus fuentes de ingresos. Eso sí, no las definitivas, porque todo negocio evolucionará y su modelo, también.
              </td><td width="350">
              <img class="card-img-top" src="../img/17.jpg" alt="Card image cap">
              </td></tr></table>
              
              <h1 class="display-4">RECURSOS CLAVE</h1>
              <p>
              Los recursos clave es el cómo vas a hacer tu propuesta de valor y con qué medios vas a contar: humanos, tecnológicos, físicos (locales, vehículos, naves, puntos de venta, etc.).
              </p>
              <h1 class="display-4">ACTIVIDADES CLAVES</h1>
              <table><tr><td>
              Debes conocer las actividades clave que darán valor a nuestra marca, y saber las estrategias necesarias para potenciarlas. Ésta es una de las piezas más complicadas de definir dentro de un modelo de negocio porque de ella depende que tengamos claro-y que así lo transmitamos al mercado- qué somos y qué queremos ser.
              </td><td width="350">
              <img class="card-img-top" src="../img/18.jpg" alt="Card image cap">
              </td></tr></table>
          
              <h1 class="display-4">RED DE ALIANZAS O ASOCIACIONES O SOCIOS CLAVE</h1>
              <p>
              Debes tener en cuenta los socios clave con los el negocio. En otras palabras, definir las estrategias de networking (es una forma de conocer gente nueva en un contexto de negocios o de relaciones entre profe con potenciales socios o proveedores, entre otras figuras importantes. que establecer contactos y alianzas para profesionales)
              </p>
              <h1 class="display-4">ESTRUCTURA DE COSTOS</h1>
              
              <table><tr><td>
              Un aspecto que no se tiene muy en cuenta cuando se define el modelo de negocio es cuándo cobra tu empresa. Para esto, debes marcar las estructuras de costes, para llegar a saber el precio que tendrá que pagar el cliente por adquirir el bien ofrecerá nuestra idea de negocio. 
              </td><td width="500">
              <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z1WfjXnOvHY" allowfullscreen></iframe>
              </div>
              </td></tr></table>

          </div>
          </div>

</body>
</html>