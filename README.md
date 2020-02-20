
# Administrador de empleados

## Ejercicio de back-end para SummaSolutions


> 1) Crear la tabla employees en MYSQL

```bash
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `last_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `age` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `job` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

```


> 2) Clonar el repositorio

> 3) ingresar al nuevo directorio creado

```bash
cd summa-backend
```

> 4) Modificar el archivo /config.php con los valores de la conexión a MYSQL.


> 5) Levantar un servidor php

```bash
php -S 127.0.0.1:8080
```
