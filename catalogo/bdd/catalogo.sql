-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2021 a las 20:09:23
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--
CREATE DATABASE catalogo;
USE catalogo;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int NOT NULL,
  `catNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `catNombre`) VALUES
(1, 'PC'),
(2, 'Smartphone'),
(3, 'Tablets'),
(4, 'Accesorios'),
(5, 'Cargadores'),
(6, 'Notebooks'),
(7, 'Fundas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int NOT NULL,
  `mkNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `mkNombre`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Huawei'),
(4, 'LG'),
(5, 'Motorola'),
(6, 'Google'),
(7, 'Asus'),
(8, 'ZTE'),
(9, 'Nokia'),
(10, 'Lenovo'),
(11, 'PlayStation'),
(12, 'Ninendo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int NOT NULL,
  `prdNombre` varchar(30) NOT NULL,
  `prdPrecio` double NOT NULL,
  `idMarca` int NOT NULL,
  `idCategoria` int NOT NULL,
  `prdPresentacion` text NOT NULL,
  `prdStock` int NOT NULL,
  `prdImagen` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdPresentacion`, `prdStock`, `prdImagen`) VALUES
(1, 'iPhone 6', 499.99, 1, 2, '16GB', 500, 'P001.jpg'),
(2, 'iPad Pro', 599.99, 1, 3, '32GB', 300, 'P002.jpg'),
(3, 'Nexus 7', 299.99, 6, 3, '32GB', 300, 'P003.jpg'),
(4, 'Galaxy S7', 459.9, 2, 2, '64GB', 650, 'P004.jpg'),
(5, 'Moto G', 489.99, 5, 2, '8GB', 750, 'P005.jpg'),
(6, 'L40', 199.69, 4, 2, '24GB', 350, 'P006.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `usuNombre` varchar(30) NOT NULL,
  `usuApellido` varchar(30) NOT NULL,
  `usuEmail` varchar(30) NOT NULL,
  `usuPass` varchar(75) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuEstado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuNombre`, `usuApellido`, `usuEmail`, `usuPass`, `usuEstado`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 1),
(2, 'Jhon', 'Galt', 'jg@mail.com', 'clavetest', 1),
(3, 'Cosme', 'Fulanito', 'cfulanito@mail.com', 'cfulanito', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Marca` (`idMarca`),
  ADD KEY `Rubro` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Email` (`usuEmail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
