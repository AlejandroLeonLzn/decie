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
    <title>Modulo 1: ¿Como iniciar tu negocio?</title>
</head>
<body data-spy="scroll" data-target="#menu">
    <br>
    <br>
    <br>
    <br>
    <br>
<h1 class="display-4">Modulo 1: ¿Como iniciar tu negocio?</h1>

    <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light bg-faded fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/decie">Volver a Decie</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#seccion-1">¿Que es el emprendimiento?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-2">¿QUE ES SER EMPRENDEDOR?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-3">Perfil Emprendedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-4">¿QUÉ ES EMPRENDER UN NEGOCIO?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-5">¿QUE SE NECESITA PARA PODER EMPRENDER UN NEGOCIO?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-6">¿QUÉ NEGOCIO QUIERO EMPRENDER?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-7">CARACTERÍSTICAS BÁSICAS DE LOS EMPRENDEDORES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-8">PLAN ESTRATÉGICO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-9">FODA</a>
              </li>
          </ul>
        </div>
      </nav>

      <div class="container">
            <div id="seccion-1" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">¿Que es el emprendimiento?</h1>
                <br>
                <p> El emprendimiento es un término muy utilizado en el ámbito empresarial, en la virtud de su relacionamiento con la creación de empresas, nuevos productos o la innovación de los mismos.  Permite a las empresas buscar innovaciones, y transformar conocimientos en nuevos productos.  Inclusive, existen cursos de nivel superior que tienen como objetivos formar individuos calificados para innovar y modificar las organizaciones modificando así el escenario económico.</p>
                </div>
                </div>
      <div class="container">
          <div id="seccion-2" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">¿QUE ES SER EMPRENDEDOR?</h1>
              <p>Entendemos por emprendedor una persona que identifica una oportunidad de negocio y decide organizar los recursos necesarios para ponerla en marcha en su futura empresa.
              <br>
              Ser un emprendedor no es una tarea sencilla, ni todo el mundo está preparado para ello ya que crear una empresa es una aventura que requiere ciertas capacidades.
              </p>
          </div>
          </div>
      <div class="container">
            <div id="seccion-3" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">Perfil Emprendedor</h1>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bL3tCdzBASE" allowfullscreen></iframe>
                </div>
                <p>Exige ser una persona creativa.
                  <br>
                  Debe ser innovadora, arriesgada, flexible, organizada y autodidacta
                  </p>
            </div>
      </div>
      <div class="container">
            <div id="seccion-4" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">¿QUÉ ES EMPRENDER UN NEGOCIO?</h1>
                <p>
                Es poner en práctica los sueños o ideas que una persona tiene para que se conviertan en el sustento estable de su vida.  
                </p>
                  <table>
                  <tr><td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/1.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Es poder planificar y proyectar la propia vida y disfrutar de realizar un trabajo de lo que más le gusta a la persona.
                  </p>
                  </div>
                  </div>
                  </td>

                  <td width="200">
                  </td>

                  <td>
                  <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="../img/2.jpg" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text">
                  Permite un desarrollo y crecimiento personal y el crecimiento de otros, ayudando a crear empleos no solo para el país sino para la comunidad o región.
                  </p>
                  </div>
                  </div>
                  </td></tr>
                  </table>
            </div>
      </div>


      <div class="container">
            <div id="seccion-5" class="mt-5 pt-5">
                <br>
                <br>
                <br>
                <h1 class="display-4">¿QUE SE NECESITA PARA PODER EMPRENDER UN NEGOCIO?</h1>
                <p>
                Tener en claro las razones por las que se inicia el negocio, la pasión.  Los deseos de la superación y la puesta en práctica de las ideas con los que uno son para si y para mejorar su entorno.
                </p>
                  <table>
                  <tr><td>      
                  Conocer la capacidad financiera con la que cuenta, para no cometer el error de endeudarse demasiado.  
                  </td>
                  <td>
                  <img class="card-img-top" src="../img/3.jpg" alt="Card image cap">
                  </td>
                  <td>
                  Contar con un equipo de trabajo comprometido en el proyecto.
                  </td></tr></table>
            </div>
      </div>


      <div class="container">
          <div id="seccion-6" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">¿QUÉ NEGOCIO QUIERO EMPRENDER?</h1>
              <p>Siempre nos hemos preguntado ¿Qué quiero hacer ?, ¿me conviene más?  
              </p>
              <table>
              <tr>
              <td width="500">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SZwBC7DEvK4" allowfullscreen></iframe>
                </div>
              </td>
              <td width="100"></td>
              <td>
                  <img class="card-img-top" src="../img/4.jpg" alt="Card image cap"></td>
              </tr>
              <tr>
              <td>
              Nivel de Estudios 
              <br>
              Edad
              <br>
              Experiencia laboral en el campo 
              <br>
              Valores.  
              </td>
              <td></td>
              <td>          
              Tolerancia
              <br>
              Conocimiento del mercado 
              <br>
              Relaciones públicas
              </td></tr>
              </table>
          </div>
          </div>

          <div class="container">
          <div id="seccion-7" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">CARACTERÍSTICAS BÁSICAS DE LOS EMPRENDEDORES </h1>
              <p>La actitud de las personas emprendedoras de éxito puede detallarse en doce conductas básicas 
              </p>
              <table>
              <tr>
              <td>
              PASIÓN<br>
              VISIÓN<br>
              CAPACIDAD DE APRENDIZAJE<br>
              BUSCAR LOGRAR RESULTADOS<br>
              DETERMINACIÓN Y CORAJE<br>
              CREATIVIDAD E INNOVACIÓN<br>  
              </td>
              <td width="200"></td>
              <td>          
              PERSISTENCIA<br>
              SENTIDO DE OPORTUNIDAD<br>
              TRABAJO EN EQUIPO<br>
              AUTOESTIMA<br>
              ASERTIVIDAD<br>
              ORGANIZACIÓN<br>
              </td></tr>
              </table>
          </div>
          </div>

          <div class="container">
          <div id="seccion-8" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">PLAN ESTRATÉGICO</h1>
              <table>
              <tr>
              <td>MISIÓN</td>
              <td width="150"></td>
              <td>VISIÓN</td></tr>
              <tr>
              <td>Es el propósito o razón de ser de la existencia de una empresa, ya que define las metas a cumplir en su entorno.</td>
              <td></td>
              <td>Es el camino al cual se dirige la empresa, a donde se quiere llegar. Involucra las decisiones estratégicas de crecimiento competitividad y mejora las rutas de acción. 
              </td></tr>
              <tr><td height="20"></td></tr>
              <tr>
              <td>VALORES</td>
              <td ></td>
              <td>OBJETIVOS</td></tr>
              <tr>
              <td>Los valores son principios que nos permiten orientar nuestro comportamiento en función de realizarnos como personas. Son creencias fundamentales que nos ayudan a preferir, apreciar y elegir unas cosas en lugar de otras un comportamiento en lugar de otro. 
              <td></td>
              <td>Son los fines hacia los que se dirige la actividad: son los resultados a lograr 
              </td></tr>
              <tr><td height="20"></td></tr>
              <tr>
              <td>OBJETIVO GENERAL</td>
              <td></td>
              <td> OBJETIVO ESPECIFICOS </td></tr>
              <tr>
              <td>Se debe reflejar la esencia planteamiento del problema y la idea expresada en el titulo del proyecto de Investigación. 
              <td></td>
              <td>Estos objetivos se desprenden del general y deben ser expresada en el titulo del proyecto de formulados de forma que estén orientados al logro del objetivo genera.
              </td></tr>
              </table>
          </div>
          </div>

          <div class="container">
          <div id="seccion-9" class="mt-5 pt-5">
                <br>
                <br>
                <br>
              <h1 class="display-4">FODA</h1>
              <p>La técnica FODA se orienta principalmente al análisis y resolución de problemas y se lleva a cabo para identificar y analizar las Fortalezas y Debilidades de la organización, así como las Oportunidades (aprovechadas y no aprovechadas) y Amenazas reveladas por la información obtenida del contexto externo.
              </p>
              <table>
              <tr>
              <td>FORTALEZAS</td>
              <td width="150"></td>
              <td>OPORTUNIDADES</td></tr>
              <tr>
              <td>Son las capacidades especiales con que cuenta la empresa, y que le permite tener una posición privilegiada frente a la competencia. Recursos que se controlan, capacidades y habilidades que se poseen, actividades que se desarrollan positivamente, etc.
              <td></td>
              <td>Son aquellos factores que resultan positivos, favorables, explotables, que se deben descubrir en el entorno en el que actúa la empresa, y que permiten obtener ventajas competitivas.
              </td></tr>
              <tr><td height="20"></td></tr>
              <tr>
              <td>DEBILIDADES</td>
              <td ></td>
              <td>AMENAZAS</td></tr>
              <tr>
              <td>Son aquellos factores que provocan una posición desfavorable frente a la competencia, recursos de los que se carece, habilidades que no se poseen, actividades que no se desarrollan positivamente, etc.
              <td></td>
              <td>Son aquellas situaciones que provienen del entorno y que pueden llegar a atentar incluso contra la permanencia de la organización. 
              </td></tr>
              <tr>
              </table>
              <h1 class="display-4">¿ PARA QUE SIRVE EL ANALISIS FODA?</h1>
              <p>El análisis FODA no solamente es elaborar cuatro listas. La parte más importante de este análisis es la evaluación de los puntos fuertes y débiles, las oportunidades y las amenazas, así como la obtención de conclusiones acerca del atractivo de la situación del objeto de estudio y la necesidad de emprender una acción en particular.</p>
          </div>
          </div>


</body>
</html>