# Sencillo ejemplo del patrón MVC con PHP nativo
Ejemplo de MVC nativo (sin framework) basado en el tutorial de [Victor Robles](https://victorroblesweb.es/2013/11/18/tutorial-mvc-en-php-nativo/)

## Configuración de la base de datos
Es necesario la creación de una base de datos de donde se obtendrán los productos. 

La tabla que se consulta puede crearse con el script:

```
CREATE TABLE `products` (
  `cod` int(11) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `pvp` decimal(5,2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

Para añadir productos a la tabla ```products``` puedes utilizar el script:

```
INSERT INTO `products` (`cod`, `short_name`, `pvp`, `nombre`) VALUES
(1, 'Monitor', '400.00', 'Dell 21 full HD'),
(2, 'Teclado', '9.99', 'Teclado inalámbrico Logitech'),
(3, 'iPad Pro', '900.00', 'Apple iPad Pro 9');
```



