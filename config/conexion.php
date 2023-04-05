<?php
include("config.php");
class conex{
	function conectar(){
		$conexion=new mysqli($_SESSION['host'],$_SESSION['usr'],$_SESSION['psw'],$_SESSION['bd']);
		return $conexion; 
	}

	function logincomp($odbc, $user, $pass){
		$cdr=$odbc->query("call MostrarUser('".$user."');");
		session_start();
		while ($row = mysqli_fetch_row($cdr)){
			
			if (password_verify($pass, $row[2])){
				$_SESSION['iduser']=($row[0]);
				$_SESSION['login']=($row[1]);
				$_SESSION['name']=($row[3]." ".$row[4]);
				$_SESSION['pago']=($row[5]);
				echo 'sesion creada';
			}else{
    			echo 'Usuario o contraseña incorrecto';
				}
		}
	}
	function correorepetido($odbc,$user){
		$cdr=$odbc->query("call MostrarUser('".$user."');");
		$cont=0;
		while ($row = mysqli_fetch_row($cdr)){
			
			if ($row[1]==$user){
				$cont++;
			}
				
		}if($cont>0){
			echo '<script>alert("Correo Electronico ya Registrado")</script> ';
			echo "<script>location.href='/decie/login.php'</script>";
		}
	}
	function mostrarcurso($odbc, $user){
		$cdr=$odbc->query("call MostrarUsers1('".$user."');");
		while ($row = mysqli_fetch_row($cdr)){
			echo utf8_encode('
			<tbody>
			<tr>
			<td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="./modulos/modulo'.$row[5].'.php">modulo</a></td><td><a href="./modulos/tareas'.$row[5].'.php">tareas</a></td><td><a href="./modulos/examen'.$row[5].'.php">Examen</a></td><td>'.$row[10].'</td
			</tr>
			</tbody>
			');
		}
	}

	function mostrarperfil($odbc, $user){
		$cdr=$odbc->query("call PerfilM('".$user."');");
		while ($row = mysqli_fetch_row($cdr)){
			echo('
			<table border="2" align="center" class="table" >
			<tbody>
			<tr>
			<td>Nombre(s)</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			</tr>
			<tr>
			<td><input type=text name=nombre class="form-control" value="'.$row[1].'"></td><td>
			<input type=text name=ape_p class="form-control" value="'.$row[2].'"></td><td>
			<input type=text name=ape_m class="form-control" value="'.$row[3].'"></td>
			</tr>
			<tr>
			<td>Fecha de Nacimiento</td>
			<td>Curp</td>
			<td>Numero Telefonico</td>
			</tr>
			<tr>
			<td>
			<input type=date name=nacimiento class="form-control" value="'.$row[4].'"></td><td>
			<input type=text name=curp class="form-control" value="'.$row[5].'"></td><td>
			<input type=number name=telefono class="form-control" value="'.$row[6].'"></td>
			</tr>
			<tr>
			<td>Estado Civil</td>
			<td>Sexo</td>
			<td>Escolaridad</td>
			</tr>
			<tr>
			<td>
			<select name="EstadoCivil" id="EstadoCivil" class="form-control">
			<option value="'.$row[7].'" selected>'.$row[7].'</option>
			<option value="Soltero(a)">Soltero(a)</option>
			<option value="Casado(a)">Casado(a)</option>
			<option value="Divorciado(a)">Divorciado(a)</option>
			<option value="Viudo(a)">Viudo(a)</option>
			<option value="Union Libre">Union Libre</option>
			<option value="Separado(a)">Separado(a)</option>
			</select></td><td>
				<select name="Sexo" id="Sexo" class="form-control">
	  			<option value="'.$row[8].'" selected>'.$row[8].'</option>
				<option value="Masculino">Masculino</option>
				<option value="Femenino" checked>Femenino</option>
			</select>
			</td><td>
			<select name="Escolaridad" id="Escolaridad" class="form-control">
	  <option value="'.$row[9].'" selected>'.$row[9].'</option>
      <option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
      <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
      <option value="Carrera Tecnica">Carrera Tecnica</option>
      <option value="Licenciatura">Licenciatura</option>
      <option value="Maestria">Maestria</option>
      <option value="Doctorado">Doctorado</option>
      <option value="Ninguna">Ninguna</option>
      </select></td>
			</tr>
			<tr>
			<td>Estado</td>
			<td>Municipio</td>
			<td>Domicilio</td>
			</tr>
			<tr>
			<td>
			<input type=text name=Estado class="form-control" value="'.$row[10].'"></td><td>
			<input type=text name=municipio class="form-control" value="'.$row[11].'"></td><td>
			<input type=text name=Domicilio class="form-control" value="'.$row[12].'"></td>
			</tr>
			<tr>
			<td>Codigo Postal</td>
			<td>Correo Electronico</td>
			<td>Pago</td>
			</tr>
			<tr>
			<td>
			<input type=number name=CodigoPostal class="form-control" value="'.$row[13].'"></td><td>
			<input type=email name=email class="form-control" value="'.$row[14].'"></td><td>
			'.$row[16].'</td>
			</tr>
			<br>
			</tbody>
			</table>
			');
		}
	}
	
	function agregausr ($odbc,$nomb,$apep,$apem,$naci,$curp,$tele,$civi,$sexo,$esco,$esta,$muni,$domi,$codi,$mail,$pass){
		$odbc->query("call AgregarUsers1 ('".$nomb."','".$apep."','".$apem."','".$naci."','".$curp."','".$tele."','".$civi."','".$sexo."','".$esco."','".$esta."','".$muni."','".$domi."','".$codi."','".$mail."','".$pass."');") ;
		echo 'Registro exitoso';
	}
	function modificarusr ($odbc,$id,$nomb,$apep,$apem,$naci,$curp,$tele,$civi,$sexo,$esco,$esta,$muni,$domi,$codi,$mail){
		$odbc->query("call ActualizaUsr ('".$id."','".$nomb."','".$apep."','".$apem."','".$naci."','".$curp."','".$tele."','".$civi."','".$sexo."','".$esco."','".$esta."','".$muni."','".$domi."','".$codi."','".$mail."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/user.php');
		
	}

	function mostraridreg($odbc, $user){
		$cdr=$odbc->query("call MostrarU('".$user."');");
		
		session_start();
		while ($row = mysqli_fetch_row($cdr)){
			$_SESSION['iduser']=($row[0]);
		}
	}

	function pagousr ($odbc,$mail){
		$odbc->query("call PagoCurso ('".$mail."');") ;
		echo '<script>alert("Pago realizado exitosamente")</script>';
	}

	function agregacursos ($odbc,$iduser){
		for ($i = 1; $i <= 6; $i++) {
			$odbc->query("call AgregarCurso1 ('".$iduser."','".$i."');") ;
			}

		echo 'Registro exitoso';
	}
	function agregarevaluacion1 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}
	function agregarevaluacion2 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}	
	function agregarevaluacion3 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}
	function agregarevaluacion4 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}
	function agregarevaluacion5 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}
	function agregarevaluacion6 ($odbc,$iduser,$idP,$arreglo,$intento){
		for ($i = 1; $i <= 10; $i++) {
			$odbc->query("call AgregarEvaluacion ('".$iduser."','".$idP[$i]."','".$arreglo[$i]."','".$intento."');") ;
			}		
	}
	function Calificar1($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','1');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica1']=$cal;
	}

	function Calificar2($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','2');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica2']=$cal;
	}

	function Calificar3($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','3');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica3']=$cal;
	}
	function Calificar4($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','4');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica4']=$cal;
	}
	function Calificar5($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','5');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica5']=$cal;
	}
	function Calificar6($odbc, $iduser){
		$cdr=$odbc->query("call Calificacion1('".$iduser."','6');");
		$suma=0;
		$cantidad=0;
		while ($row = mysqli_fetch_row($cdr)){
			if($row[2]==$row[3]){
				$suma++;
			}
			$cantidad++;
		}
		$cal=$suma*10/$cantidad;
		$_SESSION['califica6']=$cal;
	}


	function regcal1($odbc, $iduser, $idmodulo, $cali){
		$odbc->query("call Actualizacal1 ('".$iduser."','".$idmodulo."','".$cali."');") ;
		echo 'calificacion registrada con exito';
	}	
	
	function resint($odbc, $iduser, $idmodulo){
		$odbc->query("call ActualizarIntentos ('".$iduser."','".$idmodulo."');") ;
		echo 'intento registrado con exito';
	}

	function regrep($odbc, $iduser, $idmodulo){
		$odbc->query("call Reprobar ('".$iduser."','".$idmodulo."');") ;
	}
	function regapr($odbc, $iduser, $idmodulo){
		$odbc->query("call Aprobar ('".$iduser."','".$idmodulo."');") ;
	}


	function Preguntas1($odbc1,$odbc2){
		$cdr=$odbc1->query("call opciones('1');");
		$numero=0;
		while ($row = mysqli_fetch_row($cdr)){
			
		if($row[1]=='A'){
			$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
			<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
		}
		if($row[1]=='B'){
			$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
			<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
		}
		if($row[1]=='C'){

			$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
			<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
		}
	}
		$cdr=$odbc2->query("call CuestionarioAleatorio2('1');");
		$cont=1;
		while ($rowo = mysqli_fetch_row($cdr)){
		echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
		<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
		$_SESSION['idPregunta'.$cont.'']=$rowo[2];
		$cont++;
		}
			
		}

		function Preguntas2($odbc1,$odbc2){
			$cdr=$odbc1->query("call opciones('2');");
			$numero=0;
			while ($row = mysqli_fetch_row($cdr)){
				
			if($row[1]=='A'){
				$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
			if($row[1]=='B'){
				$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
			if($row[1]=='C'){
	
				$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
		}
			$cdr=$odbc2->query("call CuestionarioAleatorio2('2');");
			$cont=1;
			while ($rowo = mysqli_fetch_row($cdr)){
			echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
			<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
			$_SESSION['idPregunta'.$cont.'']=$rowo[2];
			$cont++;
			}
				
			}

			function Preguntas3($odbc1,$odbc2){
				$cdr=$odbc1->query("call opciones('3');");
				$numero=0;
				while ($row = mysqli_fetch_row($cdr)){
					
				if($row[1]=='A'){
					$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
				if($row[1]=='B'){
					$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
				if($row[1]=='C'){
		
					$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
			}
				$cdr=$odbc2->query("call CuestionarioAleatorio2('3');");
				$cont=1;
				while ($rowo = mysqli_fetch_row($cdr)){
				echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
				<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
				$_SESSION['idPregunta'.$cont.'']=$rowo[2];
				$cont++;
				}
					
				}

				function Preguntas4($odbc1,$odbc2){
					$cdr=$odbc1->query("call opciones('4');");
					$numero=0;
					while ($row = mysqli_fetch_row($cdr)){
						
					if($row[1]=='A'){
						$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
						<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
					}
					if($row[1]=='B'){
						$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
						<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
					}
					if($row[1]=='C'){
			
						$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
						<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
					}
				}
					$cdr=$odbc2->query("call CuestionarioAleatorio2('4');");
					$cont=1;
					while ($rowo = mysqli_fetch_row($cdr)){
					echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
					<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
					$_SESSION['idPregunta'.$cont.'']=$rowo[2];
					$cont++;
					}
						
					}

		function Preguntas5($odbc1,$odbc2){
			$cdr=$odbc1->query("call opciones('5');");
			$numero=0;
			while ($row = mysqli_fetch_row($cdr)){
				
			if($row[1]=='A'){
				$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
			if($row[1]=='B'){
				$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
			if($row[1]=='C'){

				$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
				<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
			}
		}
			$cdr=$odbc2->query("call CuestionarioAleatorio2('5');");
			$cont=1;
			while ($rowo = mysqli_fetch_row($cdr)){
			echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
			<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
			$_SESSION['idPregunta'.$cont.'']=$rowo[2];
			$cont++;
			}
				
			}

			function Preguntas6($odbc1,$odbc2){
				$cdr=$odbc1->query("call opciones('6');");
				$numero=0;
				while ($row = mysqli_fetch_row($cdr)){
					
				if($row[1]=='A'){
					$arraya[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
				if($row[1]=='B'){
					$arrayb[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
				if($row[1]=='C'){

					$arrayc[$row[0]]=('<input class="form-check-input" type="radio" name="'.$row[0].'" id="'.$row[0].'" value="'.$row[1].'">
					<label class="form-check-label" for="'.$row[0].'">'.$row[1].') '.$row[2].'</label>' );
				}
			}
				$cdr=$odbc2->query("call CuestionarioAleatorio2('6');");
				$cont=1;
				while ($rowo = mysqli_fetch_row($cdr)){
				echo utf8_encode('<tr><td>'.$cont.'</td><td colspan="3">'.$rowo[3].'</td></tr>
				<tr><td></td><td>'.$arraya[$rowo[2]].'</td><td>'.$arrayb[$rowo[2]].'</td><td>'.$arrayc[$rowo[2]].'</td></tr>' );
				$_SESSION['idPregunta'.$cont.'']=$rowo[2];
				$cont++;
				}
					
				}


	function mostrarintento($odbc,$iduser,$idmodulo){
		$cdr=$odbc->query("call MostrarIntento('".$iduser."','".$idmodulo."');");
		while ($row = mysqli_fetch_row($cdr)){
			$_SESSION['intento']=$row[0];
			if ($row[0]<1){
				
			echo '<script>alert("sobrepasaste los intentos para realizar este examen")</script> ';
			echo "<script>location.href='/decie'</script>";
			}else{
				
				}
		}
	}
	function loginadmin($odbc, $user, $pass){
		$cdr=$odbc->query("call MostrarAdministrador('".$user."');");
		while ($row = mysqli_fetch_row($cdr)){
			session_start();
			if (password_verify($pass, $row[2])){
				$_SESSION['adminlogin']=($row[1]);
				echo 'sesion creada';
			}else{
    			echo 'administrador o contraseña incorrecto';
				}
		}
	}

	function mostrarusers($odbc){
		$cdr=$odbc->query("call MostrarUsuariosT;");
		while ($row = mysqli_fetch_row($cdr)){
		echo utf8_encode('
		<tr>
		<form action="usuario.php" method="post"><td>
		<input class="form-check-input" type="radio" name="usuario" id="usuario" value="'.$row[14].'" checked>'.$row[0].'</td><td>'.$row[1].' '.$row[2].' '.$row[3].'</td><td>'.$row[4].'</td>
		<td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[14].'</td><td>'.$row[16].'</td><td><input type="submit" value="Ver" class="btn btn-success"></td>
		</tr></form>' );
		}
	}

	function mostrarperfiladmin($odbc, $user){
		$cdr=$odbc->query("call PerfilM('".$user."');");
		while ($row = mysqli_fetch_row($cdr)){
			echo('
			<table border="2" align="center" class="table" >
			<tbody>
			<tr>
			<td>Nombre(s)</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			</tr>
			<tr>
			<td><input type=text name=nombre class="form-control" value="'.$row[1].'"></td><td>
			<input type=text name=ape_p class="form-control" value="'.$row[2].'"></td><td>
			<input type=text name=ape_m class="form-control" value="'.$row[3].'"></td>
			</tr>
			<tr>
			<td>Fecha de Nacimiento</td>
			<td>Curp</td>
			<td>Numero Telefonico</td>
			</tr>
			<tr>
			<td>
			<input type=date name=nacimiento class="form-control" value="'.$row[4].'"></td><td>
			<input type=text name=curp class="form-control" value="'.$row[5].'"></td><td>
			<input type=number name=telefono class="form-control" value="'.$row[6].'"></td>
			</tr>
			<tr>
			<td>Estado Civil</td>
			<td>Sexo</td>
			<td>Escolaridad</td>
			</tr>
			<tr>
			<td>
			<select name="EstadoCivil" id="EstadoCivil" class="form-control">
			<option value="'.$row[7].'" selected>'.$row[7].'</option>
			<option value="Soltero(a)">Soltero(a)</option>
			<option value="Casado(a)">Casado(a)</option>
			<option value="Divorciado(a)">Divorciado(a)</option>
			<option value="Viudo(a)">Viudo(a)</option>
			<option value="Union Libre">Union Libre</option>
			<option value="Separado(a)">Separado(a)</option>
			</select></td><td>
				<select name="Sexo" id="Sexo" class="form-control">
	  			<option value="'.$row[8].'" selected>'.$row[8].'</option>
				<option value="Masculino">Masculino</option>
				<option value="Femenino" checked>Femenino</option>
			</select>
			</td><td>
			<select name="Escolaridad" id="Escolaridad" class="form-control">
	  <option value="'.$row[9].'" selected>'.$row[9].'</option>
      <option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
      <option value="Preparatoria/Bachillerato">Preparatoria/Bachillerato</option>
      <option value="Carrera Tecnica">Carrera Tecnica</option>
      <option value="Licenciatura">Licenciatura</option>
      <option value="Maestria">Maestria</option>
      <option value="Doctorado">Doctorado</option>
      <option value="Ninguna">Ninguna</option>
      </select></td>
			</tr>
			<tr>
			<td>Estado</td>
			<td>Municipio</td>
			<td>Domicilio</td>
			</tr>
			<tr>
			<td>
			<input type=text name=Estado class="form-control" value="'.$row[10].'"></td><td>
			<input type=text name=municipio class="form-control" value="'.$row[11].'"></td><td>
			<input type=text name=Domicilio class="form-control" value="'.$row[12].'"></td>
			</tr>
			<tr>
			<td>Codigo Postal</td>
			<td>Correo Electronico</td>
			<td>Pago</td>
			</tr>
			<tr>
			<td>
			<input type=number name=CodigoPostal class="form-control" value="'.$row[13].'"></td><td>
			<input type=text name=email class="form-control" value="'.$row[14].'"></td><td>
			<input type=text name=pago class="form-control" value="'.$row[16].'"</td>
			</tr>
			<br>
			</tbody>
			</table>
			');
		}
	}

	function modificarusradmin ($odbc,$id,$nomb,$apep,$apem,$naci,$curp,$tele,$civi,$sexo,$esco,$esta,$muni,$domi,$codi,$mail,$pago){
		$odbc->query("call ActualizarUsrAdm ('".$id."','".$nomb."','".$apep."','".$apem."','".$naci."','".$curp."','".$tele."','".$civi."','".$sexo."','".$esco."','".$esta."','".$muni."','".$domi."','".$codi."','".$mail."','".$pago."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/administrador/paneldeadministrador.php');
		
	}
	function mostrarcursoadmin($odbc, $user){
		$cdr=$odbc->query("call MostrarUsers1('".$user."');");
		

		while ($row = mysqli_fetch_row($cdr)){
			echo utf8_encode('
			<tbody>
			<tr>
			
			<td>'.$row[5].'		
			</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td><a href="../modulos/archivos/Tarea'.$row[5].'/Tarea'.$row[5].'id'.$row[0].''.$row[3].' '.$row[4].'.pdf">tarea</a></td><td><a href="../administrador/Examen'.$row[5].'.php">Examen</a></td><td>'.$row[10].'</td
					
			</tr>
			</tbody>
			
			');
			
			$_SESSION['idu']=($row[0]);
		}
	}

	function agregausradm ($odbc,$user,$pass){
		$odbc->query("call AgregarAdmin ('".$user."','".$pass."');") ;
		echo 'Registro exitoso';
	}

	function CalificacionAdm($odbc, $iduser,$idmodulo){
		$cdr=$odbc->query("call Calificacionadm('".$iduser."','".$idmodulo."');");

		while ($row = mysqli_fetch_row($cdr)){
			echo utf8_encode('
			<tbody>
			<tr>
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>');
			if($row[3]==$row[4]){
				echo utf8_encode('<td><img style="max-width: 10%; class="card-img-top" src="../img/acierto.png" alt="Card image cap"></td>');
			}else{
				echo utf8_encode('<td><img style="max-width: 10%; class="card-img-top" src="../img/x.png" alt="Card image cap"></td>');
			}

			echo utf8_encode('</tr>
			</tbody>
			');
		}
		
	}

	function mostrarasmin($odbc){
		$cdr=$odbc->query("call MostrarAdminT;");
		while ($row = mysqli_fetch_row($cdr)){
		echo utf8_encode('
      <option value="'.$row[0].'">'.$row[1].'</option>
      
		
		' );
		}
	}

	function modificaradmin ($odbc,$ida,$user,$pass){
		$odbc->query("call ActualizarAdmin ('".$ida."','".$user."','".$pass."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/administrador/paneldeadministrador.php');
		
	}

	function eliminaadm ($odbc,$ida){
		$odbc->query("call EliminaAdmin ('".$ida."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/administrador/paneldeadministrador.php');
		
	}

	function modificarcontra ($odbc,$user,$pass){
		$odbc->query("call ActualizarContra ('".$user."','".$pass."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/administrador/paneldeadministrador.php');
	}

	
	function eliminamodulos ($odbc,$user){
		$odbc->query("call EliminaModulosUsr ('".$user."');") ;
		echo 'datos acualizados con exitoso';
	}

	function eliminausr ($odbc,$user){
		$odbc->query("call EliminaUsuario ('".$user."');") ;
		echo 'datos acualizados con exitoso';
		header('Location: /decie/administrador/paneldeadministrador.php');
	}



}
?>
