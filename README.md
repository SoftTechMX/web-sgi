<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

## Sistema de Inventario

Este proyecto es un sistema basico de inventario que permite realizar las siguientes operaciones (CRUD):

1. (C) Registrar Productos
2. (R) Ver el listado de productos
2. (U) Editar/Actualizar Productos
3. (D) Eliminar Productos

Tambien se pueden hacer las siguientes operaciones:
1. (C) Registrar Unidades de Medida
2. (R) Ver el listado de Unidades de Medida
2. (U) Editar/Actualizar Unidades de Medida
3. (D) Eliminar Unidades de Medida

ESTRUCTURA DE DIRECTORIOS
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUERIMENTOS
------------

Los requerimento para ejecutar el proyecto son los siguientes:

* PostgreSQL Server 14
* PHP 8.2.
* Composer 2


INSTALACION Y CONFIGURACION
------------

### Paso 1: Creacion de la Base de Datos

Clona este repositorio, y procede a abrir una terminal en la carpeta raiz del proyecto. La aplicacion necesita una base de datos para poder funcionar correctamente, es necesario crear una base de datos y un usuario, para dicha db, ademas es necesario otorgarle los permisos apropiados al usuario para que pueda realizar las operaciones correspodientes. A continuacion se muestran los comandos necesarios para realizar dichas acciones.

Ejecuta los siguientes comandos:

```bash
sudo -i -u postgres psql
psql -U postgres
```

Ya una vez que se inicia sesion con el usuario Postgres y se ha abierto la shell de SQL se debe ejecutar los siguientes comandos para crear la DB y el usuario.

```SQL
CREATE DATABASE pedidos;
CREATE USER administrador WITH PASSWORD 'admin12345';
GRANT ALL PRIVILEGES ON DATABASE pedidos TO administrador;
```

### Paso 2: Importacion de la DB

Vamos a importar la base de datos, primero vamos a validar que el usuario se ha creado correctamente ejecutando el siguiente comando:

```bash
psql -h localhost -U administrador -d pedidos
```

al ejecutar ese comando se debe acceder a la base de datos, *SI NO SE ACCEDE O SE MUESTRA ALGUN ERROR HAY QUE EJECUTAR LOS PASOS ANTERIORES CORRECTAMENTE*, se debe mostrar algo como lo siguiente:

```
psql (14.12 (Ubuntu 14.12-0ubuntu0.22.04.1))
SSL connection (protocol: TLSv1.3, cipher: TLS_AES_256_GCM_SHA384, bits: 256, compression: off)
Type "help" for help.

pedidos=> 

```

Ahora procedemos a importar la DB, cierra la sesion que acabas de abrir (presiona control+d),
Despues ejecuta los siguientes comandos:

```bash
cd documentacion
psql -h localhost -U administrador -d pedidos < db.sql
```

### Paso 3: Ejecucion de la APP

Ya para finalizar vamos a probar si la app se esta ejecutando correctamente, para ello vamos a iniciarla con el siguiente comando:

```bash
php yii serve --port=8888
```

Despues accede a la ruta [http://localhost:8080/](http://localhost:8080/) en tu navegador, deberias de ver la app sin ningun error.

### Paso 4:

```bash
./yii migrate
```
