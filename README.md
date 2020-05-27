# trabajo3-paw
## Guía de Ejecución:
<br>
En primer lugar, podemos mencionar que esta aplicación fue probada en Windows 10 Home, utilizando el siguiente software instalado: wamp server versión 3.2.0 - 64bit: PHP versión 7.3.12, MariaDB versión 10.4.10 y MySQL versión 8.0.18. <br>
También es importante aclarar un par de cambios necesarios en un archivo de configuración para poder cumplir con una de las consignas de este trabajo. La misma impone la restricción de que el sistema solo debe poder cargar imágenes de hasta 10 MB. Para hacer esto posible hay que cambiar en el archivo de configuración de php las directivas post_max_size (por defecto establecida en 8 MB) y upload_max_filesize. Para subir archivos grandes, el primero debe ser mayor que el segundo. <br>
Para correr la aplicación se deben seguir los siguientes pasos: <br>

### Base de datos
- Clonar el repositorio
- Se debe crear una base de datos sql con el nombre "pawtp3".
- Una vez creada se debe ejecutar el código sql que está en el directorio sql/0002_create_table_ap.sql sobre la base.
- Crear un archivo config.php (hay un ejemplo para copiar en config.php.example).
- Una vez hecho esto ya tenemos la base de datos junto con la tabla appointments creadas.

### Composer

-En el directorio raiz del programa ejecutar el codigo
```
composer install
```

Este comando se va a encargar de administrar, descargar e instalar nuestras dependencias de manera automática. <br>


Una vez realizado esto en la terminal hay que ingresar:
```
php -S localhost:[port]
```
Y por último en el navegador ir a
```
localhost:[port]
```

## Respuestas teóricas: 
<br>

**1. Extienda el sistema de gestión de turnos médicos para que los datos sean persistidos sobre una base de datos MySQL usando PDO. La generación del número de turno debe hacerse vía motor de base de datos. ¿Qué cambios hubo que realizar para la generación del id?**
<br>
En la resolución del trabajo práctico anterior, para generar el id que discrimina un turno de otro utilizamos la función uniqid propia del lenguaje. En cambio, en este práctico, la generación del mismo pasa a ser responsabilidad de la base de datos ya que tildamos dentro del campo id la opción AUTO_INCREMENT. Esto hace que el identificador se genere automáticamente cada vez que se inserta una nueva fila en la tabla (sumando de a 1 por defecto). <br>

**4. Cada acción del ABM debe ser registrada usando el Logger del framework. Cada log debe ser de tipo INFO y almacenar fecha y hora, operación (ABM), y turno afectado (id). En los casos de modificación y baja, almacene el registro completo. ¿Considera esto útil? ¿En qué casos puede llegar a utilizarse?**
<br>
El archivo de log en general es muy importante como fuente variada de información, me permite obtener estadísticas, mantener un historial de transacciones, realizar una auditoria, detectar posibles ataques, encontrar errores, etc.
El log info captura en este caso entradas al sistema, modificaciones y bajas. En estos dos últimos, se pide almacenar el registro completo, esto nos parece útil para los casos en los que debemos recuperar esos datos que fueron modificados o eliminados cuando no se debería. Por ejemplo, podrían llegar a utilizarse en el caso de querer volver a un estado anterior, ver el historial de un determinado registro, casos de recuperación, entre otros.