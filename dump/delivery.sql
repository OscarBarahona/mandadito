-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2020 a las 09:12:36
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delivery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `idelementos` int(11) NOT NULL,
  `idFormulario` varchar(45) NOT NULL,
  `idtipoElemento` varchar(2) NOT NULL,
  `nombre` text DEFAULT NULL,
  `place_holder` text DEFAULT NULL,
  `requisito` varchar(1) DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL,
  `tipo_val` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre`, `telefono`, `direccion`, `estado`) VALUES
(1, 'TEST', '12345678', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nombre`) VALUES
(1, 'INACTIVO'),
(2, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `idformulario` varchar(25) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fechatrx` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `controlador` varchar(45) DEFAULT NULL,
  `accion` varchar(45) DEFAULT NULL,
  `icono` varchar(45) DEFAULT NULL,
  `padre` int(11) DEFAULT NULL,
  `permisos` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `alias` varchar(64) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idmenu`, `nombre`, `controlador`, `accion`, `icono`, `padre`, `permisos`, `estado`, `alias`, `empresa`, `descripcion`) VALUES
(2, 'Inicio', 'site', 'index', 'fa fa-home', 0, 1, 2, 'DELYINDEX', 1, NULL),
(3, 'Paquete', '', '', 'fa fa-cart-plus', 0, 1, 2, NULL, 1, NULL),
(4, 'Ingreso', 'paquetes', 'ingreso', NULL, 3, 1, 2, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdet`
--

CREATE TABLE `orderdet` (
  `idorderdet` int(11) NOT NULL,
  `idorderhed` int(11) DEFAULT NULL,
  `elemento` int(11) DEFAULT NULL,
  `form` int(11) DEFAULT NULL,
  `valor` text DEFAULT NULL,
  `fechatrx` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderhed`
--

CREATE TABLE `orderhed` (
  `idorderhed` int(11) NOT NULL,
  `fechatrx` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermisos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermisos`, `nombre`, `estado`) VALUES
(1, 'usuario', 2),
(2, 'Administrador', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoelemento`
--

CREATE TABLE `tipoelemento` (
  `idtipoElemento` varchar(2) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuarios` varchar(100) NOT NULL,
  `alias` varchar(45) NOT NULL,
  `creacion` varchar(45) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(45) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idpermisos` int(11) NOT NULL,
  `estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuarios`, `alias`, `creacion`, `nombre`, `correo`, `contrasenia`, `idempresa`, `idpermisos`, `estado`) VALUES
('asfvaey', 'OBARAHONA@TEST', '', 'Oscar Barahona', 'obarahona@red.com.sv', 'MTIzNDU2', 1, 2, 2),
('vrysera', 'ARIVAS@TEST', '', 'ALVARO RIVAS', NULL, 'MTIzNDU2', 1, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`idelementos`),
  ADD KEY `fk_elemen_form` (`idFormulario`),
  ADD KEY `fk_elemen_tip` (`idtipoElemento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `fk_emp_est` (`estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idformulario`),
  ADD KEY `fk_form_estado` (`estado`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `fk_menu_empresa` (`empresa`),
  ADD KEY `fk_menu_permiso` (`permisos`),
  ADD KEY `fk_menu_estado` (`estado`);

--
-- Indices de la tabla `orderdet`
--
ALTER TABLE `orderdet`
  ADD PRIMARY KEY (`idorderdet`),
  ADD KEY `fk_hed_det` (`idorderhed`);

--
-- Indices de la tabla `orderhed`
--
ALTER TABLE `orderhed`
  ADD PRIMARY KEY (`idorderhed`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermisos`);

--
-- Indices de la tabla `tipoelemento`
--
ALTER TABLE `tipoelemento`
  ADD PRIMARY KEY (`idtipoElemento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usr_emp` (`idempresa`),
  ADD KEY `fk_usr_per` (`idpermisos`),
  ADD KEY `fk_usr_estado` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `fk_elemen_form` FOREIGN KEY (`idFormulario`) REFERENCES `formulario` (`idformulario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_elemen_tip` FOREIGN KEY (`idtipoElemento`) REFERENCES `tipoelemento` (`idtipoElemento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_emp_est` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `fk_form_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_empresa` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_permiso` FOREIGN KEY (`permisos`) REFERENCES `permisos` (`idpermisos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orderdet`
--
ALTER TABLE `orderdet`
  ADD CONSTRAINT `fk_hed_det` FOREIGN KEY (`idorderhed`) REFERENCES `orderhed` (`idorderhed`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usr_emp` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usr_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usr_per` FOREIGN KEY (`idpermisos`) REFERENCES `permisos` (`idpermisos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
