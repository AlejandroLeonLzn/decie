-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2019 a las 16:34:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `decie`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizaCal1` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200), IN `cal` VARCHAR(200))  BEGIN

UPDATE calificacion set calificacion = cal

WHERE id_usuario = idu AND id_modulo = idm
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarAdmin` (IN `idu` VARCHAR(200), IN `usr` VARCHAR(200), IN `psw` VARCHAR(200))  BEGIN

UPDATE administrador set usuario = usr, pass = psw

WHERE id = idu


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarContra` (IN `idu` VARCHAR(200), IN `psw` VARCHAR(200))  BEGIN

UPDATE usuarios set contraseña = psw

WHERE correo_electronico = idu


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarIntentos` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200))  BEGIN

UPDATE calificacion set intentos_rest = intentos_rest - "1"
WHERE id_usuario = idu AND id_modulo = idm
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsrAdm` (IN `idu` VARCHAR(200), IN `nom` VARCHAR(200), IN `app` VARCHAR(200), IN `apm` VARCHAR(200), IN `fnc` VARCHAR(200), IN `cur` VARCHAR(200), IN `tel` VARCHAR(200), IN `civ` VARCHAR(200), IN `sex` VARCHAR(200), IN `esc` VARCHAR(200), IN `est` VARCHAR(200), IN `mun` VARCHAR(200), IN `dom` VARCHAR(200), IN `cod` VARCHAR(200), IN `elc` VARCHAR(200), IN `pay` VARCHAR(200))  BEGIN

UPDATE usuarios set nombre = nom, apellido_p = app, apellido_m = apm, fecha_nac = fnc, curp = cur, 
telefono = tel, estado_civil = civ, sexo = sex, escolaridad = esc, estado = est, municipio = mun, 
domicilio = dom, cod_postal = cod, correo_electronico = elc, pago = pay

WHERE correo_electronico = idu


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizaUsr` (IN `idu` VARCHAR(200), IN `nom` VARCHAR(200), IN `app` VARCHAR(200), IN `apm` VARCHAR(200), IN `fnc` VARCHAR(200), IN `cur` VARCHAR(200), IN `tel` VARCHAR(200), IN `civ` VARCHAR(200), IN `sex` VARCHAR(200), IN `esc` VARCHAR(200), IN `est` VARCHAR(200), IN `mun` VARCHAR(200), IN `dom` VARCHAR(200), IN `cod` VARCHAR(200), IN `elc` VARCHAR(200))  BEGIN

UPDATE usuarios set nombre = nom, apellido_p = app, apellido_m = apm, fecha_nac = fnc, curp = cur, 
telefono = tel, estado_civil = civ, sexo = sex, escolaridad = esc, estado = est, municipio = mun, 
domicilio = dom, cod_postal = cod, correo_electronico = elc

WHERE id_usuario = idu


;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarAdmin` (IN `nom` VARCHAR(200), IN `psw` VARCHAR(200))  BEGIN

INSERT INTO administrador (usuario, pass) 

VALUES (nom,psw)

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarCurso1` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200))  BEGIN

INSERT INTO calificacion (id_usuario, id_modulo) 

VALUES (idu,idm);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarEvaluacion` (IN `idu` VARCHAR(200), IN `idp` VARCHAR(200), IN `res` VARCHAR(200), IN `ito` VARCHAR(200))  BEGIN

INSERT INTO evaluacion (id_usuario, id_pregunta, respuesta, intento) 

VALUES (idu,idp,res,ito);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarUsers1` (IN `nom` VARCHAR(200), IN `app` VARCHAR(200), IN `apm` VARCHAR(200), IN `fnc` VARCHAR(200), IN `cur` VARCHAR(200), IN `tel` VARCHAR(200), IN `civ` VARCHAR(200), IN `sex` VARCHAR(200), IN `esc` VARCHAR(200), IN `est` VARCHAR(200), IN `mun` VARCHAR(200), IN `dom` VARCHAR(200), IN `cod` VARCHAR(200), IN `elc` VARCHAR(200), IN `psw` VARCHAR(200))  BEGIN

INSERT INTO usuarios (nombre, apellido_p, apellido_m, fecha_nac, curp, telefono, estado_civil, sexo, escolaridad, estado, municipio, domicilio, cod_postal, correo_electronico, contraseña) 

VALUES (nom,app,apm,fnc,cur,tel,civ,sex,esc,est,mun,dom,cod,elc,psw)

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Aprobar` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200))  BEGIN

UPDATE calificacion set modo = 'Aprobado'

WHERE id_usuario = idu AND id_modulo = idm
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Calificacion1` (IN `usr` VARCHAR(100), IN `idm` VARCHAR(100))  BEGIN

SELECT id_usuario, evaluacion.id_pregunta, respuesta, respuesta_correcta

FROM evaluacion

INNER JOIN preguntas on evaluacion.id_pregunta=preguntas.id_pregunta
WHERE id_usuario=(usr) and preguntas.id_modulo=(idm)
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `calificacionadm` (IN `usr` VARCHAR(100), IN `idm` VARCHAR(100))  BEGIN

SELECT id_usuario, evaluacion.id_pregunta, intento, respuesta, respuesta_correcta, valor

FROM evaluacion

INNER JOIN preguntas on evaluacion.id_pregunta=preguntas.id_pregunta
WHERE id_usuario=(usr) and preguntas.id_modulo=(idm)
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Cuestionario` (IN `cue` VARCHAR(200))  BEGIN

SELECT modulo.id_modulo, nombre, id_pregunta, pregunta

FROM modulo

INNER JOIN preguntas on preguntas.id_modulo=modulo.id_modulo


WHERE modulo.id_modulo=(cue)
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cuestionarioaleatorio` (IN `cue` VARCHAR(200))  BEGIN

SELECT modulo.id_modulo, nombre, preguntas.id_pregunta, pregunta, opciones.id_pregunta, opcion, opciones.valor

FROM modulo

INNER JOIN preguntas on preguntas.id_modulo=modulo.id_modulo
INNER JOIN opciones on opciones.id_pregunta=preguntas.id_pregunta

WHERE modulo.id_modulo=(cue)

ORDER BY  id_modulo, RAND(opciones.id_pregunta) LIMIT 30

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CuestionarioAleatorio2` (IN `cue` VARCHAR(200))  BEGIN

SELECT modulo.id_modulo, nombre, id_pregunta, pregunta

FROM modulo

INNER JOIN preguntas on preguntas.id_modulo=modulo.id_modulo


WHERE modulo.id_modulo=(cue)

ORDER BY  RAND()LIMIT 10
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminaAdmin` (IN `elimina` INT(10))  BEGIN
DELETE FROM administrador WHERE id=elimina;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminaModulosUsr` (IN `idu` VARCHAR(200))  BEGIN
DELETE FROM calificacion 

WHERE id_usuario = (SELECT usuarios.id_usuario FROM usuarios WHERE correo_electronico=idu)

;

DELETE FROM evaluacion 

WHERE id_usuario = (SELECT usuarios.id_usuario FROM usuarios WHERE correo_electronico=idu)

;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminaUsuario` (IN `idu` VARCHAR(200))  BEGIN
DELETE FROM usuarios 

WHERE correo_electronico = idu

;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarAdministrador` (IN `usr` VARCHAR(100))  BEGIN

SELECT id, usuario, pass
FROM administrador

WHERE usuario=(usr)
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarAdminT` ()  BEGIN

SELECT id, usuario, pass
FROM administrador

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarEvaluacion` ()  BEGIN
SELECT * From evaluacion;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarIntento` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200))  BEGIN

SELECT intentos_rest 
FROM calificacion


WHERE id_usuario = idu AND id_modulo = idm
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarU` (IN `usr` VARCHAR(100))  BEGIN

SELECT usuarios.id_usuario

FROM usuarios


WHERE correo_electronico=(usr)

;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUser` (IN `usr` VARCHAR(100))  BEGIN

SELECT id_usuario, correo_electronico, contraseña, nombre, apellido_p, pago

FROM usuarios

WHERE correo_electronico=(usr)
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsers1` (IN `usr` VARCHAR(100))  BEGIN

SELECT usuarios.id_usuario, correo_electronico, contraseña, usuarios.nombre, apellido_p, modulo.id_modulo, modulo.nombre, calificacion, modo, pago, intentos_rest

FROM usuarios

INNER JOIN calificacion on usuarios.id_usuario=calificacion.id_usuario
INNER JOIN modulo on calificacion.id_modulo=modulo.id_modulo

WHERE correo_electronico=(usr)
ORDER BY id_modulo 
;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuariosT` ()  BEGIN
SELECT * FROM usuarios;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Opciones` (IN `res` VARCHAR(200))  BEGIN

SELECT opciones.id_pregunta, opcion, opciones.valor

FROM modulo

INNER JOIN preguntas on preguntas.id_modulo=modulo.id_modulo
INNER JOIN opciones on opciones.id_pregunta=preguntas.id_pregunta


WHERE modulo.id_modulo=(res)

;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PagoCurso` (IN `idu` VARCHAR(200))  BEGIN

UPDATE usuarios set pago = 'si'

WHERE correo_electronico = idu
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PerfilM` (IN `usr` VARCHAR(100))  BEGIN
SELECT *
FROM usuarios
WHERE correo_electronico=(usr)
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Reprobar` (IN `idu` VARCHAR(200), IN `idm` VARCHAR(200))  BEGIN

UPDATE calificacion set modo = 'Reprobado'

