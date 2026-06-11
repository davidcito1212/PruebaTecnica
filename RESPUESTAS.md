# RESPUESTAS

## 1. ¿Qué es el patrón MVC y qué responsabilidad tiene cada parte?

MVC es una forma de organizar una aplicacion. El Modelo maneja los datos, la Vista muestra la informacion al usuario y el Controlador conecta ambas partes.

## 2. Diferencia entre los métodos HTTP GET y POST. ¿Cuándo usarías cada uno?

GET se usa para consultar o mostrar informacion. POST se usa para enviar datos y crear registros. Por ejemplo, GET para ver una lista de tareas y POST para guardar una tarea nueva.

## 3. ¿Qué es Eloquent en Laravel y qué problema resuelve?

Eloquent es el sistema que usa Laravel para trabajar con la base de datos usando objetos de PHP. Ayuda a hacer consultas de una forma mas sencilla y organizada.

## 4. ¿Qué hace el comando php artisan migrate y para qué sirven las migraciones?

El comando ejecuta las migraciones y actualiza las tablas de la base de datos. Las migraciones sirven para llevar control de los cambios realizados en la base de datos.

## 5. Diferencia entre == y === en PHP. Da un ejemplo donde el resultado cambie.

El operador == compara solo el valor. El operador === compara el valor y también el tipo de dato.

Ejemplo:

"5" == 5 da true.

"5" === 5 da false porque uno es texto y el otro es número.

## 6. ¿Qué es Composer y cuál es la diferencia entre composer install y composer update?

Composer es una herramienta para instalar y administrar dependencias de PHP. install instala las versiones definidas en el proyecto y update busca versiones mas recientes.

## 7. ¿Cuál es la diferencia entre git pull y git fetch?

git fetch descarga los cambios del repositorio remoto pero no los implementa. git pull descarga los cambios y este si los integra o implementa en el proyecto local.
