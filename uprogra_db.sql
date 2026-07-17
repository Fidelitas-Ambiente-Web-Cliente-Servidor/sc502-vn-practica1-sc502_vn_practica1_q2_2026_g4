-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 17-07-2026 a las 04:09:08
-- Versión del servidor: 8.0.46
-- Versión de PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uprogra_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `asunto` varchar(150) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `fecha_envio`) VALUES
(1, 'Carlos Ramírez', 'carlos.ramirez@correo.com', '88881234', 'Consulta sobre matrícula', 'Deseo conocer el proceso de matrícula y las fechas disponibles para iniciar un curso.', '2026-07-17 04:08:50'),
(2, 'Ana Rodríguez', 'ana.rodriguez@correo.com', '87772345', 'Información de cursos', 'Me gustaría recibir información sobre los cursos de desarrollo web y sus horarios.', '2026-07-17 04:08:50'),
(3, 'José Fernández', 'jose.fernandez@correo.com', '86663456', 'Consulta de precios', 'Quisiera saber si existen opciones de pago para los cursos de programación.', '2026-07-17 04:08:50'),
(4, 'Valeria Mora', 'valeria.mora@correo.com', '85554567', 'Curso de bases de datos', 'Necesito más detalles sobre el contenido y la duración del curso de bases de datos.', '2026-07-17 04:08:50'),
(5, 'Pablo Sánchez', 'pablo.sanchez@correo.com', '84445678', 'Soporte de plataforma', 'Tengo una consulta sobre el acceso a la plataforma y el material de los cursos.', '2026-07-17 04:08:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre`, `descripcion`, `categoria`, `duracion`, `precio`, `imagen`) VALUES
(1, 'HTML y CSS desde Cero', 'Aprende a crear páginas web modernas utilizando estructura HTML5 y estilos CSS3.', 'Desarrollo Web', '6 semanas', 45000.00, 'images/html-css.jpg'),
(2, 'JavaScript Básico', 'Desarrolla lógica de programación y agrega interactividad a tus sitios web.', 'Programación', '8 semanas', 55000.00, 'images/javascript.jpg'),
(3, 'Introducción a React', 'Crea interfaces dinámicas usando componentes, props y estados en React.', 'Frontend', '10 semanas', 75000.00, 'images/react.jpg'),
(4, 'Bases de Datos SQL', 'Aprende consultas, tablas, relaciones y fundamentos para administrar bases de datos.', 'Bases de Datos', '7 semanas', 50000.00, 'images/sql.jpg'),
(5, 'Análisis de Datos', 'Interpreta información, crea reportes y toma decisiones basadas en datos.', 'Datos', '9 semanas', 65000.00, 'images/datos.jpg'),
(6, 'Fundamentos de Ciberseguridad', 'Conoce los principios básicos para proteger sistemas, redes e información.', 'Seguridad Informática', '8 semanas', 60000.00, 'images/ciberseguridad.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_destacados`
--

CREATE TABLE `cursos_destacados` (
  `id_curso_destacado` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos_destacados`
--

INSERT INTO `cursos_destacados` (`id_curso_destacado`, `nombre`, `descripcion`, `imagen`, `categoria`) VALUES
(1, 'Curso HTML', 'Aprende la estructura esencial de las páginas web con HTML.', '', 'Desarrollo Web'),
(2, 'Curso CSS', 'Crea diseños modernos y responsivos con hojas de estilo CSS.', '', 'Diseño Web'),
(3, 'Curso Python', 'Conoce las bases de Python para programación y automatización.', '', 'Programación'),
(4, 'Curso JavaScript', 'Agrega interactividad a las páginas web mediante JavaScript.', '', 'Desarrollo Web'),
(5, 'Curso Bases de Datos', 'Aprende a diseñar tablas y realizar consultas con MySQL.', '', 'Bases de Datos'),
(6, 'Curso Git y GitHub', 'Controla versiones de tus proyectos y trabaja en equipo.', '', 'Herramientas'),
(7, 'Curso Java', 'Desarrolla programas orientados a objetos con Java.', '', 'Programación'),
(8, 'Curso Bootstrap', 'Crea interfaces responsivas utilizando componentes de Bootstrap.', '', 'Diseño Web'),
(9, 'Curso PHP', 'Aprende a crear sitios web dinámicos conectados a bases de datos.', '', 'Desarrollo Web'),
(10, 'Curso Docker', 'Conoce los fundamentos de contenedores para ejecutar aplicaciones.', '', 'Herramientas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `cursos_imparte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre`, `especialidad`, `descripcion`, `foto`, `correo`, `cursos_imparte`) VALUES
(1, 'Laura Muñoz', 'Desarrollo Web', 'Especialista en HTML, CSS y JavaScript con más de 10 años de experiencia en desarrollo frontend.', 'images/profesor1.jpg', 'laura@academia.com', 'HTML, CSS, JavaScript'),
(2, 'Rolando Castro', 'Bases de Datos', 'Ingeniero en Sistemas especializado en SQL Server, MySQL y Oracle.', 'images/profesor3.jpg', 'rolando@academia.com', 'SQL, MySQL, Oracle'),
(3, 'Susana Rojas', 'Programación', 'Profesora con amplia experiencia en Java, Python y programación orientada a objetos.', 'images/profesor2.jpg', 'susana@academia.com', 'Java, Python'),
(4, 'Daniel López', 'Ciberseguridad', 'Consultor en seguridad informática y seguridad de redes.', 'images/profesor4.jpg', 'daniel@academia.com', 'Redes, Seguridad, Linux'),
(5, 'María Jiménez', 'Análisis de Datos', 'Especialista en análisis de datos, visualización de información y herramientas de inteligencia de negocios.', 'images/profesor1.jpg', 'maria@academia.com', 'Excel, Power BI, Análisis de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id_testimonio` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id_testimonio`, `nombre`, `ubicacion`, `imagen`, `comentario`) VALUES
(1, 'Sergio Cabezas', 'San Pedro', 'Recursos/img/ProfilePics/avatar_1.png', 'Antes de ingresar a UProgra tenía conocimientos muy básicos de programación. Gracias a los cursos y al acompañamiento de los profesores, pude desarrollar mis primeros proyectos web y ganar mucha más confianza en mis habilidades.'),
(2, 'Josling Aragon', 'Heredia', 'Recursos/img/ProfilePics/avatar_2.png', 'Lo que más me gustó de UProgra fue la forma práctica de enseñar. Cada lección incluye ejercicios y proyectos reales que ayudan a comprender mejor los conceptos.'),
(3, 'Samantha Mendoza', 'San Pedro', 'Recursos/img/ProfilePics/avatar_3.png', 'Los cursos están muy bien estructurados y el contenido se mantiene actualizado con las tecnologías que se utilizan actualmente en la industria.'),
(4, 'Daniela Rojas', 'Cartago', 'Recursos/img/ProfilePics/avatar_1.png', 'UProgra me ayudó a ordenar mis conocimientos y a practicar con proyectos que puedo incluir en mi portafolio.'),
(5, 'Andrés Vargas', 'Alajuela', 'Recursos/img/ProfilePics/avatar_2.png', 'La explicación de los profesores y el material práctico hicieron que aprender programación fuera mucho más claro.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `cursos_destacados`
--
ALTER TABLE `cursos_destacados`
  ADD PRIMARY KEY (`id_curso_destacado`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `correo_unico` (`correo`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id_testimonio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cursos_destacados`
--
ALTER TABLE `cursos_destacados`
  MODIFY `id_curso_destacado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id_testimonio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;











CREATE USER IF NOT EXISTS 'appuser'@'%' IDENTIFIED BY 'apppass';

GRANT ALL PRIVILEGES ON uprogra_db.* TO 'appuser'@'%';

FLUSH PRIVILEGES;