WHERE id_usuario = idu AND id_modulo = idm
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Respuestas` (IN `res` VARCHAR(200))  BEGIN

SELECT respuesta_correcta, valor

FROM modulo

INNER JOIN preguntas on preguntas.id_modulo=modulo.id_modulo


WHERE modulo.id_modulo=(res)
ORDER BY respuesta_correcta

;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `pass`) VALUES
(1, 'Admin', '$2y$10$gbOlZD5mi02UMN00iTi9X.2rxrEcEMpreZWEnUKyc2V3DYCbeslmS'),
(7, '', '5'),
(8, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_modulo` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `modo` varchar(255) DEFAULT 'sin empezar' COMMENT 'sin empezar, empezado, terminado',
  `intentos_rest` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id_usuario`, `id_modulo`, `calificacion`, `modo`, `intentos_rest`) VALUES
(1, 1, 4, 'Reprobado', 1),
(1, 2, 4, 'Reprobado', 2),
(1, 3, NULL, 'sin empezar', 3),
(1, 4, 2, 'Reprobado', 1),
(1, 5, NULL, 'sin empezar', 3),
(1, 6, NULL, 'sin empezar', 3),
(2, 1, NULL, 'sin empezar', 3),
(2, 2, NULL, 'sin empezar', 3),
(2, 3, NULL, 'sin empezar', 3),
(2, 4, NULL, 'sin empezar', 3),
(2, 5, NULL, 'sin empezar', 3),
(2, 6, NULL, 'sin empezar', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `respuesta` varchar(255) DEFAULT NULL,
  `intento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id_usuario`, `id_pregunta`, `respuesta`, `intento`) VALUES
(1, 12, 'A', 92),
(1, 6, 'A', 92),
(1, 20, 'A', 92),
(1, 25, 'A', 92),
(1, 17, 'A', 92),
(1, 13, 'A', 92),
(1, 10, 'A', 92),
(1, 23, 'A', 92),
(1, 3, 'A', 92),
(1, 11, 'A', 92),
(1, 43, 'C', 3),
(1, 41, 'C', 3),
(1, 36, 'C', 3),
(1, 46, 'C', 3),
(1, 37, 'C', 3),
(1, 32, 'C', 3),
(1, 57, 'C', 3),
(1, 49, 'C', 3),
(1, 54, 'C', 3),
(1, 42, 'C', 3),
(1, 45, 'C', 3),
(1, 38, 'C', 3),
(1, 55, 'C', 3),
(1, 43, 'C', 3),
(1, 57, 'C', 3),
(1, 58, 'C', 3),
(1, 39, 'C', 3),
(1, 40, 'C', 3),
(1, 33, 'C', 3),
(1, 32, 'C', 3),
(1, 45, 'C', 3),
(1, 38, 'C', 3),
(1, 55, 'C', 3),
(1, 43, 'C', 3),
(1, 57, 'C', 3),
(1, 58, 'C', 3),
(1, 39, 'C', 3),
(1, 40, 'C', 3),
(1, 33, 'C', 3),
(1, 32, 'C', 3),
(1, 45, 'C', 3),
(1, 38, 'C', 3),
(1, 55, 'C', 3),
(1, 43, 'C', 3),
(1, 57, 'C', 3),
(1, 58, 'C', 3),
(1, 39, 'C', 3),
(1, 40, 'C', 3),
(1, 33, 'C', 3),
(1, 32, 'C', 3),
(1, 45, 'C', 3),
(1, 38, 'C', 3),
(1, 55, 'C', 3),
(1, 43, 'C', 3),
(1, 57, 'C', 3),
(1, 58, 'C', 3),
(1, 39, 'C', 3),
(1, 40, 'C', 3),
(1, 33, 'C', 3),
(1, 32, 'C', 3),
(1, 98, 'B', 2),
(1, 91, 'B', 2),
(1, 102, 'B', 2),
(1, 107, 'B', 2),
(1, 108, 'B', 2),
(1, 109, 'B', 2),
(1, 90, 'B', 2),
(1, 94, 'B', 2),
(1, 89, 'B', 2),
(1, 95, 'B', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `nombre`) VALUES
(1, 'COMO INICIAR TU NEGOCIO'),
(2, 'EL PERSONAL COMO ESTRATEGIA'),
(3, 'INNOVACION APLICADA EN LOS PRODUCTOS Y SERVICIOS'),
(4, '¿CÓMO COMERCIALIZAR UN PRODUCTO?'),
(5, 'LA IMPORTANCIA DE LOS PROCESOS PRODUCTIVOS'),
(6, 'MARCO LEGAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(11) NOT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `opcion` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_opcion`, `id_pregunta`, `opcion`, `valor`) VALUES
(1, 1, 'A', 'EMPRENDEDOR'),
(2, 1, 'B', 'EMPRESARIO'),
(3, 1, 'C', 'INVERSIONISTA'),
(4, 2, 'A', 'PROACTIVA, INTELIGENTE, DECIDIDA'),
(5, 2, 'B', 'CREATIVA, INNOVADORA, FLEXIBLE, ARRIESGADA'),
(6, 2, 'C', 'TIMIDA, INTOLERANTE, IMPACIENTE'),
(7, 3, 'A', 'INNOVACIÓN'),
(8, 3, 'B', 'INICIATIVA EMPRESARIAL'),
(9, 3, 'C', 'EMPRENDER UN NEGOCIO        '),
(10, 4, 'A', 'PASIÓN'),
(11, 4, 'B', 'OBJETIVOS'),
(12, 4, 'C', 'VISIÓN'),
(13, 5, 'A', 'METAS'),
(14, 5, 'B', 'VISIÓN'),
(15, 5, 'C', 'OBJETIVOS'),
(16, 6, 'A', 'CAPACIDAD DE APRENDIZAJE'),
(17, 6, 'B', 'INTELIGENCIA EMOCIONAL'),
(18, 6, 'C', 'CONOCIMIENTOS PROPIOS'),
(19, 7, 'A', 'CONOCIMIENTO Y APRENDIZAJE'),
(20, 7, 'B', 'CREATIVIDAD E INNOVACIÓN '),
(21, 7, 'C', 'INNOVACIÓN Y APRENDIZAJE'),
(22, 8, 'A', 'PERSISTENCIA'),
(23, 8, 'B', 'IDEA'),
(24, 8, 'C', 'OBJETIVO'),
(25, 9, 'A', 'LIDER'),
(26, 9, 'B', 'EMPRENDER'),
(27, 9, 'C', 'TRABAJO EN EQUIPO'),
(28, 10, 'A', 'COORDINACIÓN'),
(29, 10, 'B', 'ORGANIZACIÓN'),
(30, 10, 'C', 'CONTROL'),
(31, 11, 'A', 'EMPRENDIMIENTO'),
(32, 11, 'B', 'APRENDIZAJE'),
(33, 11, 'C', 'CONOCIMIENTO'),
(34, 12, 'A', 'GENERAR UNA IDEA DE NEGOCIO'),
(35, 12, 'B', 'EMPRENDER UN NEGOCIO'),
(36, 12, 'C', 'IDENTIFICAR NECESIDADES'),
(37, 13, 'A', 'LIDER'),
(38, 13, 'B', 'VENDEDOR'),
(39, 13, 'C', 'PERFIL DEL EMPRENDEDOR'),
(40, 14, 'A', 'IDEA DE NEGOCIO'),
(41, 14, 'B', 'OBJETIVO DEL NEGOCIO'),
(42, 14, 'C', 'NIVEL DE ESTUDIOS, EDAD VALORES, EXPERIENCIA LABORA'),
(43, 15, 'A', 'PASIÓN'),
(44, 15, 'B', 'INNOVACIÓN'),
(45, 15, 'C', 'VISIÓN'),
(46, 16, 'A', 'LIDER'),
(47, 16, 'B', 'EMPRENDEDOR'),
(48, 16, 'C', 'LIDER DE PROYECTO'),
(49, 17, 'A', 'PASIÓN'),
(50, 17, 'B', 'VISIÓN'),
(51, 17, 'C', 'OBJETIVOS'),
(52, 18, 'A', 'ANALISIS FODA '),
(53, 18, 'B', 'GENERADOR DE IDEAS'),
(54, 18, 'C', 'ANALISIS EMPRESARIAL'),
(55, 19, 'A', 'INNOVACIÓN'),
(56, 19, 'B', 'GENERADOR DE IDEAS '),
(57, 19, 'C', 'ESTRATEGIAS'),
(58, 20, 'A', 'RESOLUCIÓN DE PROBLEMAS'),
(59, 20, 'B', 'DETERMINACIÓN'),
(60, 20, 'C', 'SOLUCIÓN DE PROBLEMAS'),
(61, 21, 'A', 'TRABAJO EN EQUIPO'),
(62, 21, 'B', 'LIDERAZGO DE EQUIPO'),
(63, 21, 'C', 'COORDINACION DE EQUIPO'),
(64, 22, 'A', 'PERSISTENCIA'),
(65, 22, 'B', 'DEDICACIÓN'),
(66, 22, 'C', 'COORDINACIÓN'),
(67, 23, 'A', 'ACUERDO'),
(68, 23, 'B', 'ASERTIVIDAD'),
(69, 23, 'C', 'ACUERDO'),
(70, 24, 'A', 'MISIÓN'),
(71, 24, 'B', 'VISIÓN'),
(72, 24, 'C', 'ESTRATEGIA'),
(73, 25, 'A', 'METAS'),
(74, 25, 'B', 'VALORES'),
(75, 25, 'C', 'OBJETIVOS'),
(76, 26, 'A', 'SEGURIDAD'),
(77, 26, 'B', 'CONFIANZA'),
(78, 26, 'C', 'AUTOESTIMA'),
(79, 27, 'A', 'OBJETIVOS'),
(80, 27, 'B', 'METAS '),
(81, 27, 'C', 'MISIÓN'),
(82, 28, 'A', 'ANÁLISIS EMPRESARIAL'),
(83, 28, 'B', 'ANÁLISIS FODA'),
(84, 28, 'C', 'RESOLUCIÓN DE COMFLICTO'),
(85, 29, 'A', 'OBJETIVO GENERAL'),
(86, 29, 'B', 'ONGETIVOS ESPECÍFICOS'),
(87, 29, 'C', 'METAS'),
(88, 30, 'A', 'METAS'),
(89, 30, 'B', 'OBJETIVOS ESPECÍFICOS'),
(90, 30, 'C', 'VALORES'),
(91, 31, 'A', 'NIVEL INSTITUCIONAL'),
(92, 31, 'B', 'NIVEL EDUCATIVO'),
(93, 31, 'C', 'EDUCACIÓN'),
(94, 32, 'A', 'RECURSOS HUMANOS'),
(95, 32, 'B', 'TRABAJO EN EQUIPO'),
(96, 32, 'C', 'CAPITAL HUMANO'),
(97, 33, 'A', 'NIVEL INTERMEDIO'),
(98, 33, 'B', 'NIVEL EJECUTIVO'),
(99, 33, 'C', 'NIVEL SOCIECONOMICO'),
(100, 34, 'A', 'IMSS'),
(101, 34, 'B', 'SEGURO SOCIAL'),
(102, 34, 'C', 'BONO MEDICO'),
(103, 35, 'A', 'DIRECCIÓN'),
(104, 35, 'B', 'ORGANIZACIÓN'),
(105, 35, 'C', 'CONTROL'),
(106, 36, 'A', 'MOTIVACIÓN'),
(107, 36, 'B', 'SALARIO'),
(108, 36, 'C', 'INCENTIVO ECONÓMICO'),
(109, 37, 'A', 'NIVEL OPERACIONAL'),
(110, 37, 'B', 'NIVEL EMPRESARIAL'),
(111, 37, 'C', 'NIVEL OPETARIVO'),
(112, 38, 'A', 'GESTION DE CAPITAL HUMANO'),
(113, 38, 'B', 'ANÁLISIS DE PUESTOS'),
(114, 38, 'C', 'EVALUACIÓN DEL PERSONAL'),
(115, 39, 'A', 'GESTIÓN DE CAPITAL HUMANO'),
(116, 39, 'B', 'ANÁLISIS DE PUESTOS'),
(117, 39, 'C', 'RECURSOS HUMANOS'),
(118, 40, 'A', 'MODELO DE NEGOCIOS'),
(119, 40, 'B', 'PLAN DE NEGOCIOS'),
(120, 40, 'C', 'ANÁLISIS FINANCIERO'),
(121, 41, 'A', 'GESTION FINACIERA'),
(122, 41, 'B', 'PROYECCIÓN DE VENTAS'),
(123, 41, 'C', 'ANÁLISIS FINANCIERO'),
(124, 42, 'A', 'GESTIÓN ESTRATÉGICA'),
(125, 42, 'B', 'DESCRIPCIÓN DE PUESTOS DE TRABAJO'),
(126, 42, 'C', 'ANÁLISIS DE PUESTOS'),
(127, 43, 'A', 'PLAN DE NEGOCIOS'),
(128, 43, 'B', 'MODELO DE NEGOCIOS'),
(129, 43, 'C', 'MANUAL OPERATIVO'),
(130, 44, 'A', 'ANALISIS EMPRESARIAL'),
(131, 44, 'B', 'RESUMEN EJECUTIVO'),
(132, 44, 'C', 'PLAN DE NEGOCIOS'),
(133, 45, 'A', 'ORGANIGRAMA EMPRESARIAL'),
(134, 45, 'B', 'NIVEL JERÁRQUICO'),
(135, 45, 'C', 'ORGANIGRAMA VERTICAL'),
(136, 46, 'A', 'ORGANIGRAMA HORIZONTAL'),
(137, 46, 'B', 'NIVEL JERÁRQUICO'),
(138, 46, 'C', 'ESTRUCTURA OPERATIVA'),
(139, 47, 'A', 'ORGANIGRAMA LINEAL'),
(140, 47, 'B', 'ORGANIGRAMA CIRCULAR'),
(141, 47, 'C', 'ORGANIGRAMA VERTICA'),
(142, 48, 'A', 'PLANEACIÓN'),
(143, 48, 'B', 'DIRECCIÓN'),
(144, 48, 'C', 'ORGANIZACIÓN'),
(145, 49, 'A', 'NIVEL JERÁRQUICO'),
(146, 49, 'B', 'NIVEL INSTITUCIONAL'),
(147, 49, 'C', 'LIDER DE LA ORGANIZACIÓN'),
(148, 50, 'A', 'NIVEL INTERMEDIO'),
(149, 50, 'B', 'NIVEL INSTITUCIONAL'),
(150, 50, 'C', 'NIVEL JERÁRQUICO'),
(151, 51, 'A', 'NIVEL INTERMEDIO '),
(152, 51, 'B', 'NIVEL OPERACIONAL'),
(153, 51, 'C', 'NIVEL INSTITUCIONAL'),
(154, 52, 'A', 'ESTRUCTUIRA GRAFICA'),
(155, 52, 'B', 'DIAGRAMA DE FLUJO'),
(156, 52, 'C', 'ORGANIGRAMA'),
(157, 53, 'A', 'CAPITAL HUMANO'),
(158, 53, 'B', 'PLANTILLA DE TRABAJO'),
(159, 53, 'C', 'FLUJO DE PERSONAL'),
(160, 54, 'A', 'DIRECCIÓN EL PERSONAL'),
(161, 54, 'B', 'FUNCIONES DEL PERSONAL'),
(162, 54, 'C', 'ADMINISTRACIÓN DEL PEROSONAL'),
(163, 55, 'A', 'ROTACIÓN DE PERSONAL'),
(164, 55, 'B', 'PLANTILLA DE TRABAJO'),
(165, 55, 'C', 'RECLUTAMIENTO DE PERSONAL'),
(166, 56, 'A', 'SELLECIÓN DE PERSONAL'),
(167, 56, 'B', 'PLANTILLA DE TRABAJO'),
(168, 56, 'C', 'RECLUTAMIENTO DE PERSONAL'),
(169, 57, 'A', 'CAPACITACIÓN'),
(170, 57, 'B', 'INDUCCIÓN '),
(171, 57, 'C', 'ADISTRAMIENTO'),
(172, 58, 'A', 'INDUCCIÓN'),
(173, 58, 'B', 'CAPTACION'),
(174, 58, 'C', 'CAPACITACIÓN'),
(175, 59, 'A', 'MOTIVACIÓN '),
(176, 59, 'B', 'INCENTIVO'),
(177, 59, 'C', 'RECONOCIMIE'),
(178, 60, 'A', 'COMERCIO'),
(179, 60, 'B', 'PRODUCTO'),
(180, 60, 'C', 'VENTAS'),
(181, 61, 'A', 'VENTAS'),
(182, 61, 'B', 'COMERCIO'),
(183, 61, 'C', 'SERVICIO'),
(184, 62, 'A', 'BIEN'),
(185, 62, 'B', 'PRODUCTO'),
(186, 62, 'C', 'SERVICO'),
(187, 63, 'A', 'MERCADO'),
(188, 63, 'B', 'COMERCIO'),
(189, 63, 'C', 'TIENDAS'),
(190, 64, 'A', 'SEGMENTACIÓN DE MERCADO'),
(191, 64, 'B', 'SEGMENTACIÓN GEOGRAFICA'),
(192, 64, 'C', 'SEGMNETACIÓN DE MASAS'),
(193, 65, 'A', 'SEGMENTACIÓN PICTOGRÁFICA'),
(194, 65, 'B', 'NICHO DE MECADO'),
(195, 65, 'C', 'MERCADO META'),
(196, 66, 'A', 'SEGMENTACIÓN PSICOGRAFICA'),
(197, 66, 'B', 'SEGMENTACIÓN CONDUCTUAL'),
(198, 66, 'C', 'SEGMENTACIÓN ETNOGRAFICA                                                     '),
(199, 67, 'A', 'DIRECCIÓN'),
(200, 67, 'B', 'CONTROL'),
(201, 67, 'C', 'POSICIONAMIENTO'),
(202, 68, 'A', 'PROPUESTA DE VALOR '),
(203, 68, 'B', 'VALOR AGREGADO'),
(204, 68, 'C', 'DIFERENCIACIÓN'),
(205, 69, 'A', 'MARCA'),
(206, 69, 'B', 'LOGO '),
(207, 69, 'C', 'DISEÑO DE MARCA'),
(208, 70, 'A', 'MERCADO DE CONSUMIDORES'),
(209, 70, 'B', 'MERCADO A LARGO PLAZO'),
(210, 70, 'C', 'NICHO DE MERCADO'),
(211, 71, 'A', 'MERCADO'),
(212, 71, 'B', 'NEGOCIO'),
(213, 71, 'C', 'SERVICIO'),
(214, 72, 'A', 'PRODUCTO'),
(215, 72, 'B', 'BIEN'),
(216, 72, 'C', 'SERVICIO'),
(217, 73, 'A', 'MERCADO '),
(218, 73, 'B', 'MERCADO DE CONSUMIDOR'),
(219, 73, 'C', 'SEGMENTO DE MERCADO'),
(220, 74, 'A', 'CLIENTES FINALES'),
(221, 74, 'B', 'BIENES BÁSICOS'),
(222, 74, 'C', 'DISTRIBUCIÓN DE PRODUCTOS'),
(223, 75, 'A', 'MERCADO META'),
(224, 75, 'B', 'MERCADO DE TRABAJO'),
(225, 75, 'C', 'NICHO DE MERCADO'),
(226, 76, 'A', 'SERVICIO'),
(227, 76, 'B', 'PRODUCTO'),
(228, 76, 'C', 'BIEN'),
(229, 77, 'A', 'PROPUESTA DE VALOR'),
(230, 77, 'B', 'VALOR AGREGADO'),
(231, 77, 'C', 'PROPUESTA DE VALOR'),
(232, 78, 'A', 'MERCACÍAS'),
(233, 78, 'B', 'PRODUCTOS'),
(234, 78, 'C', 'SERVICIOS'),
(235, 79, 'A', 'SEGMENTACIÓN DE MARCADO'),
(236, 79, 'B', 'SEGMENTACIÓN PICTOGRAFICA'),
(237, 79, 'C', 'SEGMENTACIÓN PSICOGRAFICA'),
(238, 80, 'A', 'BIEN '),
(239, 80, 'B', 'PRODUCTO'),
(240, 80, 'C', 'SERVICIO'),
(241, 81, 'A', 'LOGO'),
(242, 81, 'B', 'MARCA'),
(243, 81, 'C', 'DISEÑO'),
(244, 82, 'A', 'DE OFERTA INSTANTANEA'),
(245, 82, 'B', 'DE MERCADO LOCAL'),
(246, 82, 'C', 'DE MERCADO A LARGO PLAZO'),
(247, 83, 'A', 'SEGMENTO GEOGRÁFICO'),
(248, 83, 'B', 'SEGMENTO LOCAL'),
(249, 83, 'C', 'SEGMENTO DE NICHO'),
(250, 84, 'A', 'MARCA'),
(251, 84, 'B', 'SLOGAN'),
(252, 84, 'C', 'LOGO'),
(253, 85, 'A', 'RESEÑAS VIRTUALES'),
(254, 85, 'B', 'BLOG COMERCIAL'),
(255, 85, 'C', 'CIRCULOS DE DISCUCIÓN'),
(256, 86, 'A', 'SEGMENTACION CONDUCTUAL'),
(257, 86, 'B', 'NICHO DE MERCADO'),
(258, 86, 'C', 'SEGMENTO DE MERCADO'),
(259, 87, 'A', 'COORDINACIÓN'),
(260, 87, 'B', 'INNOVACIÓN'),
(261, 87, 'C', 'RENOVACIÓN'),
(262, 88, 'A', 'DISEÑO EMPRESARIAL'),
(263, 88, 'B', 'DESARROLLO DE LA IMAGEN CORPORATIVA'),
(264, 88, 'C', 'IMAGEN GERENCIAL'),
(265, 89, 'A', 'CONOCER EL PRODUCTO, DISEÑO DEL PRODUCTO, CONOCER LA COMPETENCIA, DEFINIR EL MERCADO META'),
(266, 89, 'B', 'COLOCAR EL PRODUCTO, CONOCER LOS CANALES DE DISTRIBUCIÓN, PROMOCIÓN Y PRODUCCIÓN DEL PRODUCTO'),
(267, 89, 'C', 'TODAS LAS ANTERIORES'),
(268, 90, 'A', 'SISTEMA DE VENTA'),
(269, 90, 'B', 'CANAL DE DISTRIBUCIÓN'),
(270, 90, 'C', 'DISEÑO DE UN PRODUCTO'),
(271, 91, 'A', 'DIRECTOS E INDIRECTOS'),
(272, 91, 'B', 'INTERNOS Y EXTERNOS'),
(273, 91, 'C', 'FORÁNEOS Y NACIONALES '),
(274, 92, 'A', 'CLIENTES HABITUALES Y OCASIONALES ACTIVOS E INACTIVOS, CLIENTES POTENCIALES '),
(275, 92, 'B', 'CLIENTES INTERNOS Y EXTERNOS'),
(276, 92, 'C', 'LAS DOS ANTERIORES'),
(277, 93, 'A', 'GASTOS'),
(278, 93, 'B', 'COSTOS'),
(279, 93, 'C', 'PRECIO'),
(280, 94, 'A', 'PRECIO'),
(281, 94, 'B', 'IVA'),
(282, 94, 'C', 'IMPUESTO'),
(283, 95, 'A', 'PROMOCIONES'),
(284, 95, 'B', 'REDUCCIÓN DE COSTOS'),
(285, 95, 'C', 'POLÍTICA DE PRECIOS'),
(286, 96, 'A', 'DEMANDA'),
(287, 96, 'B', 'COMPETENCIA'),
(288, 96, 'C', 'EXCLUSIVIDAD'),
(289, 97, 'A', 'ACUERDO EMPRESARIAL'),
(290, 97, 'B', 'NEGOCIACIÓN'),
(291, 97, 'C', 'CIERRE DE VENTA'),
(292, 98, 'A', 'DIRECTA E INDIRECTA'),
(293, 98, 'B', 'ACERTADA, TRADICIONAL, GANAR-GANAR, INMEDIATA, PROGRESIVA, ENFOCADA A RESULTADOS'),
(294, 98, 'C', 'INTERNA Y EXTERNA'),
(295, 99, 'A', 'ESTRATEGIA DE NEGOCIO'),
(296, 99, 'B', 'ESTRATEGIA DE VENTA'),
(297, 99, 'C', 'ESTRATEGIA DE NEGOCIACIÓN'),
(298, 100, 'A', 'RUTA CRITICA'),
(299, 100, 'B', 'CANALES DE DISTRIBUCIÓN'),
(300, 100, 'C', 'LOGISTICA'),
(301, 101, 'A', 'CLIENTES ACTUALES'),
(302, 101, 'B', 'CLIENTES META'),
(303, 101, 'C', 'MERCADO'),
(304, 102, 'A', 'CLIENTES ACTUALES '),
(305, 102, 'B', 'CLIENTES POTENCIALES'),
(306, 102, 'C', 'CLIENTES ACTIVOS'),
(307, 103, 'A', 'CLIENTES ACTIVOS'),
(308, 103, 'B', 'CLIENTES POTENCIALES'),
(309, 103, 'C', 'CLIENTES INACTIVOS'),
(310, 104, 'A', 'CLIENTES POTENCIALES'),
(311, 104, 'B', 'CLIENTES META '),
(312, 104, 'C', 'CLIENTES ACTUALES'),
(313, 105, 'A', 'COMPRAS'),
(314, 105, 'B', 'VENTAS'),
(315, 105, 'C', 'PRECIOS'),
(316, 106, 'A', 'VALOR AGREGADO'),
(317, 106, 'B', 'COMPETENCIA'),
(318, 106, 'C', 'OFERTAS'),
(319, 107, 'A', 'ACUERDO'),
(320, 107, 'B', 'COMPRAS'),
(321, 107, 'C', 'NEGOCIACIÓN'),
(322, 108, 'A', 'ACUERDO'),
(323, 108, 'B', 'ESTRATEGIA DE NEGOCIACIÓN'),
(324, 108, 'C', 'NEGOCIACIÓN ACERTADA'),
(325, 109, 'A', 'ESTRATEGIA DE NEGOCICIÓN'),
(326, 109, 'B', 'ACUERDO'),
(327, 109, 'C', 'NEGOCIACION MUTUA'),
(328, 110, 'A', 'PRODUCCION EN MASA'),
(329, 110, 'B', 'PRODUCCIÓN CONTINUA'),
(330, 110, 'C', 'PRODUCCION EN SERIE'),
(331, 111, 'A', 'PRODUCCIÓN'),
(332, 111, 'B', 'ADMINISTRACIÓN'),
(333, 111, 'C', 'GESTIÓN'),
(334, 112, 'A', 'LOGÍSTICA DE PRODUCCIÓN'),
(335, 112, 'B', 'GESTIÓN DE MATERIALES'),
(336, 112, 'C', 'MANEJO DE INVENTARIOS'),
(337, 113, 'A', 'RECURSOS'),
(338, 113, 'B', 'FINANZAS'),
(339, 113, 'C', 'VENTAS'),
(340, 114, 'A', 'CONTABILIDAD'),
(341, 114, 'B', 'FINANZAS'),
(342, 114, 'C', 'ANÁLISIS FINANCIERO'),
(343, 115, 'A', 'CONTABILIDAD FINACIERA'),
(344, 115, 'B', 'OPERACIÓN DE FINANZAS'),
(345, 115, 'C', 'FINANZAS '),
(346, 116, 'A', 'CONTABILIDAD FISCAL'),
(347, 116, 'B', 'CONTABILIDAD FINACIERA'),
(348, 116, 'C', 'OPERACIÓN DE FINANZAS'),
(349, 117, 'A', 'ACTIVO FIJO'),
(350, 117, 'B', 'ACTIVO DIFERIDO'),
(351, 117, 'C', 'ACTIVO CIRCULANTE'),
(352, 118, 'A', 'BALANCE GENERAL'),
(353, 118, 'B', 'INSUMOS'),
(354, 118, 'C', 'CAPITAL'),
(355, 119, 'A', 'ESTADO DE RESULTADOS'),
(356, 119, 'B', 'ESTADO FINACIERO'),
(357, 119, 'C', 'ESTADO DE CUENTA'),
(358, 120, 'A', 'PROYECTO '),
(359, 120, 'B', 'PROCESO '),
(360, 120, 'C', 'ETAPAS '),
(361, 121, 'A', 'INSUMOS, PRODUCTO Y OPERACIONES'),
(362, 121, 'B', 'REALIZACIÓN, PLANEACIÓN Y PRODUCCIÓN'),
(363, 121, 'C', 'LAS DOS OPCIONES ANTERIORES'),
(364, 122, 'A', 'PRODUCCIÓN CONTINUA'),
(365, 122, 'B', 'PRODUCCIÓN INTERMITENTE'),
(366, 122, 'C', 'PRODUCCIÓN EN MASA'),
(367, 123, 'A', 'PRODUCCIÓN DE CALIDAD'),
(368, 123, 'B', 'PRODUCCIÓN INTERMITENTE '),
(369, 123, 'C', 'PRODUCCIÓN CONTINUA'),
(370, 124, 'A', 'PRESUPUESTOS'),
(371, 124, 'B', 'MANEJO DE INVENTARIOS'),
(372, 124, 'C', 'CORRIDA FINANCIERA'),
(373, 125, 'A', 'AHORRO'),
(374, 125, 'B', 'CONTABILIDAD'),
(375, 125, 'C', 'FINANZAS'),
(376, 126, 'A', 'MERCADO CONTABLE '),
(377, 126, 'B', 'MERCADOS DE DINERO Y DE CAPITALES'),
(378, 126, 'C', 'MERCADO FINANCIERO'),
(379, 127, 'A', 'INVERSIONES'),
(380, 127, 'B', 'ADMINISTRACIÓN'),
(381, 127, 'C', 'CONTROL FINANCIERO'),
(382, 128, 'A', 'AHORRO A LARGO PLAZO '),
(383, 128, 'B', 'INVERSIÓN TOTAL'),
(384, 128, 'C', 'ADMINISTRACIÓN FINANCIERA'),
(385, 129, 'A', 'CONTABILIDAD'),
(386, 129, 'B', 'REGISTRO DE GASTOS'),
(387, 129, 'C', 'FINANZAS '),
(388, 130, 'A', 'ESTABLECER UN CONTROL SOBRE CADA UNO DE LOS RECURSOS Y LAS OBLIGACIONES DEL NEGOCIO'),
(389, 130, 'B', 'REGISTRAR, EN FORMA CLARA Y PRECISA, TODAS LAS OPERACIONES EFECTUADAS POR LA EMPRESA DURANTE EL EJERCICIO FISCAL'),
(390, 130, 'C', 'LAS DOS ANTERIORES'),
(391, 131, 'A', 'ACTIVOS'),
(392, 131, 'B', 'PASIVOS '),
(393, 131, 'C', 'ACTIVO CIRCULANTE'),
(394, 132, 'A', 'PASIVO FIJO'),
(395, 132, 'B', 'PASIVO CIRCULANTE'),
(396, 132, 'C', 'ACTIVO'),
(397, 133, 'A', 'ACTIVO CIRCULANTE'),
(398, 133, 'B', 'PASIVO DIFERIDO'),
(399, 133, 'C', 'PASIVO FIJO'),
(400, 134, 'A', 'ACTIVO'),
(401, 134, 'B', 'PASIVO DIFERIDO'),
(402, 134, 'C', 'PASIVO'),
(403, 135, 'A', 'DEFINICIÓN DE CAPITAL'),
(404, 135, 'B', 'TRANSACCIÓN'),
(405, 135, 'C', 'DEFINICIÓN DE CONTABILIDAD'),
(406, 136, 'A', 'ACTIVIDADES OPERATIVAS'),
(407, 136, 'B', 'ACTIVIDADES EMPRESARIALES'),
(408, 136, 'C', 'ACTIVIDADES COMERCIALES'),
(409, 137, 'A', 'FUNCIONES'),
(410, 137, 'B', 'OPERACIONES'),
(411, 137, 'C', 'ACTIVIDADES'),
(412, 138, 'A', 'ARRENDAMIENTO DE BIENES'),
(413, 138, 'B', 'PAGO DE ACTIVOS FIJOS'),
(414, 138, 'C', 'PAGOS EMPRESARIALES'),
(415, 139, 'A', 'SOCIEDAD COMERCIAL'),
(416, 139, 'B', 'SOCIEDAD EMPRESARIAL'),
(417, 139, 'C', 'SOCIEDAD ANÓNIMA'),
(418, 140, 'A', 'FACTURACIÓN ELECTRÓNICA'),
(419, 140, 'B', 'REMUNERACIÓN DE SERVICIOS'),
(420, 140, 'C', 'PAGOS EMPRESARIALES'),
(421, 141, 'A', 'FACTURACIÓN ELECTRÓNICA'),
(422, 141, 'B', 'REMUNERACIÓN DE SERVICIOS'),
(423, 141, 'C', 'PAGOS EMPRESARIALES'),
(424, 142, 'A', 'SECRETARIA DE ECÓNOMIA - SE'),
(425, 142, 'B', 'SERVICIO DE ADMINISTRACION TRIBUTARIA - SAT'),
(426, 142, 'C', 'SECRETARIA DE HACIENDA Y CRRESHCP'),
(427, 143, 'A', 'MARCO LEGAL'),
(428, 143, 'B', 'MARCO JURÍDICO'),
(429, 143, 'C', 'MARCO OPERATIVO'),
(430, 144, 'A', 'SOCIEDAD DE COMANDITA SIMPLE'),
(431, 144, 'B', 'SOCIEDAD DE RESPONSABILIDAD LIMITADA'),
(432, 144, 'C', 'SOCIEDAD DE ACCIONES SIMPLIFICADAS '),
(433, 145, 'A', 'SOCIEDAD DE ACCIONES SIMPLIFICADAS'),
(434, 145, 'B', 'SOCIEDAD COOPERATIVA'),
(435, 145, 'C', 'SOCIEDAD ANÓNIMA'),
(436, 146, 'A', 'SOCIEDAD COOPERATIVA'),
(437, 146, 'B', 'SOCIEDAD ANÓNIMA'),
(438, 146, 'C', 'SOCIEDAD DE ACCIONES SIMPLIFICADAS                                                                             '),
(439, 147, 'A', 'SOCIEDAD COOPERATIVAS'),
(440, 147, 'B', 'SOCIEDAS DE COMANDITA SIMPLE'),
(441, 147, 'C', 'SOCIEDAD DE ACCIONES SIMPLIFICADAS                                                                             '),
(442, 148, 'A', 'EMPRESARIO O EMPRESARIA'),
(443, 148, 'B', 'PERSONAS MORALES '),
(444, 148, 'C', 'PERSONAS FÍSICAS '),
(445, 149, 'A', 'RÉGIMEN FISCAL INTERMEDIO '),
(446, 149, 'B', 'RÉGIMEN EMPRESARIAL '),
(447, 149, 'C', 'RÉGIMEN FISCAL ALTO'),
(448, 150, 'A', 'ACTIVIDADES EMPRESARIALES '),
(449, 150, 'B', 'ACTIVIDADES INDEPENDIENTES'),
(450, 150, 'C', 'ACTIVIDADES DE EMPLEADO'),
(451, 151, 'A', 'ACTIVIDADES DE JORNALERO'),
(452, 151, 'B', 'ACTIVIDADES PROFESIONALES'),
(453, 151, 'C', 'ACTIVIDADES AGRÍCOLAS'),
(454, 152, 'A', 'ARRENDAMIENTO DE BIENES INMUEBLES '),
(455, 152, 'B', 'DUEÑO DE NEGOCIO'),
(456, 152, 'C', 'RESTAURANTEROS'),
(457, 153, 'A', 'SOCIEDAD ANÓNIMA'),
(458, 153, 'B', 'SOCIEDAD FISCAL'),
(459, 153, 'C', 'SOCIEDAD COMERCIAL'),
(460, 154, 'A', 'ASOCIACIÓN CIVIL'),
(461, 154, 'B', 'SOCIEDAD COOPERATIVA'),
(462, 154, 'C', 'SOCIEDAD CIVIL '),
(463, 155, 'A', 'SOCIEDAD EN NOMBRE COLECTIVO'),
(464, 155, 'B', 'SOCIEDAD MERCANTIL '),
(465, 155, 'C', 'SOCIEDAD ANÓNIMA'),
(466, 156, 'A', 'SOCIEDAD DE RESPONSABILIDAD LIMITADA'),
(467, 156, 'B', 'SOCIEDAD COMPARTIDA'),
(468, 156, 'C', 'SOCIEDAD EN COMANDITA '),
(469, 157, 'A', 'SOCIEDAD COOPERATIVA'),
(470, 157, 'B', 'SOCIEDAD EN CONJUNTO'),
(471, 157, 'C', 'SOCIEDAD SIN FINES DE LUCRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `id_modulo` int(11) DEFAULT NULL,
  `pregunta` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta_correcta` varchar(255) DEFAULT NULL,
  `valor` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `id_modulo`, `pregunta`, `respuesta_correcta`, `valor`) VALUES
(1, 1, 'Nombre que caracteriza una persona  que busca una oportunidad de negocio y decide organizar los recursos necesarios para poner en marcha en su futura empresa. ', 'A', 'EMPRENDEDOR'),
(2, 1, 'Perfil que requiere una persona emprendedora.', 'B', 'CREATIVA, INNOVADORA, FLEXIBLE, ARRIESGADA'),
(3, 1, 'Es abandonar la seguridad de un empleo en relación de dependencia (los expertos dicen que hay que realizarlo una vez que el negocio propio ya esté dando ingresos.', 'C', 'EMPRENDER UN NEGOCIO        '),
(4, 1, 'Los emprendedores se entregan a su actividad con cuerpo y alma para lograr las metas y objetivos trazados. La pasión es un componente esencial que orienta otras conductas, y hace sobrevivir al sacrificio que requiere la empresa.', 'A', 'PASIÓN'),
(5, 1, 'Para alcanzar el éxito cada emprendedor necesita un plan y la visualización de los objetivos finales. El trabajo comienza  definiendo los pasos estratégicos que lo llevará a alcanzar los resultados.', 'B', 'VISIÓN'),
(6, 1, 'Los emprendedores exitosos reconocen que están aprendiendo siempre y que pueden aprender de todos cada día. No estar dispuesto a escuchar y a aprender, es negarse muchas oportunidades.', 'A', 'CAPACIDAD DE APRENDIZAJE'),
(7, 1, 'La creatividad es el proceso por medio del cual las ideas  son generadas, desarrolladas y transformadas en valor agregado.', 'B', 'CREATIVIDAD E INNOVACIÓN '),
(8, 1, 'Toda iniciativa debe ser persistente. Tratar una sola vez y darse  por vencido no es suficiente. Hay que dar un paso a la vez y buscar  perfeccionarlo de manera creativa y organizada si es que no ha dado los resultados esperados a la primera. ', 'A', 'PERSISTENCIA'),
(9, 1, 'El liderazgo del emprendedor busca unificar ideas y lograr consensos ante los problemas que se le presenta haciendo que el grupo humano  involucrado en el emprendimiento funcione en armonía. ', 'C', 'TRABAJO EN EQUIPO'),
(10, 1, 'Establecer un cronograma de actividades que se programa con la capacidad de recibir ajustes permanentes.      ', 'B', 'ORGANIZACIÓN'),
(11, 1, 'Se conoce como emprendimiento a la actitud y aptitud que toma un individuo para iniciar un nuevo proyecto a través de ideas y oportunidades', 'A', 'EMPRENDIMIENTO'),
(12, 1, 'Es poder planificar y proyectar la propia vida y disfrutar de realizar un trabajo de lo que más le gusta a la persona. ', 'B', 'EMPRENDER UN NEGOCIO'),
(13, 1, 'Ser una persona creativa, innovadora, arriesgada, flexible, organizada y autodidacta, entre otras características', 'C', 'PERFIL DEL EMPRENDEDOR'),
(14, 1, 'Que debes conocer para poder emprender un negocio ', 'C', 'NIVEL DE ESTUDIOS, EDAD VALORES, EXPERIENCIA LABORA'),
(15, 1, 'Conducta en donde los emprendedores se entregan a su actividad con cuerpo y alma para lograr las metas y objetivos trazados.', 'A', 'PASIÓN'),
(16, 1, 'Es una persona que identifica una oportunidad de negocio decide organizar los recursos para ponerlo en marcha en su futura empresa.', 'B', 'EMPRENDEDOR'),
(17, 1, 'El emprendedor comienza definiendo los pasos estratégicos que lo llevará a alcanzar los resultados.', 'B', 'VISIÓN'),
(18, 1, 'Los emprendedores exitosos reconocen que están aprendiendo siempre y que pueden aprender de todos cada día.', 'A', 'ANALISIS FODA '),
(19, 1, 'Es el proceso por medio del cual las ideas son generadas, desarrolladas y transformadas en valor agregado.', 'A', 'INNOVACIÓN'),
(20, 1, 'El emprendedor identifica necesidades, problemas y tendencias de las personas trata de concebir alternativas de satisfacción o solución según sea el caso.', 'B', 'DETERMINACIÓN'),
(21, 1, 'El liderazgo del emprendedor busca unificar ideas y lograr consensos ante los problemas que se le presenta. ', 'A', 'TRABAJO EN EQUIPO'),
(22, 1, 'El emprendedor trata una sola vez y darse por vencido no es suficiente.', 'A', 'PERSISTENCIA'),
(23, 1, 'El emprendedor manifiesta lo que se piensa, siente y quiere sin lastimar a los demás. ', 'B', 'ASERTIVIDAD'),
(24, 1, 'Es el propósito o razón de ser de la existencia de una empresa', 'A', 'MISIÓN'),
(25, 1, 'Son principios que nos permiten orientar nuestro comportamiento en función de realizarnos como personas.', 'B', 'VALORES'),
(26, 1, 'El emprendedor es optimista y seguro', 'C', 'AUTOESTIMA'),
(27, 1, 'Representan el punto final de la planeación, con el fin hacia el que se encamina la organización, la integración de personal, la dirección y el control', 'A', 'OBJETIVOS'),
(28, 1, 'Se orienta principalmente al análisis y resolución de problemas y se lleva a cabo para identificar y analizar las Fortalezas y Debilidades de la organización, así como las Oportunidades y Amenazas ', 'B', 'ANÁLISIS FODA'),
(29, 1, 'Se debe reflejar la esencia del planteamiento del problema y la idea expresada en el título del proyecto de investigación', 'A', 'OBJETIVO GENERAL'),
(30, 1, 'Se derivan de los objetivos generales y los concretan, señalando el camino que hay que seguir para conseguirlos. ', 'B', 'OBJETIVOS ESPECÍFICOS'),
(31, 2, 'Corresponde al nivel más alto dentro de la organización. Está compuesto por los directores, propietarios o accionistas y por los altos', 'A', 'NIVEL INSTITUCIONAL'),
(32, 2, 'Es el capital de gente, de talentos y de competencias.', 'C', 'CAPITAL HUMANO'),
(33, 2, 'Se le conoce también como nivel táctico, mediador o gerencial. A este nivel pertenecen los departamentos y las divisiones de la empresa.', 'A', 'NIVEL INTERMEDIO'),
(34, 2, 'Es una obligación patronal para los trabajadores, puesto que al hacerlo les brindan acceso a atención médica, les permiten ahorrar para el retiro y acceder a un financiamiento para vivienda.', 'A', 'IMSS'),
(35, 2, 'Es un sistema de actividades conscientemente coordinadas de dos o más personas', 'B', 'ORGANIZACIÓN'),
(36, 2, 'Es una remuneración económica, reconocimiento de logros, creación de un clima laboral estimulante, desarrollo de una cultura de confianza.', 'A', 'MOTIVACIÓN'),
(37, 2, 'Es el nivel organizacional más bajo, en donde se realizan las tareas y también las operaciones', 'A', 'NIVEL OPERACIONAL'),
(38, 2, 'puede ser comprendida como la identificación de los requerimientos, es decir, una descripción de lo que deber ser realizado.', 'B', 'ANÁLISIS DE PUESTOS'),
(39, 2, 'Es un área interdisciplinaria: comprende necesariamente conceptos de psicología industrial y organizacional, de sociología organizacional, de ingeniería industrial, de derecho laboral, de ingeniería de la seguridad, de medicina del trabajo.', 'C', 'RECURSOS HUMANOS'),
(40, 2, 'Es la forma mediante la cual una empresa genera su sustento, esto es, genera ingresos', 'A', 'MODELO DE NEGOCIOS'),
(41, 2, 'Describe de manera general la viabilidad financiera de tu empresa a través de proyecciones (ingresos proyectados, gastos y ganancias).', 'C', 'ANÁLISIS FINANCIERO'),
(42, 2, 'Es la exposición detallada, estructurada, ordenada y sistemática ', 'B', 'DESCRIPCIÓN DE PUESTOS DE TRABAJO'),
(43, 2, 'Una guía para el emprendedor, ya que reúne la información verbal y gráfica de lo que el negocio es o tendrá que ser. ', 'A', 'PLAN DE NEGOCIOS'),
(44, 2, 'Es una descripción corta de tu empresa, un resumen breve de los servicios o productos que ofreces', 'B', 'RESUMEN EJECUTIVO'),
(45, 2, 'Cada puesto subordinado a otro se representa por cuadros en un nivel inferior, ligados a aquel por líneas que representan la comunicación de responsabilidad y autoridad.', 'C', 'ORGANIGRAMA VERTICAL'),
(46, 2, 'Despliegan las unidades de izquierda a derecha y colocan al titular en el extremo izquierdo.', 'A', 'ORGANIGRAMA HORIZONTAL'),
(47, 2, 'Son formados por un cuadro central, que corresponde a la autoridad máxima de la empresa.', 'B', 'ORGANIGRAMA CIRCULAR'),
(48, 2, 'Es un sistema de actividades conscientemente coordinadas de dos o más personas.   ', 'C', 'ORGANIZACIÓN'),
(49, 2, 'Corresponde al nivel más alto dentro de la organización. Está compuesto por los directores, propietarios o accionistas y por los altos ejecutivos.', 'B', 'NIVEL INSTITUCIONAL'),
(50, 2, 'Se le conoce también como nivel táctico, mediador o gerencial.A este nivel pertenecen los departamentos y las divisiones de la empresa. Se encuentra entre el nivel institucional y el nivel operacional, y se ocupa de articularlos internamente.', 'A', 'NIVEL INTERMEDIO'),
(51, 2, 'Se le conoce también como nivel técnico o núcleo técnico; que se encuentra en las áreas internas e inferiores de la organización.', 'B', 'NIVEL OPERACIONAL'),
(52, 2, 'Es la representación gráfica de la estructura organizativa, usualmente aplicados a empresas u organización.  ', 'C', 'ORGANIGRAMA'),
(53, 2, 'La competencia de una persona es la capacidad de actuar en diversas situaciones para crear activos, tanto tangibles como intangibles.', 'A', 'CAPITAL HUMANO'),
(54, 2, 'Es indispensable contar con el personal adecuado para su empresa, personal ya que ellos representaran la imagen hacia el cliente', 'B', 'FUNCIONES DEL PERSONAL'),
(55, 2, 'Representa un sistema que procura atraer candidatos de las fuentes de reclutamiento identificadas y localizadas en el mercado de recursos humanos', 'C', 'RECLUTAMIENTO DE PERSONAL'),
(56, 2, 'Es un proceso que, partiendo del reclutamiento, elige, filtra y decide aquel o aquellos candidatos que tengan mayores probabilidades de ajustarse a las necesidades del puesto. ', 'A', 'SELLECIÓN DE PERSONAL'),
(57, 2, 'Implica la incorporación de nuevas personas a la organización y su adaptación al puesto de trabajo en el menor tiempo posible.', 'B', 'INDUCCIÓN'),
(58, 2, 'Se define como el conjunto de actividades didácticas, orientadas a ampliar los conocimientos.', 'B', 'CAPTACION'),
(59, 2, 'Representa una pieza clave para el buen funcionamiento de sus labores, creación de un clima laboral estimulante, desarrollo de una cultura de confianza.   ', 'A', 'MOTIVACIÓN'),
(60, 3, 'Es un objeto que se ofrece en un mercado con la intención de satisfacer aquello que necesita o que desea un consumidor.                     ', 'B', 'PRODUCTO'),
(61, 3, 'Se define como las actividades identificables e intangibles que son el objeto principal de una transacción diseñada para brindar a los clientes satisfacción de deseos o necesidades. ', 'C', 'SERVICIO'),
(62, 3, 'Es un elemento tangible o material destinado a satisfacer  necesidades de clientes o grupos de consumidores que lo demandan. En ese sentido, pueden adquirirse en el mercado mediante transacciones u operaciones económicas con un precio asignado. ', 'A', 'BIEN'),
(63, 3, 'Es el conjunto de compradores reales y potenciales que tienen una determinada necesidad y/o deseo, dinero para satisfacerlo y voluntad para hacerlo, los cuales constituyen la demanda, y vendedores', 'A', 'MERCADO'),
(64, 3, 'Se refiere a la clasificación ya sea por país, estado, región, localidad.    \r\n', 'B', 'SEGMENTACIÓN GEOGRAFICA'),
(65, 3, 'Divide a los compradores en diferentes grupos con base en su clase social, estilo de vida o personalidad.', 'A', 'SEGMENTACIÓN PICTOGRÁFICA'),
(66, 3, 'Divide a grupos con base en sus conocimientos, actitudes, usos o respuestas    ', 'B', 'SEGMENTACIÓN CONDUCTUAL'),
(67, 3, 'Una posición es la manera en que los clientes actuales y posibles ven un producto, marca u organización en relación con la competencia.  ', 'C', 'POSICIONAMIENTO'),
(68, 3, 'Es una característica o servicio extra que se le da a un producto o servicio con el fin de darle un mayor valor en la percepción del consumidor. ', 'B', 'VALOR AGREGADO'),
(69, 3, 'Es un signo distintivo que indica que ciertos bienes o servicios han sido producidos o proporcionados por una persona o empresa determinada.', 'A', 'MARCA'),
(70, 3, 'Tipo de mercado donde el precio se establece lentamente y está determinado en buena medida por los costos de producción.', 'B', 'MERCADO A LARGO PLAZO'),
(71, 3, 'Es el conjunto de compradores reales y potenciales que tienen una determinada necesidad y/o deseo, dinero para satisfacerlo y voluntad para hacerlo, los cuales constituyen la demanda.', 'A', 'MERCADO'),
(72, 3, 'Es un objeto que se ofrece en un mercado con la intención de satisfacer aquello que necesita o que desea un consumidor', 'A', 'PRODUCTO'),
(73, 3, 'Para identificar hacia dónde dirigir la oferta de productos y servicios', 'C', 'SEGMENTO DE MERCADO'),
(74, 3, 'Tipo de bien en donde aquellos que compran los consumidores finales para consumo propio.', 'B', 'BIENES BÁSICOS'),
(75, 3, 'Conjunto de la oferta y la demanda de mano de obra', 'B', 'MERCADO DE TRABAJO'),
(76, 3, 'Se define como las actividades identificables e intangibles que son el objeto principal de una transacción diseñada para brindar a los clientes satisfacción de deseos o necesidades', 'A', 'SERVICIO'),
(77, 3, 'Es una característica o servicio extra que se le da a un producto o servicio con el fin de darle un mayor valor en la percepción del consumidor', 'B', 'VALOR AGREGADO'),
(78, 3, 'Tipo de mercado donde se  ofrece bienes producidos específicamente para venderlos', 'A', 'MERCACÍAS'),
(79, 3, 'Divide a los compradores en diferentes grupos con base en su clase social, estilo de vida o personalidad', 'B', 'SEGMENTACIÓN PICTOGRAFICA'),
(80, 3, 'Es un elemento tangible o material destinado a satisfacer necesidades de clientes o grupos de consumidores que lo demandan', 'A', 'BIEN '),
(81, 3, 'Es un signo distintivo que indica que ciertos bienes o servicios han sido producidos o proporcionados por una persona o empresa determinada.', 'B', 'MARCA'),
(82, 3, 'En este tipo de mercado el precio se establece rápidamente y está determinado por el precio de reserva', 'A', 'DE OFERTA INSTANTANEA'),
(83, 3, 'Segmentación que se refiere a la clasificación ya sea por país, estado, región, localidad.', 'A', 'SEGMENTO GEOGRÁFICO'),
(84, 3, 'Es una frase que identifica a un producto o servicio. El slogan va sin marca incorporada y está implícito en una marca.', 'B', 'SLOGAN'),
(85, 3, 'Es el espacio perfecto para escribir comentarios relacionados a la empresa, se pueden crear diversos blogs en páginas web distintas. Esto atraerá más lectores a su sitio', 'B', 'BLOG COMERCIAL'),
(86, 3, 'Divide a grupos con base en sus conocimientos, actitudes, usos o respuestas', 'A', 'SEGMENTACION CONDUCTUAL'),
(87, 3, 'Es la renovación y ampliación de la gama de productos y servicios y de los mercados correspondientes a gestionar un cambio en la organización del trabajo, en las condiciones del trabajo y las cualificaciones profesionales', 'B', 'INNOVACIÓN'),
(88, 3, 'Al tener definido ya el producto o servicio y el segmento de mercado es necesario identificar las estrategias a desarrollar para dar a conocer a la empresa.', 'B', 'DESARROLLO DE LA IMAGEN CORPORATIVA'),
(89, 4, 'Para comercializar un producto se requiere de los siguientes aspectos', 'C', 'TODAS LAS ANTERIORES'),
(90, 4, 'Consiste en el conjunto de personas y empresas comprendidas en la transferencia de derechos de un producto al paso de éste del productor al consumidor o usuario de negocios final', 'B', 'CANAL DE DISTRIBUCIÓN'),
(91, 4, 'Existen dos tipos de canales de distribución', 'A', 'DIRECTOS E INDIRECTOS'),
(92, 4, 'Son los tipos de clientes más usuales', 'C', 'LAS DOS ANTERIORES'),
(93, 4, 'Se definen como los gastos económicos que representa la fabricación de un producto o prestación de un servicio. ', 'B', 'COSTOS'),
(94, 4, 'Es la cantidad de dinero que los clientes tienen que pagar por un determinado producto o servicio.', 'A', 'PRECIO'),
(95, 4, 'Se le denomina así a lo que determina el comportamiento del precio en lo relativo al costo de introducción en el mercado, descuento por compra en volumen o pronto pago, promociones, comisiones o ajustes de acuerdo con la demanda', 'C', 'POLÍTICA DE PRECIOS'),
(96, 4, 'Es la rivalidad entre empresas por la lealtad de sus clientes, representa una oportunidad para mejorar la oferta de productos y servicios a través de esquemas de calidad, mejora de procesos', 'B', 'COMPETENCIA'),
(97, 4, 'Es el proceso donde las partes interesadas resuelven conflictos, buscan obtener ventajas (individuales o colectivas) o procuran obtener resultados que sirvan a sus intereses.', 'B', 'NEGOCIACIÓN'),
(98, 4, 'Son tipos de negociación', 'B', 'ACERTADA, TRADICIONAL, GANAR-GANAR, INMEDIATA, PROGRESIVA, ENFOCADA A RESULTADOS'),
(99, 4, 'Es la manera en que cada parte trata de conducirse con el fin de alcanzar sus objetivos ', 'C', 'ESTRATEGIA DE NEGOCIACIÓN'),
(100, 4, 'Consiste en el conjunto de personas y empresas comprendidas en la transferencia de derechos de un producto al paso de éste del productor al consumidor o usuario de negocios final. ', 'B', 'CANALES DE DISTRIBUCIÓN'),
(101, 4, 'Son aquellos (personas, empresas u organizaciones) que le hacen compras a la empresa de forma periódica o que lo hicieron en una fecha reciente. ', 'A', 'CLIENTES ACTUALES'),
(102, 4, 'Los clientes activos son aquellos que en la actualidad están acertada. realizando compras o que lo hicieron dentro de un periodo corto de tiempo. ', 'C', 'CLIENTES ACTIVOS'),
(103, 4, 'Son aquellos que realizaron su última compra hace bastante tiempo atrás.', 'C', 'CLIENTES INACTIVOS'),
(104, 4, 'Son aquellos (personas, empresas u organizaciones) que no le realizan compras a la empresa en la actualidad pero que son visualizados como posibles clientes en el futuro.', 'A', 'CLIENTES POTENCIALES'),
(105, 4, 'Es la cantidad de dinero que los clientes tienen que pagar por un determinado producto o servicio. ', 'C', 'PRECIOS'),
(106, 4, 'Es la rivalidad entre empresas por la lealtad de sus clientes.', 'B', 'COMPETENCIA'),
(107, 4, 'Es el proceso donde las partes interesadas resuelven conflictos, buscan obtener ventajas (individuales o colectivas) o procuran obtener resultados que sirvan a sus intereses. ', 'C', 'NEGOCIACIÓN'),
(108, 4, 'Se produce cuando las negociaciones obtienen todos o la mayoría  de resultados que desean sin llegar a romper relaciones ', 'C', 'NEGOCIACIÓN ACERTADA'),
(109, 4, 'Es la manera en que cada en que da parte trata de conducirse con el fin de alcanzar sus objetivos.', 'A', 'ESTRATEGIA DE NEGOCICIÓN'),
(110, 5, 'Las materias primas se reciben de los proveedores, luego se almacenan y pasan al proceso productivo, que sigue un itinerario prefijado. ', 'B', 'PRODUCCIÓN CONTINUA'),
(111, 5, 'Se produce o elabora un lote de productos que tiene un nivel predeterminado de producción.', 'A', 'PRODUCCIÓN'),
(112, 5, 'Son cantidades de recursos que se despliegan a lo largo del complejo sistema de relaciones intra e inter empresa para permitir su operación económica y fluida garantizando la máxima satisfacción del cliente. ', 'C', 'MANEJO DE INVENTARIOS'),
(113, 5, 'Son todas aquellas actividades relacionadas con la obtención de dinero u su uso eficaz. ', 'B', 'FINANZAS'),
(114, 5, 'Es una herramienta clave para la toma de decisiones en materia de inversión, en todo tiempo y lugar la humanidad ha tenido y tiene la necesidad del orden en materia económica. ', 'A', 'CONTABILIDAD'),
(115, 5, 'Sistema de información orientado a proporcionar información a terceras personas relacionadas con la empresa, como accionistas, instituciones de crédito, inversionistas, etc., a fin de facilitar sus decisiones. ', 'A', 'CONTABILIDAD FINACIERA'),
(116, 5, 'Sistema de información orientado a dar cumplimiento a las obligaciones tributarias de las organizaciones. Definición de Activos. Son todos aquellos bienes tangibles de la empresa. ', 'A', 'CONTABILIDAD FISCAL'),
(117, 5, 'Son los pagos que se hacen por anticipado a la prestación de un bien o servicio o a la percepción de un servicio, o por la adquisición de un bien material que no se consume de inmediato, sino que será utilizado durante un lapso posterior. ', 'B', 'ACTIVO DIFERIDO'),
(118, 5, 'Los conceptos que integran este grupo del balance, son objeto de un estudio particular. Se pueden distinguir como básicos, las aportaciones originales de los propietarios y el aumento o disminución que corresponda al resultado de la operación de la empres', 'C', 'CAPITAL'),
(119, 5, 'representan la información que se necesita para la toma de intermitente. Decisiones económicas. ', 'A', 'ESTADO DE RESULTADOS'),
(120, 5, 'Es la sucesión de diferentes fases o etapas de una actividad. Es el conjunto de acciones sucesivas realizadas con la intención de conseguir un resultado en el transcurso del tiempo.', 'B', 'PROCESO '),
(121, 5, 'El proceso de producción consta de los siguientes elementos', 'A', 'INSUMOS, PRODUCTO Y OPERACIONES'),
(122, 5, 'Las materias primas se reciben de los proveedores, luego se almacenan y pasan al proceso productivo, que sigue un itinerario prefijado', 'A', 'PRODUCCIÓN CONTINUA'),
(123, 5, 'Se utiliza este sistema cuando la demanda de un producto no es bastante grande como para ocupar todo el tiempo disponible de la línea de producción. La mano de obra es más especializada', 'B', 'PRODUCCIÓN INTERMITENTE '),
(124, 5, 'Son cantidades de recursos que se despliegan a lo largo del complejo sistema de relaciones intra e inter empresa para permitir su operación económica y fluida.', 'B', 'MANEJO DE INVENTARIOS'),
(125, 5, 'Son todas aquellas actividades relacionadas con la obtención de dinero u su uso eficaz.', 'C', 'FINANZAS'),
(126, 5, 'En esta área se debe saber identificar los factores que apoyan y afectan a la economía.', 'B', 'MERCADOS DE DINERO Y DE CAPITALES'),
(127, 5, 'Se encuentran estrechamente relacionadas con las finanzas, ya que está involucrada con el manejo que se le da al dinero. Determina como asignar los recursos de una manera eficiente.', 'A', 'INVERSIONES'),
(128, 5, 'Esta área tiene como objetivo la expansión del dinero y se ocupa de cómo manejar adecuadamente las ventas y los gastos para obtener una buena rentabilidad.', 'C', 'ADMINISTRACIÓN FINANCIERA'),
(129, 5, 'Es una técnica que se utiliza para el registro de las operaciones que afecten económicamente a una entidad y que produce sistemática y estructuralmente información financiera.', 'A', 'CONTABILIDAD'),
(130, 5, 'Son fines fundamentales de la contabilidad', 'C', 'LAS DOS ANTERIORES'),
(131, 5, 'Consiste en las deudas que la empresa posee, comprende las obligaciones actuales de la compañía que tienen origen en transacciones financieras pasadas.', 'B', 'PASIVOS '),
(132, 5, 'Grupo formado por las deudas que tiene que pagar la empresa a corto plazo (por lo general es menor de un año)', 'B', 'PASIVO CIRCULANTE'),
(133, 5, 'Lo integran deudas que deben cubrirse a largo plazo (convencionalmente mayor de un año)', 'C', 'PASIVO FIJO'),
(134, 5, 'Bajo este rubro se presentan los ingresos que recibe la empresa anticipadamente a la prestación de sus servicios (generalmente se trata de intereses y rentas cobradas por anticipado)', 'B', 'PASIVO DIFERIDO'),
(135, 5, 'Los conceptos que integran este grupo del balance, se pueden distinguir como básicos, las aportaciones originales de los propietarios y el aumento o disminución que corresponda al resultado de la operación de la empresa', 'A', 'DEFINICIÓN DE CAPITAL'),
(136, 6, 'Aplica para quienes vayan a realizar actividades comerciales, industriales, agrícolas, ganaderas, de pesca o silvícolas.No tiene límite en los ingresos y deberá emitir facturas ', 'B', 'ACTIVIDADES EMPRESARIALES'),
(137, 6, 'Aplica para quienes se dedican a prestar servicios profesionales  de manera independiente y cobran a través de un recibo de honorarios. ', 'C', 'ACTIVIDADES'),
(138, 6, 'Aplica para quienes obtienen ingresos por dar en renta o alquiler edificios, locales comerciales, casas habitación, departamentos, oficinas, inmuebles ', 'A', 'ARRENDAMIENTO DE BIENES'),
(139, 6, 'Realiza cualquier actividad que constituya especulación comercial, se necesita un mínimo de dos socios. ', 'C', 'SOCIEDAD ANÓNIMA'),
(140, 6, 'Realiza actividades de carácter económico pero que no  constituyen una especulación comercial, se necesita un mínimo de dos socios, las decisiones se toman por unanimidad de votos. ', 'A', 'FACTURACIÓN ELECTRÓNICA'),
(141, 6, 'Es un documento electrónico que cumple con los requisitos legales como la autenticidad de su origen y la integridad de su contenido.            ', 'A', 'FACTURACIÓN ELECTRÓNICA'),
(142, 6, 'Es un órgano desconcentrado de la Secretaría de Hacienda y Crédito Público, que tiene la responsabilidad de aplicar la legislación fiscal y aduanera, con el fin de que las personas físicas y morales contribuyan proporcional y equitativamente al gasto públ', 'B', 'SERVICIO DE ADMINISTRACION TRIBUTARIA - SAT'),
(143, 6, 'Para iniciar un negocio de manera formal es importante definir si se hará a través de algún tipo de sociedad', 'A', 'MARCO LEGAL'),
(144, 6, 'Realiza cualquier actividad con especulación comercial, se necesita un mínimo de dos socios y un máximo de 50 ', 'B', 'SOCIEDAD DE RESPONSABILIDAD LIMITADA'),
(145, 6, 'Realiza cualquier actividad con especulación comercial, se necesita un mínimo de cinco socios.', 'B', 'SOCIEDAD COOPERATIVA'),
(146, 6, 'Es un nuevo tipo de sociedad que se constituye de una manera más fácil que una sociedad anónima. La pueden formar una o varias personas humanas o jurídicas en las SAS', 'C', 'SOCIEDAD DE ACCIONES SIMPLIFICADAS                                                                             '),
(147, 6, 'Se compone de uno varios socios comanditados que responden de manera subsidiaria, ilimitada y solidariamente, de las obligaciones sociales y de uno profesionales o varios comanditarios que únicamente están obligados al pago de sus aportaciones.     ', 'B', 'SOCIEDAS DE COMANDITA SIMPLE'),
(148, 6, 'Es una mujer o un hombre mayor de edad, susceptible a adquirir derechos y obligaciones. Una sola persona puede constituirse en una organización económica y comenzar a realizar el objetivo planeado.', 'C', 'PERSONAS FÍSICAS '),
(149, 6, 'Aplica si se realiza exclusivamente actividades empresariales y se estima que sus ingresos brutos (ventas totales, incluyendo de bienes y servicios), no excederán de $4,000,000.00.', 'A', 'RÉGIMEN FISCAL INTERMEDIO '),
(150, 6, 'Aplica para quienes vayan a realizar actividades comerciales, industriales, agrícolas, ganaderas, de pesca o silvícolas. No tiene límite en los ingresos y deberá emitir facturas', 'A', 'ACTIVIDADES EMPRESARIALES '),
(151, 6, 'Aplica para quienes se dedican a prestar servicios profesionales de manera independiente y cobran a través de un recibo de honorarios', 'B', 'ACTIVIDADES PROFESIONALES'),
(152, 6, 'Aplica para quienes obtienen ingresos por dar en renta o alquiler edificios, locales comerciales, casas habitación, departamentos, oficinas, bodegas, entre otros viene inmuebles.', 'A', 'ARRENDAMIENTO DE BIENES INMUEBLES '),
(153, 6, 'Realiza cualquier actividad que constituya especulación comercial, se necesita un mínimo de dos socios', 'C', 'SOCIEDAD COMERCIAL'),
(154, 6, 'Realiza actividades de carácter económico pero que no constituyen una especulación comercial, se necesita un mínimo de dos socios', 'C', 'SOCIEDAD CIVIL '),
(155, 6, 'Los socios responden de modo subsidiario, solidario, e ilimitadamente de las obligaciones sociales.', 'A', 'SOCIEDAD EN NOMBRE COLECTIVO'),
(156, 6, 'Realiza cualquier actividad con especulación comercial, se necesita un mínimo de dos socios y un máximo de 50', 'A', 'SOCIEDAD DE RESPONSABILIDAD LIMITADA'),
(157, 6, 'Realiza cualquier actividad con especulación comercial, se necesita un mínimo de cinco socios', 'B', 'SOCIEDAD EN CONJUNTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido_p` varchar(255) DEFAULT NULL,
  `apellido_m` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `curp` varchar(255) DEFAULT NULL,
  `telefono` bigint(25) DEFAULT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `escolaridad` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `pago` varchar(255) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido_p`, `apellido_m`, `fecha_nac`, `curp`, `telefono`, `estado_civil`, `sexo`, `escolaridad`, `estado`, `municipio`, `domicilio`, `cod_postal`, `correo_electronico`, `contraseña`, `pago`) VALUES
(1, 'Alejandro', 'Leon', 'Lozano', '1995-07-28', 'curp', 5511534459, 'Soltero', 'Masculino', 'Licenciatura', 'Mexico', 'chimalhuacan', 'vidrieros mz307 lt35', 56356, 'ale-131961@live.com.mx', '$2y$10$ASiFq6.8oVsk9Wkz1V86pehxtj4MvmIMNOeHN0wamC7RAEce9on8S', 'si'),
(2, 'Juan Jose', 'Granados', 'Velazquez', '2019-05-13', 'dsdadsa6565', 551115618, 'Soltero(a)', 'Masculino', 'Preparatoria/Bachillerato', 'MÃ©xico', 'chimalhuacan', 'calle tal, lt35', 56356, 'juan@hotmail.com', '$2y$10$ChdXE786z9czvUvtXqiHYOaLz4YwaYg8Qi2peoRkmai56CMEXs2YK', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`);

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
